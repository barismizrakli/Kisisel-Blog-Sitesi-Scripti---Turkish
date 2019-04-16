<div class="row">
    <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Yeni Sayfa Ekle</h3>
                <br>
                <small>Bu formdan yeni sayfa ekleyebilirsiniz</small>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <?php echo form_open('admin/add-page-post'); ?>
            <div class="box-body">
                <!-- include message block -->
                <?php $this->load->view('admin/_messages'); ?>

                <div class="form-group">
                    <input type="text" class="form-control" name="title"
                           placeholder="Sayfa Başlığı" value="<?php echo old('title'); ?>">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="page_description"
                           placeholder="Sayfa İçeriği" value="<?php echo old('page_description'); ?>">
                </div>

                <div class="form-group" style="height: 60px;">
                    <div class="row">
                        <div class="col-sm-1" style="min-width:70px;">
                            <label class="control-label">Konum</label>
                        </div>
                        <div class="col-sm-11" style="margin-bottom: 15px;">

                            <div class="visibility-radio">
                                <input type="radio" id="radio1" name="location" value="header" class="flat-orange" checked>&nbsp;&nbsp;
                                <label for="radio1" class="cursor-pointer">Başlık</label>
                            </div>
                            <div class="visibility-radio">
                                <input type="radio" id="radio2" name="location" value="footer" class="flat-orange">&nbsp;&nbsp;
                                <label for="radio2" class="cursor-pointer">Alt Bilgi</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                            <textarea id="ckEditor" class="form-control" name="page_content"
                                      placeholder="Content"><?php echo old('page_content'); ?></textarea>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Yeni Sayfa Ekle</button>
            </div>
            <!-- /.box-footer -->

            <?php echo form_close(); ?><!-- form end -->
        </div>
        <!-- /.box -->
    </div>
</div>

