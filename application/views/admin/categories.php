<div class="row">
    <div class="col-md-5 col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Yeni Kategori Ekle</h3>
                <br>
                <small>Bu formdan yeni bir kategori ekleyebilirsiniz</small>
            </div>
            <!-- /.box-header -->



            <!-- form start -->
            <?php echo form_open('admin/add-category-post'); ?>

            <div class="box-body">
                <div class="form-group">
                    <label>Kategori Adınız</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Kategori Adı"
                           value="<?php echo old('name'); ?>" maxlength="200" required>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Yeni Kategori Ekle</button>
            </div>
            <!-- /.box-footer -->
            <?php echo form_close(); ?><!-- form end -->
        </div>
        <!-- /.box -->
    </div>


    <div class="col-md-7 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="pull-left">
                    <h3 class="box-title">Kategoriler</h3>
                    <br>
                    <small>Bu sayfadaki tüm kategorileri görebilirsiniz..</small>
                </div>
            </div><!-- /.box-header -->

            <!-- include message block -->
            <div class="col-sm-12">
                <?php $this->load->view('admin/_messages'); ?>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped dataTable" id="cs_datatable" role="grid"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr role="row">
                                    <th width="20">Numara</th>
                                    <th>Kategori Adı</th>
                                    <th class="max-width-120">Ayarlar</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($categories as $item): ?>
                                    <tr>
                                        <td><?php echo html_escape($item->id); ?></td>
                                        <td><?php echo html_escape($item->name); ?></td>
                                        <td>
                                            <!--Form delete category-->
                                            <?php echo form_open('admin/delete-category-post'); ?>

                                            <input type="hidden" name="category_id"
                                                   value="<?php echo html_escape($item->id); ?>">

                                            <div class="dropdown">
                                                <button class="btn btn-danger dropdown-toggle btn-select-option"
                                                        type="button" data-toggle="dropdown">Bir İşlem Yapınız
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>admin/update-category/<?php echo html_escape($item->id); ?>"><i
                                                                    class="fa fa-edit i-edit"></i>Düzenle</a></li>
                                                    <li>
                                                        <a class="p0">
                                                            <button type="submit" class="btn-list-button"
                                                                    onclick="return confirm('Are you sure you want to delete this category?');">
                                                                <i class="fa fa-trash i-delete"></i>Sil
                                                            </button>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            </form><!--Form end-->

                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </div>
</div>
