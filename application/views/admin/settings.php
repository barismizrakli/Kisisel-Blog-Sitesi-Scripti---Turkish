<div class="row">
    <div class="col-md-12">
        <!-- form start -->
        <?php echo form_open_multipart('admin/settings-post'); ?>

        <input type="hidden" name="logo_path" value="<?php echo html_escape($settings->logo_path); ?>">
        <input type="hidden" name="favicon_path" value="<?php echo html_escape($settings->favicon_path); ?>">

        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-Örnanded="true">Genel Ayarlar</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-Örnanded="false">Email Ayarları</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-Örnanded="false">İletişim Ayarları</a></li>
                <li class=""><a href="#tab_4" data-toggle="tab" aria-Örnanded="false">Sosyal Medya Ayarları</a></li>
                <li class=""><a href="#tab_5" data-toggle="tab" aria-Örnanded="false">Görünürlük Ayarları</a></li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content settings-tab-content">
                <!-- include message block -->
                <?php $this->load->view('admin/_messages'); ?>

                <div class="tab-pane active" id="tab_1">

                    <div class="form-group">
                        <label class="control-label">Dil</label>
                        <div class="col-sm-12" style="margin-bottom: 15px;">
                            <div class="row">
                                <div class="col-sm-2 col-xs-12 col-lang">
                                    <input type="radio" name="site_lang" value="english" id="lang_en" class="flat-orange"
                                        <?php echo ($settings->site_lang == "english") ? "checked" : ""; ?>>
                                    <label for="lang_en" class="option-label">English</label>
                                </div>

                                <div class="col-sm-2 col-xs-12 col-lang">
                                    <input type="radio" name="site_lang" value="german" id="lang_ger" class="flat-orange"
                                        <?php echo ($settings->site_lang == "german") ? "checked" : ""; ?>>
                                    <label for="lang_ger" class="option-label"> German</label>
                                </div>

                                <div class="col-sm-2 col-xs-12 col-lang">
                                    <input type="radio" name="site_lang" value="french" id="lang_fr" class="flat-orange"
                                        <?php echo ($settings->site_lang == "french") ? "checked" : ""; ?>>
                                    <label for="lang_fr" class="option-label"> French</label>
                                </div>

                                <div class="col-sm-2 col-xs-12 col-lang">
                                    <input type="radio" name="site_lang" value="russian" id="lang_ru" class="flat-orange"
                                        <?php echo ($settings->site_lang == "russian") ? "checked" : ""; ?>>
                                    <label for="lang_ru" class="option-label"> Russian</label>
                                </div>

                                <div class="col-sm-2 col-xs-12 col-lang">
                                    <input type="radio" name="site_lang" value="turkish" id="lang_tr" class="flat-orange"
                                        <?php echo ($settings->site_lang == "turkish") ? "checked" : ""; ?>>
                                    <label for="lang_tr" class="option-label"> Türkçe</label>
                                </div>

                                <div class="col-sm-2 col-xs-12 col-lang">
                                    <input type="radio" name="site_lang" value="portuguese" id="lang_pt" class="flat-orange"
                                        <?php echo ($settings->site_lang == "portuguese") ? "checked" : ""; ?>>
                                    <label for="lang_pt" class="option-label"> Portuguese</label>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label"> Ana Sayfa Kaydırıcı </label>
                        <div class="col-sm-12" style="margin-bottom: 15px;">
                            <div class="row">
                                <?php if ($settings->slider_active == 1): ?>
                                    <input type="checkbox" name="slider_active" checked data-toggle="toggle"
                                           data-on="On" data-off="Off" data-onstyle="success" data-offstyle="danger"
                                           value="1">
                                <?php else: ?>
                                    <input type="checkbox" name="slider_active" data-toggle="toggle" data-on="On"
                                           data-off="Off" data-onstyle="success" data-offstyle="danger" value="1">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label"> Sayfa Görünümü Sayılarını Göster </label>
                        <div class="col-sm-12" style="margin-bottom: 15px;">
                            <div class="row">
                                <?php if ($settings->show_pageviews == 1): ?>
                                    <input type="checkbox" name="show_pageviews" checked data-toggle="toggle"
                                           data-on="On"
                                           data-off="Off" data-onstyle="success" data-offstyle="danger" value="1">
                                <?php else: ?>
                                    <input type="checkbox" name="show_pageviews" data-toggle="toggle" data-on="On"
                                           data-off="Off" data-onstyle="success" data-offstyle="danger" value="1">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Ziyaret Butonu</label>
                        <input type="text" class="form-control" name="optional_url_button_name"
                               placeholder="Buton Adınız"
                               value="<?php echo html_escape($settings->optional_url_button_name); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Bölüm Hakkında Bilgi</label>
                        <textarea class="form-control text-area" name="about_footer" placeholder="Bölüm Hakkında Bilgiler Veriniz"
                                  style="min-height: 140px;"><?php echo html_escape($settings->about_footer); ?></textarea>
                    </div>

                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                        <label class="control-label">Mail Başlığı</label>
                        <input type="text" class="form-control" name="mail_title"
                               placeholder="Örn: Barış MIZRAKLI" value="<?php echo html_escape($settings->mail_title); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Mail Host</label>
                        <input type="text" class="form-control" name="mail_host"
                               placeholder="Örn: smtp.gmail.com" value="<?php echo html_escape($settings->mail_host); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Mail Port</label>
                        <input type="text" class="form-control" name="mail_port"
                               placeholder="Örn: 587" value="<?php echo html_escape($settings->mail_port); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Mail Kullanıcı Adı</label>
                        <input type="text" class="form-control" name="mail_username"
                               placeholder="Örn: info@barismizrakli.com" value="<?php echo html_escape($settings->mail_username); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Mail Şifre</label>
                        <input type="password" class="form-control" name="mail_password"
                               placeholder="Mail Şifreniz" value="<?php echo html_escape($settings->mail_password); ?>">
                    </div>


                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_3">
                    <div class="form-group">
                        <label class="control-label">Adres</label>
                        <input type="text" class="form-control" name="contact_address"
                               placeholder="Adres" value="<?php echo html_escape($settings->contact_address); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Email Adres</label>
                        <input type="text" class="form-control" name="contact_email"
                               placeholder="Email Adres" value="<?php echo html_escape($settings->contact_email); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Telefon Numarası</label>
                        <input type="text" class="form-control" name="contact_phone"
                               placeholder="+90" value="<?php echo html_escape($settings->contact_phone); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">İletişim Metni</label>
                        <textarea id="ckEditor" class="form-control" name="contact_text"
                                  placeholder="İletişim Metniniz"><?php echo html_escape($settings->contact_text); ?></textarea>
                    </div>


                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_4">
                    <div class="form-group">
                        <label class="control-label">Facebook Url</label>
                        <input type="text" class="form-control" name="facebook_url"
                               placeholder="Facebook Url" value="<?php echo html_escape($settings->facebook_url); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Twitter Url</label>
                        <input type="text" class="form-control"
                               name="twitter_url" placeholder="Twitter Url"
                               value="<?php echo html_escape($settings->twitter_url); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Google Url</label>
                        <input type="text" class="form-control"
                               name="google_url" placeholder="Google Url"
                               value="<?php echo html_escape($settings->google_url); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Instagram Url</label>
                        <input type="text" class="form-control" name="instagram_url" placeholder="Instagram Url"
                               value="<?php echo html_escape($settings->instagram_url); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Pinterest Url</label>
                        <input type="text" class="form-control" name="pinterest_url" placeholder="Pinterest Url"
                               value="<?php echo html_escape($settings->pinterest_url); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">LinkedIn Url</label>
                        <input type="text" class="form-control" name="linkedin_url" placeholder="LinkedIn Url"
                               value="<?php echo html_escape($settings->linkedin_url); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">VK Url</label>
                        <input type="text" class="form-control" name="vk_url"
                               placeholder="VK Url" value="<?php echo html_escape($settings->vk_url); ?>">
                    </div>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_5">

                    <div class="form-group">
                        <label class="control-label">Renk Seç</label>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="custom-checkbox">
                                    <input type="radio" name="site_color" id="color1" value="default"
                                           class="regular-checkbox" <?php echo ($settings->site_color === "default" ||
                                        $settings->site_color === "") ? "checked" : ""; ?>/>
                                    <label for="color1"></label>
                                </div>

                                <div class="custom-checkbox color-red">
                                    <input type="radio" name="site_color" id="color2" value="red"
                                           class="regular-checkbox"
                                        <?php echo ($settings->site_color === "red") ? "checked" : ""; ?>/>
                                    <label for="color2"></label>
                                </div>

                                <div class="custom-checkbox color-green">
                                    <input type="radio" name="site_color" id="color3" value="green"
                                           class="regular-checkbox"
                                        <?php echo ($settings->site_color === "green") ? "checked" : ""; ?>/>
                                    <label for="color3"></label>
                                </div>

                                <div class="custom-checkbox color-orange">
                                    <input type="radio" name="site_color" id="color4" value="orange"
                                           class="regular-checkbox" <?php echo ($settings->site_color === "orange") ? "checked" : ""; ?>/>
                                    <label for="color4"></label>
                                </div>

                                <div class="custom-checkbox color-purple">
                                    <input type="radio" name="site_color" id="color5" value="purple"
                                           class="regular-checkbox" <?php echo ($settings->site_color === "purple") ? "checked" : ""; ?>/>
                                    <label for="color5"></label>
                                </div>

                                <div class="custom-checkbox color-mountain-meadow">
                                    <input type="radio" name="site_color" id="color6" value="mountain-meadow"
                                           class="regular-checkbox" <?php echo ($settings->site_color === "mountain-meadow") ? "checked" : ""; ?>/>
                                    <label for="color6"></label>
                                </div>

                                <div class="custom-checkbox color-blue">
                                    <input type="radio" name="site_color" id="color7" value="blue"
                                           class="regular-checkbox" <?php echo ($settings->site_color === "blue") ? "checked" : ""; ?>/>
                                    <label for="color7"></label>
                                </div>

                                <div class="custom-checkbox color-yellow">
                                    <input type="radio" name="site_color" id="color8" value="yellow"
                                           class="regular-checkbox" <?php echo ($settings->site_color === "yellow") ? "checked" : ""; ?>/>
                                    <label for="color8"></label>
                                </div>

                                <div class="custom-checkbox color-dark">
                                    <input type="radio" name="site_color" id="color9" value="dark"
                                           class="regular-checkbox" <?php echo ($settings->site_color === "dark") ? "checked" : ""; ?>/>
                                    <label for="color9"></label>
                                </div>

                                <div class="custom-checkbox color-pink">
                                    <input type="radio" name="site_color" id="color10" value="pink"
                                           class="regular-checkbox" <?php echo ($settings->site_color === "pink") ? "checked" : ""; ?>/>
                                    <label for="color10"></label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Logo</label>
                        <div class="col-sm-12 p0">
                            <div class="row">
                                <div class="col-sm-3">
                                    <?php if (!empty($settings->logo_path)): ?>
                                        <img src="<?php echo base_url() . html_escape($settings->logo_path); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class='btn btn-default btn-sm'>
                                         Logo Değiştir
                                        <input type="file" name="logo" size="40" class="uploadFile"
                                               accept=".png, .jpg, .jpeg, .gif"
                                               onchange="$('#upload-file-info1').html($(this).val());">
                                    </a>
                                </div>
                            </div>

                            <span class='label label-info' id="upload-file-info1"></span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Favicon</label>
                        <div class="col-sm-12 p0">
                            <div class="row">
                                <div class="col-sm-3">
                                    <?php if (!empty($settings->favicon_path)): ?>
                                        <img src="<?php echo base_url() . html_escape($settings->favicon_path); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class='btn btn-default btn-sm'>
                                        Favicon Değiştir
                                        <input type="file" name="favicon" size="40" class="uploadFile"
                                               accept=".png, .jpg, .jpeg, .gif"
                                               onchange="$('#upload-file-info2').html($(this).val());">
                                    </a>
                                </div>
                            </div>

                            <span class='label label-info' id="upload-file-info2"></span>
                        </div>
                    </div>
                </div><!-- /.tab-pane -->

            </div><!-- /.tab-content -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Değişiklikleri Kaydet</button>
            </div>
        </div><!-- nav-tabs-custom -->

        <?php echo form_close(); ?>
    </div><!-- /.col -->
</div>
