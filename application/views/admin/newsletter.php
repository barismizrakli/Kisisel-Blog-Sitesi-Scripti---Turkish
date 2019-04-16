<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tüm Kullanıcılara E-posta Gönder</h3>
                <br>
                <small>Burada tüm kullanıcılara E-Posta gönderebilirsiniz</small>
            </div>
            <!-- /.box-header -->


            <!-- form start -->
            <?php echo form_open('admin/newsletter-send-email-post'); ?>

            <div class="box-body">
                <!-- include message block -->
                <?php $this->load->view('admin/_messages'); ?>

                <div class="form-group">
                    <label>Konu</label>
                    <input type="text" name="subject" class="form-control" placeholder="Başlığınız" required>
                </div>
                <div class="form-group">
                    <label>Mesaj</label>
                    <textarea id="ckEditor" name="message" class="form-control textarea-exp" required></textarea>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Maili Gönder</button>
            </div>
            <!-- /.box-footer -->

            <?php echo form_close(); ?><!-- form end -->

        </div>
        <!-- /.box -->
    </div>
</div>


<div class="box">
    <div class="box-header">
        <div class="left">
            <h3 class="box-title">Kayıtlı Mailler</h3>
            <br>
            <small class="pull-left">Burada Kayıtlı Mailleri görebilirsiniz</small>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable" id="cs_datatable" role="grid"
                           aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                            <th width="20">Numara</th>
                            <th>E-Mail</th>
                            <th>Tarih</th>
                            <th class="max-width-120">Ayarlar</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($newsletter as $item): ?>
                            <tr>
                                <td><?php echo html_escape($item->id); ?></td>
                                <td><?php echo html_escape($item->email); ?></td>
                                <td><?php echo html_escape($item->created_at); ?></td>

                                <td>
                                    <!-- form delete email -->
                                    <?php echo form_open('admin/delete-newsletter-post'); ?>

                                    <input type="hidden" name="id" value="<?php echo html_escape($item->id); ?>">

                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle btn-select-option" type="button"
                                                data-toggle="dropdown">Bir işlem seçiniz
                                            <span class="caret"></span></button>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="p0">
                                                    <button type="submit" class="btn-list-button"
                                                            onclick="return confirm('Are you sure you want to delete this email address?');">
                                                        <i class="fa fa-trash i-delete"></i>Sil
                                                    </button>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>

                                    <?php echo form_close(); ?><!-- form end -->

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
