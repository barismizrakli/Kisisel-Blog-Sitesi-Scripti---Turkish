<div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Site Haritası Oluştur</h3>
                <br>
                <small>Bu sayfada sitemap.xml oluşturabilirsiniz</small>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <?php echo form_open('admin/generate-sitemap-post'); ?>
            <div class="box-body">
                <!-- include message block -->
                <?php $this->load->view('admin/_messages'); ?>

                <div class="form-group">
                    <label class="label-sitemap">Sıklık</label>
                    <small class="small-sitemap">Bu değer, belirli bir URL’deki içeriğin ne sıklıkta değişebileceğini gösterir</small>

                    <select name="frequency" class="form-control">
                        <option value="none">Yok</option>
                        <option value="always">Her Zaman</option>
                        <option value="hourly">Saat Başı</option>
                        <option value="daily">Günlük</option>
                        <option value="weekly">Haftalık</option>
                        <option value="monthly" selected>Aylık</option>
                        <option value="yearly">Yıllık</option>
                        <option value="never">Asla</option>
                    </select>

                </div>

                <div class="form-group">
                    <label class="label-sitemap">Son değişiklik</label>
                    <small class="small-sitemap">URL’nin en son değiştirildiği saat</small>
                    <div class="form-radio">
                        <input type="radio" name="last_modification" value="none" class="flat-orange"> <span>Yok</span>
                    </div>

                    <div class="form-radio">
                        <input type="radio" name="last_modification" value="server_response" class="flat-orange" checked> <span>Sunucunun Yanıtı</span>
                    </div>

                    <div class="form-radio">
                        <input type="radio" name="last_modification" value="custom" class="flat-orange">
                        <span> Bu tarihi / saati kullanın: </span>
                        <input type="text" class="form-control input-custom-time" name="lastmod_time" value="<?php echo date("Y-m-d H:i:s"); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="label-sitemap">Öncelik</label>
                    <small class="small-sitemap">Aynı sitedeki diğer sayfalara göre belirli bir URL’nin önceliği</small>
                    <div class="form-radio">
                        <input type="radio" name="priority" value="none" class="flat-orange"> <span>Asla</span>
                    </div>

                    <div class="form-radio">
                        <input type="radio" name="priority" value="automatically" class="flat-orange" checked> <span>Otomatik olarak hesaplanmış olan öncelik</span>
                    </div>

                </div>

                <!-- /.box-body -->
                <div class="box-footer" style="padding-left: 0; padding-right: 0;">
                    <button type="submit" class="btn btn-primary pull-right">Oluştur</button>
                </div>
                <!-- /.box-footer -->

                <?php echo form_close(); ?><!-- form end -->
            </div>
            <!-- /.box -->
        </div>
    </div>

