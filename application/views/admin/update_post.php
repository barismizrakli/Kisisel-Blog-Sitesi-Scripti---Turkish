<div class="row">
    <div class="col-lg-11 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Gönderi Güncelle</h3>
                <br>
                <small>Buradan gönderilerinizi güncelleyebilirsiniz</small>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <?php echo form_open_multipart('admin/update-post-post', ['onkeypress' => 'return event.keyCode != 13;']); ?>

            <div class="box-body">
                <!-- include message block -->
                <?php $this->load->view('admin/_messages'); ?>

                <input type="hidden" name="id" value="<?php echo html_escape($post->id); ?>">

                <div class="form-group">
                    <label class="control-label">Başlık</label>
                    <input type="text" class="form-control" name="title" placeholder="Title"
                           value="<?php echo html_escape($post->title); ?>" required>
                </div>

                <div class="form-group">
                    <label class="control-label">Özet</label>
                    <textarea class="form-control text-area" name="summary"
                              placeholder="Summary"><?php echo html_escape($post->summary); ?></textarea>
                </div>

                <div class="form-group">
                    <label class="control-label">Kategori</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">Bir kategori seçiniz</option>
                        <?php foreach ($categories as $item): ?>
                            <?php if ($item->id == $post->category_id): ?>
                                <option value="<?php echo html_escape($item->id); ?>"
                                        selected><?php echo html_escape($item->name); ?></option>
                            <?php else: ?>
                                <option value="<?php echo html_escape($item->id); ?>"><?php echo html_escape($item->name); ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label">Görünürlük</label>
                    <div class="col-sm-12" style="margin-bottom: 15px;">
                        <div class="row">
                            <div class="visibility-radio">
                                <input type="radio" id="radio1" name="visibility" value="1" class="flat-orange" <?php echo ($post->visibility == 1) ? 'checked' : ''; ?>>&nbsp;&nbsp;
                                <label for="radio1" class="cursor-pointer">Göster</label>
                            </div>
                            <div class="visibility-radio">
                                <input type="radio" id="radio2" name="visibility" value="0" class="flat-orange" <?php echo ($post->visibility == 0) ? 'checked' : ''; ?>>&nbsp;&nbsp;
                                <label for="radio2" class="cursor-pointer">Gizle</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" style="margin-right: 15px;">Kaydırıcıya Ekle</label>
                    <?php if ($post->is_slider == 1): ?>
                        <input type="checkbox" name="is_slider" value="1" class="flat-orange" checked>
                    <?php else: ?>
                        <input type="checkbox" name="is_slider" value="1" class="flat-orange">
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label class="control-label" style="margin-right: 15px;">Sadece kayıtlı kullanıcılar görsün</label>
                    <?php if ($post->need_auth == 1): ?>
                        <input type="checkbox" name="need_auth" value="1" class="flat-orange" checked>
                    <?php else: ?>
                        <input type="checkbox" name="need_auth" value="1" class="flat-orange">
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label class="control-label">Etiketler</label>
                    <input id="tags-input" type="text" name="tags" data-role="tagsinput"
                           class="form-control" value="<?php echo html_escape($tags); ?>"/>
                    <small>(Etiket gir ve Enter Bas)</small>
                </div>


                <div class="form-group">
                    <label class="control-label">Görsel</label>
                    <div class="col-sm-12 p0">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?php echo base_url() . html_escape($post->image_mid); ?>" alt=""
                                     class="thumbnail img-responsive">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class='btn btn-success btn-sm'>
                                    Resmi Değiştir
                                    <input type="file" id="Multifileupload" name="file" size="40"
                                           class="uploadFile" accept=".png, .jpg, .jpeg, .gif">
                                </a>
                            </div>
                        </div>

                        <div id="MultidvPreview">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label control-label">Fazladan Resim Ekle</label>
                    <div class="col-sm-12 p0">
                        <div class="row">
                            <?php foreach ($post_images as $item) : ?>
                                <?php if ($item) : ?>
                                    <div class="col-sm-3">
                                        <img src="<?php echo base_url() . html_escape($item->image_path); ?>" alt=""
                                             class="thumbnail img-responsive">
                                        <a class="btn btn-danger btn-delete-image"
                                           onclick="deletePostImage('<?php echo html_escape($item->id); ?>');">
                                            <i class="fa fa-times"></i>
                                        </a>

                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class='btn btn-success btn-sm'>
                                    Yeni Resim Ekle
                                    <input type="file" id="Multifileupload1" name="add_file[]" size="40"
                                           class="uploadFile" accept=".png, .jpg, .jpeg, .gif" multiple>
                                </a>
                            </div>
                        </div>

                        <div id="MultidvPreview1">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label">Özel URL Bağlantısı</label>
                    <input type="text" class="form-control"
                           name="optional_url" placeholder="Optional Url"
                           value="<?php echo html_escape($post->optional_url); ?>">
                </div>

                <div class="form-group">
                    <label class="control-label">İletişim</label>
                    <textarea id="ckEditor" class="form-control"
                              name="content" placeholder="Content"><?php echo html_escape($post->content); ?></textarea>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Değişiklikleri Kaydet</button>
            </div>
            <!-- /.box-footer -->
            <?php echo form_close(); ?><!-- form end -->
        </div>
        <!-- /.box -->
    </div>
</div>

<script>
    var delete_post_image_url = '<?php echo base_url(); ?>admin/delete-post-image-post';
</script>