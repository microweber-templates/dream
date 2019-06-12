<script>

    $(document).ready(function () {
        mw.options.form("#settings-holder", function () {
            mw.notification.success("<?php _e("Template settings are saved"); ?>.");

            parent.$("#theme-style").attr('href', '<?php print mw()->template->get_stylesheet('assets/less/theme.less', 'mw-template-dream-style-vars', false); ?>');

            /* parent.$("#theme-style").each(function(){
             mw.tools.refresh(this)
             }); */

            mw.tools.refresh(window.parent.getElementById('theme-style'))

        });
    });
</script>

<div id="settings-holder">
    <div>
        <h5 style="font-weight: bold;"><?php _lang("Website Settings", "templates/dream"); ?></h5>
    </div>

    <script>mw.lib.require('bootstrap3ns');</script>

    <style>
        #color-scheme {
            display: none;
        }

        .theme-color-selector {
            width: 100%;
            display: block;
            line-height: 34px;
        }

        .theme-color-selector:after {
            width: 100%;
            display: block;
            clear: both;
            content: '';
        }

        .theme-color-selector button {
            border: 1px solid transparent;
            width: 30px;
            height: 30px;
            background: #425cbb;
            margin: 3px;
            outline: none !important;
            border: 1px solid #000000;
            float: left;
            margin-right: 10px;
        }

        .theme-color-selector button.active {
            border: 1px solid #0a0a0a;
        }

        .theme-color-selector button[data-color="blue"] {
            background: #428fbb;
        }

        .theme-color-selector button[data-color="brightgreen"] {
            background: #42bb59;
        }

        .theme-color-selector button[data-color="darkorange"] {
            background: #bb8c42;
        }

        .theme-color-selector button[data-color="darkred"] {
            background: #bb5042;
        }

        .theme-color-selector button[data-color="deepred"] {
            background: #bb4242;
        }

        .theme-color-selector button[data-color="green"] {
            background: #54c39d;
        }

        .theme-color-selector button[data-color="mediumblue"] {
            background: #54bcc3;
        }

        .theme-color-selector button[data-color="olivegreen"] {
            background: #92bb42;
        }

        .theme-color-selector button[data-color="pink"] {
            background: #bb426d;
        }

        .theme-color-selector button[data-color="purple"] {
            background: #bc54c3;
        }

        .theme-color-selector button[data-color="orounda-blue"] {
            background: #0086ed;
        }

        .bootstrap3ns .checkbox label, .bootstrap3ns .radio label {
            padding-left: 0;
        }
    </style>

    <script>
        $(document).ready(function () {
            <?php /* $('#color-scheme').on('change', function () {
                var color = $(this).val();

                if (color == '') {
                    color = '<?php print template_url(); ?>assets/css/theme.css';
                } else {
                    color = '<?php print template_url(); ?>assets/css/theme-' + color + '.css';
                }

                top.$('#theme-color').attr('href', color);
            });


            $('.theme-color-selector button').on('mouseover', function () {
             var color = $(this).data('color');

             if (color == '') {
             color = '<?php print template_url(); ?>assets/css/theme.css';
             } else {
             color = '<?php print template_url(); ?>assets/css/theme-' + color + '.css';
             }
             top.$('#theme-color').attr('hr6ef', color);
             });

            $('.theme-color-selector button').on('click', function () {
                var choosedColor = $(this).data('color');
                console.log($('#color-scheme option[data-color="' + choosedColor + ']"'));

                $('#color-scheme option').prop('selected', false);
                $('#color-scheme option[value="' + choosedColor + '"]').prop('selected', true);
                $('#color-scheme').change();

                $('.theme-color-selector button').removeClass('active');
                $(this).addClass('active');
            });*/ ?>

            $("#footer").on('change', function () {
                window.top.$(".mwjs-dream-footer").stop()[this.checked ? 'slideUp' : 'slideDown']()
            });
            $("#profile-link").on('change', function () {
                window.top.$(".dream-profile-link").css({
                    display: this.checked ? 'inline-block' : 'none'
                })
            });

            $("#search-field").on('change', function () {
                window.top.$(".dream-search-link").css({
                    display: this.checked ? 'inline-block' : 'none'
                })
            });

            $("#stop_transparent_nav").on('change', function () {
                window.top.$("nav .nav-bar")[this.checked ? 'removeClass' : 'addClass']('nav--absolute nav--transparent')
            });
        });
    </script>

    <div class="bootstrap3ns">
        <?php
        $shopping_cart = get_option('shopping-cart', 'mw-template-dream');
        if ($shopping_cart == '') {
            $shopping_cart = 'false';
        } else {
            $shopping_cart = 'true';
        }

        $search_field = get_option('search-field', 'mw-template-dream');
        if ($search_field == '') {
            $search_field = 'false';
        } else {
            $search_field = 'true';
        }

        $profile_link = get_option('profile-link', 'mw-template-dream');
        if ($profile_link == '') {
            $profile_link = 'false';
        } else {
            $profile_link = 'true';
        }

        $preloader = get_option('preloader', 'mw-template-dream');
        if ($preloader == '') {
            $preloader = 'false';
        } else {
            $preloader = 'true';
        }

        $shop1_header_style = get_option('shop1-header-style', 'mw-template-dream');
        if ($shop1_header_style == '') {
            $shop1_header_style = 'clean';
        }

        $shop2_header_style = get_option('shop2-header-style', 'mw-template-dream');
        if ($shop2_header_style == '') {
            $shop2_header_style = 'background';
        }

        $color_scheme = get_option('color-scheme', 'mw-template-dream');
        if ($color_scheme == '') {
            $color_scheme = '';
        }

        $footer = get_option('footer', 'mw-template-dream');
        if ($footer == '') {
            $footer = 'false';
        }

        $stop_transparent_nav = get_option('stop_transparent_nav', 'mw-template-dream');
        if ($stop_transparent_nav == '') {
            $stop_transparent_nav = 'false';
        }
        ?>

        <div class="form-group">
            <div class="checkbox">
                <label class="mw-ui-check">
                    <input type="checkbox" class="mw_option_field" id="stop_transparent_nav" name="stop_transparent_nav"
                           data-option-group="mw-template-dream"
                           value="true" <?php if ($stop_transparent_nav == 'true') {
                        echo 'checked';
                    } ?> />
                    <span></span><span><?php _lang("Disable navigation transparency", "templates/dream"); ?></span>
                </label>
            </div>
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label class="mw-ui-check">
                    <input type="checkbox" class="mw_option_field" id="shopping-cart" name="shopping-cart"
                           data-option-group="mw-template-dream" value="true" <?php if ($shopping_cart == 'true') {
                        echo 'checked';
                    } ?> /> <span></span><span><?php _lang("Show shopping cart in header", "templates/dream"); ?></span>
                </label>
            </div>
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label class="mw-ui-check">
                    <input type="checkbox" class="mw_option_field" id="search-field" name="search-field"
                           data-option-group="mw-template-dream" value="true" <?php if ($search_field == 'true') {
                        echo 'checked';
                    } ?> /> <span></span><span><?php _lang("Show search field in header", "templates/dream"); ?></span>
                </label>
            </div>
        </div>

        <div class="form-group">

            <div class="checkbox">
                <label class="mw-ui-check">
                    <input type="checkbox" class="mw_option_field" id="profile-link" name="profile-link"
                           data-option-group="mw-template-dream" value="true" <?php if ($profile_link == 'true') {
                        echo 'checked';
                    } ?> /> <span></span><span>Show Profile link in header</span>
                </label>
            </div>

        </div>

        <div class="form-group">

            <div class="checkbox">
                <label class="mw-ui-check">
                    <input type="checkbox" class="mw_option_field" id="preloader" name="preloader"
                           data-option-group="mw-template-dream" value="true" <?php if ($preloader == 'true') {
                        echo 'checked';
                    } ?> />
                    <span></span><span><?php _lang("Turn on Page Preloader", "templates/dream"); ?></span>
                </label>

            </div>

        </div>

        <div class="form-group">
            <label class="mw-ui-label">Shop Inner 1 Header Style</label>
            <div>
                <select name="shop1-header-style" id="shop1-header-style" class="mw_option_field mw-ui-field mw-full-width" data-option-group="mw-template-dream">
                    <option value="clean" <?php if ($shop1_header_style == '' OR $shop1_header_style == 'clean') {
                        echo 'selected';
                    } ?>>Clean
                    </option>
                    <option value="background"<?php if ($shop1_header_style == 'background') {
                        echo 'selected';
                    } ?>><?php _lang("Poster With Background", "templates/dream"); ?>
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="select" class="mw-ui-label">Shop Inner 2 Header Style</label>
            <div class="">
                <select name="shop2-header-style" id="shop2-header-style" class="mw_option_field mw-ui-field mw-full-width" data-option-group="mw-template-dream">
                    <option value="clean" <?php if ($shop2_header_style == '' OR $shop2_header_style == 'clean') {
                        echo 'selected';
                    } ?>>Clean
                    </option>
                    <option value="background"<?php if ($shop2_header_style == 'background') {
                        echo 'selected';
                    } ?>><?php _lang("Poster With Background", "templates/dream"); ?>
                    </option>
                </select>
            </div>
        </div>

        <?php /*
        <div class="form-group hidden">
            <label for="select" class="col-lg-2 control-label">Color scheme</label>
            <div class="col-lg-10">
                <div class="theme-color-selector">
                    <button data-color="" <?php if ($color_scheme == '') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="blue" <?php if ($color_scheme == 'blue') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="brightgreen" <?php if ($color_scheme == 'brightgreen') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="darkorange" <?php if ($color_scheme == 'darkorange') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="darkred" <?php if ($color_scheme == 'darkred') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="deepred" <?php if ($color_scheme == 'deepred') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="green" <?php if ($color_scheme == 'green') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="mediumblue" <?php if ($color_scheme == 'mediumblue') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="olivegreen" <?php if ($color_scheme == 'olivegreen') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="pink" <?php if ($color_scheme == 'pink') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="purple" <?php if ($color_scheme == 'purple') {
                        echo 'class="active"';
                    } ?>></button>
                    <button data-color="orounda-blue" <?php if ($color_scheme == 'orounda-blue') {
                        echo 'class="active"';
                    } ?>></button>
                </div>

                <select name="color-scheme" id="color-scheme" class="mw_option_field form-control"
                        data-option-group="mw-template-dream">
                    <option value="" <?php if ($color_scheme == '') {
                        echo 'selected';
                    } ?>>Default
                    </option>

                    <option value="blue"<?php if ($color_scheme == 'blue') {
                        echo 'selected';
                    } ?>>Blue
                    </option>
                    <option value="brightgreen"<?php if ($color_scheme == 'brightgreen') {
                        echo 'selected';
                    } ?>>Bright Green
                    </option>
                    <option value="darkorange"<?php if ($color_scheme == 'darkorange') {
                        echo 'selected';
                    } ?>>Dark Orange
                    </option>
                    <option value="darkred"<?php if ($color_scheme == 'darkred') {
                        echo 'selected';
                    } ?>>Dark Red
                    </option>
                    <option value="deepred"<?php if ($color_scheme == 'deepred') {
                        echo 'selected';
                    } ?>>Deep Red
                    </option>
                    <option value="green"<?php if ($color_scheme == 'green') {
                        echo 'selected';
                    } ?>>Green
                    </option>
                    <option value="mediumblue"<?php if ($color_scheme == 'mediumblue') {
                        echo 'selected';
                    } ?>>Medium Blue
                    </option>
                    <option value="olivegreen"<?php if ($color_scheme == 'olivegreen') {
                        echo 'selected';
                    } ?>>Olive Green
                    </option>
                    <option value="pink"<?php if ($color_scheme == 'pink') {
                        echo 'selected';
                    } ?>>Pink
                    </option>
                    <option value="purple"<?php if ($color_scheme == 'purple') {
                        echo 'selected';
                    } ?>>Purple
                    </option>
                    <option value="orounda-blue"<?php if ($color_scheme == 'orounda-blue') {
                        echo 'selected';
                    } ?>>orounda-blue
                    </option>
                </select>
            </div>
        </div>
*/ ?>
        <div class="form-group">
            <div class="checkbox">
                <label class="mw-ui-check">
                    <input type="checkbox" class="mw_option_field" id="footer" name="footer"
                           data-option-group="mw-template-dream" value="true" <?php if ($footer == 'true') {
                        echo 'checked';
                    } ?> />
                    <span></span><span><?php _lang("The Footer is turned off for website", "templates/dream"); ?></span>
                </label>

            </div>
        </div>


        <?php
        $bg_white = get_option('bg-white', 'mw-template-dream-style-vars');
        if ($bg_white == '') {
            $bg_white = '#fff';
        }

        $color_bg_site = get_option('color-bg-site', 'mw-template-dream-style-vars');
        if ($color_bg_site == '') {
            $color_bg_site = '#F8F8F8';
        }

        $color_primary = get_option('color-primary', 'mw-template-dream-style-vars');
        if ($color_primary == '') {
            $color_primary = '#425cbb';
        }

        $color_primary_1 = get_option('color-primary-1', 'mw-template-dream-style-vars');
        if ($color_primary_1 == '') {
            $color_primary_1 = '#7cc36a';
        }
        $color_primary_2 = get_option('color-primary-2', 'mw-template-dream-style-vars');
        if ($color_primary_2 == '') {
            $color_primary_2 = '#d14b4b';
        }
        $color_primary_3 = get_option('color-primary-3', 'mw-template-dream-style-vars');
        if ($color_primary_3 == '') {
            $color_primary_3 = '#6c9a81';
        }
        $color_dark = get_option('color-dark', 'mw-template-dream-style-vars');
        if ($color_dark == '') {
            $color_dark = '#232323';
        }

        $color_bg_secondary = get_option('color-bg-secondary', 'mw-template-dream-style-vars');
        if ($color_bg_secondary == '') {
            $color_bg_secondary = '#F4F4F4';
        }

        $color_bg_secondary = get_option('color-bg-secondary', 'mw-template-dream-style-vars');
        if ($color_bg_secondary == '') {
            $color_bg_secondary = '#F4F4F4';
        }

        $color_on_dark = get_option('color-on-dark', 'mw-template-dream-style-vars');
        if ($color_on_dark == '') {
            $color_on_dark = '#F4F4F4';
        }

        $color_body = get_option('color-body', 'mw-template-dream-style-vars');
        if ($color_body == '') {
            $color_body = '#767676';
        }

        $color_heading = get_option('color-heading', 'mw-template-dream-style-vars');
        if ($color_heading == '') {
            $color_heading = '#343434';
        }
        ?>

        <script>
            $(window).load(function () {
                mw.colorPicker({
                    element: '#color_bg_site',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#color_bg_site').css('background', color);
                        $('input[name="color-bg-site"]').val(color);
                        $('input[name="color-bg-site"]').trigger('change');
                    }
                });

                mw.colorPicker({
                    element: '#color_primary',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#color_primary').css('background', color);
                        $('input[name="color-primary"]').val(color);
                        $('input[name="color-primary"]').trigger('change');
                    }
                });

                mw.colorPicker({
                    element: '#color_primary_1',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#color_primary_1').css('background', color);
                        $('input[name="color-primary-1"]').val(color);
                        $('input[name="color-primary-1"]').trigger('change');
                    }
                });

                mw.colorPicker({
                    element: '#color_primary_2',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#color_primary_2').css('background', color);
                        $('input[name="color-primary-2"]').val(color);
                        $('input[name="color-primary-2"]').trigger('change');
                    }
                });

                mw.colorPicker({
                    element: '#color_primary_3',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#color_primary_3').css('background', color);
                        $('input[name="color-primary-3"]').val(color);
                        $('input[name="color-primary-3"]').trigger('change');
                    }
                });

                mw.colorPicker({
                    element: '#color_dark',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#color_dark').css('background', color);
                        $('input[name="color-dark"]').val(color);
                        $('input[name="color-dark"]').trigger('change');
                    }
                });

                mw.colorPicker({
                    element: '#color_bg_secondary',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#color_bg_secondary').css('background', color);
                        $('input[name="color-bg-secondary"]').val(color);
                        $('input[name="color-bg-secondary"]').trigger('change');
                    }
                });

                mw.colorPicker({
                    element: '#color_on_dark',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#color_on_dark').css('background', color);
                        $('input[name="color-on-dark"]').val(color);
                        $('input[name="color-on-dark"]').trigger('change');
                    }
                });

                mw.colorPicker({
                    element: '#color_body',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#color_body').css('background', color);
                        $('input[name="color-body"]').val(color);
                        $('input[name="color-body"]').trigger('change');
                    }
                });

                mw.colorPicker({
                    element: '#color_heading',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#color_heading').css('background', color);
                        $('input[name="color-heading"]').val(color);
                        $('input[name="color-heading"]').trigger('change');
                    }
                });

                mw.colorPicker({
                    element: '#bg_white',
                    position: 'bottom-left',
                    onchange: function (color) {
                        $('#bg_white').css('background', color);
                        $('input[name="bg-white"]').val(color);
                        $('input[name="bg-white"]').trigger('change');
                    }
                });
            });
        </script>

        <div class="form-group">
            <label for="select" class="mw-ui-label">Color scheme</label>
            <div>
                <div class="theme-color-selector">
                    <button style="background: <?php print  $bg_white ?>;" id="bg_white"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="bg-white" value="<?php print $bg_white ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    White Background
                </div>
                <div class="theme-color-selector">
                    <button style="background: <?php print  $color_bg_site ?>;" id="color_bg_site"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="color-bg-site" value="<?php print $color_bg_site ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    Site Background Color
                </div>

                <div class="theme-color-selector">
                    <button style="background: <?php print  $color_bg_secondary ?>;" id="color_bg_secondary"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="color-bg-secondary" value="<?php print $color_bg_secondary ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    Secondary Site Background Color
                </div>

                <div class="theme-color-selector">
                    <button style="background: <?php print  $color_primary ?>;" id="color_primary"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="color-primary" value="<?php print $color_primary ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    Primary Color
                </div>

                <div class="theme-color-selector">
                    <button style="background: <?php print  $color_primary_1 ?>;" id="color_primary_1"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="color-primary-1" value="<?php print $color_primary_1 ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    Primary Color 1
                </div>

                <div class="theme-color-selector">
                    <button style="background: <?php print  $color_primary_2 ?>;" id="color_primary_2"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="color-primary-2" value="<?php print $color_primary_2 ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    Primary Color 2
                </div>

                <div class="theme-color-selector">
                    <button style="background: <?php print  $color_primary_3 ?>;" id="color_primary_3"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="color-primary-3" value="<?php print $color_primary_3 ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    Primary Color 3
                </div>

                <div class="theme-color-selector">
                    <button style="background: <?php print  $color_dark ?>;" id="color_dark"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="color-dark" value="<?php print $color_dark ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    Dark Color
                </div>

                <div class="theme-color-selector">
                    <button style="background: <?php print  $color_on_dark ?>;" id="color_on_dark"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="color-on-dark" value="<?php print $color_on_dark ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    Color On Dark
                </div>

                <div class="theme-color-selector">
                    <button style="background: <?php print  $color_body ?>;" id="color_body"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="color-body" value="<?php print $color_body ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    Body Color
                </div>

                <div class="theme-color-selector">
                    <button style="background: <?php print  $color_heading ?>;" id="color_heading"></button>
                    <input class="mw-ui-field mw_option_field hidden" name="color-heading" value="<?php print $color_heading ?>" data-option-group="mw-template-dream-style-vars" placeholder="Eneter color..">
                    Heading Color
                </div>
            </div>
        </div>

        <?php
        $base_font_size_px = get_option('base-font-size-px', 'mw-template-dream-style-vars');
        if ($base_font_size_px == '') {
            $base_font_size_px = '16px';
        }

        $base_font_size_mobile_px = get_option('base-font-size-mobile-px', 'mw-template-dream-style-vars');
        if ($base_font_size_mobile_px == '') {
            $base_font_size_mobile_px = '14px';
        }


        $nav_item_font_size = get_option('nav-item-font-size', 'mw-template-dream-style-vars');
        if ($nav_item_font_size == '') {
            $nav_item_font_size = '10px';
        }

        $button_radius = get_option('button-radius', 'mw-template-dream-style-vars');
        if ($button_radius == '') {
            $button_radius = '100px';
        }

        $input_border_radius = get_option('input-border-radius', 'mw-template-dream-style-vars');
        if ($input_border_radius == '') {
            $input_border_radius = '50px';
        }

        $border_width = get_option('border-width', 'mw-template-dream-style-vars');
        if ($border_width == '') {
            $border_width = '2px';
        }
        ?>

        <div class="form-group">
            <label class="mw-ui-label">Base Font Size in pixels</label>
            <input class="mw-ui-field mw_option_field" name="base-font-size-px" value="<?php print $base_font_size_px ?>" data-option-group="mw-template-dream-style-vars" placeholder="16px">
        </div>

        <div class="form-group">
            <label class="mw-ui-label">Base Font Size in Mobile</label>
            <input class="mw-ui-field mw_option_field" name="base-font-size-mobile-px" value="<?php print $base_font_size_mobile_px ?>" data-option-group="mw-template-dream-style-vars" placeholder="14px">
        </div>

        <div class="form-group">
            <label class="mw-ui-label">Navigation Elements Font Size</label>
            <input class="mw-ui-field mw_option_field" name="nav-item-font-size" value="<?php print $nav_item_font_size ?>" data-option-group="mw-template-dream-style-vars" placeholder="10px">
        </div>

        <div class="form-group">
            <label class="mw-ui-label">Buttons Border Radius</label>
            <input class="mw-ui-field mw_option_field" name="button-radius" value="<?php print $button_radius ?>" data-option-group="mw-template-dream-style-vars" placeholder="100px">
        </div>

        <div class="form-group">
            <label class="mw-ui-label">Inputs Border Radius</label>
            <input class="mw-ui-field mw_option_field" name="input-border-radius" value="<?php print $input_border_radius ?>" data-option-group="mw-template-dream-style-vars" placeholder="50px">
        </div>

        <div class="form-group">
            <label class="mw-ui-label">Inputs Border Width</label>
            <input class="mw-ui-field mw_option_field" name="border-width" value="<?php print $border_width ?>" data-option-group="mw-template-dream-style-vars" placeholder="2px">
        </div>
    </div>
</div>
<!-- /#settings-holder -->