<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php print lang_attributes(); ?>>
<head>
    <title>{content_meta_title}</title>
    <meta charset="utf-8"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/><![endif]-->
    <meta property="og:title" content="{content_meta_title}"/>
    <meta name="keywords" content="{content_meta_keywords}"/>
    <meta name="description" content="{content_meta_description}"/>
    <meta property="og:type" content="{og_type}"/>
    <meta property="og:url" content="{content_url}"/>
    <meta property="og:image" content="{content_image}"/>
    <meta property="og:description" content="{og_description}"/>
    <meta property="og:site_name" content="{og_site_name}"/>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
    <script>
        mw.require('icon_selector.js');

        mw.require("fonts.js");
        mw.lib.require('bootstrap3');

    </script>
    <script>
        mw.iconLoader()
            .addIconSet('SVGIcons')
            .addIconSet('iconsMindLine')
            .addIconSet('iconsMindSolid')
            .addIconSet('mwIcons')
            .addIconSet('materialDesignIcons')
            .addIconSet('materialIcons');
    </script>
    <script>
        mw.templateFont = mw.templateFont || new mw.font();
        mw.templateTopFixed = '.nav-bar.nav--fixed';
        AddToCartModalContent = window.AddToCartModalContent || function (title) {


               var title_display = null
                if(typeof(title) == 'undefined'){
                    title = '<?php _lang("Product"); ?>'
                }


                var html = ''
                    + '<section style="text-align: center;">'
                    + '<h5>' + title + '</h5>'
                    + '<p><?php _lang("has been added to your cart"); ?></p>'
                    + '<a href="javascript:;" onclick="mw.tools.modal.remove(\'#AddToCartModal\')" class="btn btn-default"><?php _lang("Continue shopping"); ?></a> &nbsp;'
                    + '<a href="<?php print checkout_url(); ?>" class="btn btn-warning"><?php _lang("Checkout"); ?></a></section>';
                return html;
            };

        mw.on('mw.cart.add', function () {

            var notification = $('body').find('.notification[data-notification-link="cart-overview"]');
              if(notification.length > 0){

                    notification.removeClass('notification--dismissed');
                    mr.notifications.showNotification(notification, 0);
              } else {
                  mw.modal({
                      id: 'AddToCartModal',
                      content:AddToCartModalContent()
                  })
              }
            return false;
        });
        mw.on('mw.cart.remove', function () {
            mw.reload_module('shop/cart');
        });


        $(document).ready(function () {
            mw.$('[class*=" icon-"]').each(function () { this.className = this.className.replace(/icon-/g, 'mw-micon-'); });
            function icons() {
                mw.$('.edit [class*=" icon-"]').each(function () { this.className = this.className.replace(/icon-/g, 'mw-micon-'); });
            }
            icons();
            mw.on('moduleLoaded', function () {
                icons();
            })
            mw.on('iconInserted', function () {
                icons();
            })
            mw.on('editChanged', function () {
                icons();
            });
        });

        $(document).ready(function () {
            mw.on('mw.cart.add', function (event, data) {
                $("#shoppingCartModal").modal();
                $("#js-ajax-cart-checkout-process").reload_module()

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('#loginModal').on('show.bs.modal', function (e) {
                $('#loginModalModuleLogin').reload_module();
                $('#loginModalModuleRegister').reload_module();
            });


            $('#shoppingCartModal').on('show.bs.modal', function (e) {
                $('#js-ajax-cart-checkout-process').reload_module();
            });


            mw.on('mw.cart.add', function (event, data) {
                $('#shoppingCartModal').modal('show');


            });

            <?php if (isset($_GET['mw_payment_success'])) { ?>
            $('#js-ajax-cart-checkout-process').attr('mw_payment_success', true);
            $('#shoppingCartModal').modal('show')

            <?php } ?>

            $('body').on('click', '.js-show-register-window', function (e) {
                $('#loginModal').modal('show');
                $('.js-login-window').hide();
                $('.js-register-window').show();
                e.preventDefault();
                e.stopPropagation();
            });

            $('.js-show-login-window').on('click', function (e) {

                $('.js-register-window').hide();
                $('.js-login-window').show();
                e.preventDefault();
                e.stopPropagation();
            });
        });
    </script>


    <?php $color_scheme = get_option('color-scheme', 'mw-template-dream'); ?>
    <?php
    if (!$color_scheme) {
        $color_scheme = '';
    } else {
        $color_scheme = '-' . $color_scheme;
    }
    ?>
    <?php
    $stop_transparent_nav = get_option('stop_transparent_nav', 'mw-template-dream');
    if ($stop_transparent_nav == '') {
        $stop_transparent_nav = 'false';
    }
    ?>

    <script>mw.lib.require('collapse_nav');</script>
    <script>
        $(document).ready(function () {
            $('.nav-main .menu').collapseNav({
                responsive: 1,
                mobile_break: 991,
                li_class: 'dropdown',
                li_a_class: '',
                li_ul_class: '',
                caret: '<span class="caret"></span>' //Element append immediately after the More text
            });
        })
    </script>



    <?php print get_template_stylesheet(); ?>

    <link href="{TEMPLATE_URL}assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{TEMPLATE_URL}assets/css/mw-dream.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <?php if ($stop_transparent_nav != 'true'): ?>
        <script>
            checkFirstSectionForNav = function () {
                var firstSectionHas = $('.main-container section').first().hasClass('imagebg');

                var skip = $('.main-container section').first().hasClass('background-image-holder');

                if (!skip && firstSectionHas == true) {
                    $('nav .nav-bar').addClass('nav--absolute nav--transparent');
                } else {
                    $('nav .nav-bar').removeClass('nav--absolute nav--transparent');
                }
            }

            $(document).ready(function () {
                checkFirstSectionForNav();

                $(window).on('moduleLoaded', function () {
                    checkFirstSectionForNav();
                });
            });
        </script>
    <?php endif; ?>



</head>
<body class="<?php print helper_body_classes(); ?>">
<a id="top"></a>

<?php $shopping_cart = get_option('shopping-cart', 'mw-template-dream'); ?>
<?php $search_field = get_option('search-field', 'mw-template-dream'); ?>
<?php $profile_link = get_option('profile-link', 'mw-template-dream'); ?>
<?php $preloader = get_option('preloader', 'mw-template-dream'); ?>
<?php $shop1_header_style = get_option('shop1-header-style', 'mw-template-dream'); ?>
<?php $shop2_header_style = get_option('shop2-header-style', 'mw-template-dream'); ?>


<?php $is_live_edit = is_live_edit(); ?>

<?php if ($preloader != '' AND $preloader == 'true'): ?>
    <div class="loader"></div>
<?php endif; ?>


<nav class="<?php if ($preloader != '' AND $preloader == 'true'): ?>transition--fade<?php endif; ?>">
    <div class="nav-bar" data-fixed-at="200">
        <div class="nav-module logo-module left">
            <module type="logo" id="logo" template="default" default-text="Dream" data-alt-logo="true"/>
        </div>

        <module type="menu" name="header_menu" class="nav-module menu-module left" template="header"/>

        <!--end nav module-->
        <?php if ($shopping_cart == 'true'): ?>
            <div class="nav-module right-x cart-module">
                <a href="#" class="nav-function" data-notification-link="cart-overview">
                    <i class="mw-micon-solid-Shopping-Bag"></i>
                    <span><?php _lang("Cart", "templates/dream") ?></span>
                </a>
            </div>
        <?php endif; ?>

        <?php if ($profile_link == 'true' or $is_live_edit): ?>
            <?php if (is_logged()): ?>
                <div class="nav-module right-x cart-module dream-profile-link" style="display: <?php print $profile_link == 'true' ? 'inline-block' : 'none'; ?>;">
                    <a href="<?php print logout_url(); ?>" class="nav-function">
                        <i class="fa fa-sign-out"></i>
                        <span><?php _lang("Logout", "templates/dream") ?></span>
                    </a>
                </div>
            <?php endif; ?>

            <div class="nav-module right-x cart-module dream-profile-link" style="display: <?php print $profile_link == 'true' ? 'inline-block' : 'none'; ?>;">
                <a href="<?php print profile_url(); ?>" class="nav-function">
                    <i class="fa fa-user"></i>
                    <span><?php _lang("Profile", "templates/dream") ?></span>
                </a>
            </div>
        <?php endif; ?>

        <?php if ($search_field == 'true' or $is_live_edit): ?>
            <div class="nav-module right-x search-module dream-search-link" style="display: <?php print $search_field == 'true' ? 'inline-block' : 'none'; ?>;">
                <a href="#" class="nav-function modal-trigger" data-modal-id="search-form">
                    <i class="fa fa-search"></i>
                    <span><?php _lang("Search", "templates/dream") ?></span>
                </a>
            </div>
        <?php endif; ?>

        <div class="nav-module right-x hidden-xs hidden-sm hidden-md safe-mode dream-phone-text">
            <span class="nav-function phone-header edit safe-element" rel="global" field="dream_header_phone" style="">
                <?php _lang("Call us", "templates/dream"); ?>: +1 555 666
            </span>
        </div>
    </div>
    <!--end nav bar-->
    <div class="nav-mobile-toggle visible-sm visible-xs">
        <i class="icon-Align-Right icon icon--sm"></i>
    </div>
</nav>

<?php if ($shopping_cart == 'true'): ?>
    <div class="notification pos-right pos-top cart-overview" data-notification-link="cart-overview" data-animation="from-right">
        <module type="shop/cart" template="small"/>
    </div>
<?php endif; ?>

<?php if ($search_field == 'true'): ?>
    <div class="modal-container search-modal" data-modal-id="search-form">
        <div class="modal-content bg-white imagebg" data-width="100%" data-height="100%">
            <div class="pos-vertical-center clearfix">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                    <form class="clearfix" action="<?php print site_url(); ?>search.php" method="get">
                        <div class="input-with-icon">
                            <i class="icon-Magnifi-Glass2 icon icon--sm"></i>
                            <input type="search" name="keywords" placeholder="<?php _lang("Type your search and hit enter", "templates/dream"); ?>"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end of modal-content-->
    </div>
<?php endif; ?>

<div class="main-container <?php if ($preloader != '' AND $preloader == 'true'): ?>transition--fade<?php endif; ?>">

