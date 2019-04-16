<div class="row">
    <div class="col-lg-11 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Reklam Alanları</h3>
                <br>
                <small>Reklam alanlarını bu formdan güncelleyebilirsiniz</small>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <?php echo form_open('admin/ads-post'); ?>

            <div class="box-body">
                <!-- include message block -->
                <?php $this->load->view('admin/_messages'); ?>

                <div class="form-group">
                    <h4 class="text-center">Dizin Sayfası Reklam Alanı</h4>
                    <label class="control-label">728x90</label>
                    <textarea class="form-control text-area" name="home_728"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->home_728; ?></textarea>
                    <br>

                    <label class="control-label">468x60</label>


                    <textarea class="form-control text-area" name="home_468"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->home_468; ?></textarea>

                    <br>
                    <label class="control-label">234x60</label>


                    <textarea class="form-control text-area" name="home_234"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->home_234; ?></textarea>
                    <br>
                </div>

                <div class="form-group">
                    <h4 class="text-center">İlan Sayfası Sayfa Reklam Alanı</h4>
                    <label class="control-label">728x90</label>
                    <textarea class="form-control text-area" name="post_728"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->post_728; ?></textarea>
                    <br>

                    <label class="control-label">468x60</label>
                    <textarea class="form-control text-area" name="post_468"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->post_468; ?></textarea>
                    <br>

                    <label class="control-label">234x60</label>
                    <textarea class="form-control text-area" name="post_234"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->post_234; ?></textarea>
                    <br>

                </div>

                <div class="form-group">
                    <h4 class="text-center">Kategori Sayfası Reklam Alanları</h4>
                    <label class="control-label">728x90</label>
                    <textarea class="form-control text-area" name="category_728"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->category_728; ?></textarea>
                    <br>

                    <label class="control-label">468x60</label>
                    <textarea class="form-control text-area" name="category_468"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->category_468; ?></textarea>
                    <br>

                    <label class="control-label">234x60</label>
                    <textarea class="form-control text-area" name="category_234"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->category_234; ?></textarea>
                    <br>

                </div>

                <div class="form-group">
                    <h4 class="text-center">Etiket Sayfası Reklam Alanları</h4>
                    <label class="control-label">728x90</label>
                    <textarea class="form-control text-area" name="tag_728"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->tag_728; ?></textarea>
                    <br>

                    <label class="control-label">468x60</label>
                    <textarea class="form-control text-area" name="tag_468"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->tag_468; ?></textarea>
                    <br>

                    <label class="control-label">234x60</label>
                    <textarea class="form-control text-area" name="tag_234"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->tag_234; ?></textarea>
                    <br>

                </div>

                <div class="form-group">
                    <h4 class="text-center">Arama Sayfası Reklam Alanları</h4>
                    <label class="control-label">728x90</label>
                    <textarea class="form-control text-area" name="search_728"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->search_728; ?></textarea>
                    <br>


                    <label class="control-label">468x60</label>
                    <textarea class="form-control text-area" name="search_468"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->search_468; ?></textarea>
                    <br>

                    <label class="control-label">234x60</label>
                    <textarea class="form-control text-area" name="search_234"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->search_234; ?></textarea>
                    <br>

                </div>

                <div class="form-group">
                    <h4 class="text-center">Kenar Çubuğu Reklam Alanı</h4>
                    <label class="control-label">300x250</label>
                    <textarea class="form-control text-area" name="sidebar_300"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->sidebar_300; ?></textarea>
                    <br>

                    <label class="control-label">234x60</label>
                    <textarea class="form-control text-area" name="sidebar_234"
                              placeholder="Kodu buraya yapıştırınız"><?php echo $ads->sidebar_234; ?></textarea>
                    <br>

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
