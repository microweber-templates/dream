<module type="editor/stylesheet_compiler"/>

<script>mw.lib.require('bootstrap3ns');</script>

<style>
    .bootstrap3ns .checkbox label, .bootstrap3ns .radio label {
        padding-left: 0;
    }
</style>

<div id="settings-holder">
    <div>
        <h5 style="font-weight: bold;"><?php _lang("Website Settings", "templates/dream"); ?></h5>
    </div>

    <script>
        $(document).ready(function () {
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
        $option_group = 'mw-template-' . mw()->template->folder_name();

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
    </div>
</div>
<!-- /#settings-holder -->