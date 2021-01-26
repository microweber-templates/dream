<?php

/*

type: layout

name: Checkout

description: Checkout

*/

?>

<div>
    <?php if ($requires_registration and is_logged() == false): ?>
        <module type="users/register"/>
    <?php else: ?>
        <div class="clear"></div>
        <?php if ($payment_success == false): ?>
            <form class="mw-checkout-form" id="checkout_form_<?php print $params['id'] ?>" method="post"
                  action="<?php print api_link('checkout') ?>">
                <div class="alert hide"></div>


                <?php $cart_show_enanbled = get_option('data-show-cart', $params['id']); ?>
                <div <?php if ($step != 1): ?>style="display: none;"<?php endif; ?>>
                    <?php if ($cart_show_enanbled != 'n'): ?>
                        <div class="mw-cart-data-holder">
                            <module type="shop/cart" template="skin-1" id="cart_checkout_<?php print $params['id'] ?>"
                                    data-checkout-link-enabled="n"/>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="boxed boxed--border order-charges">
                                        <ul>
                                            <li>
                                                <span class="h5"><?php _lang("Shipping to", 'templates/dream'); ?>:</span>
                                                <span><module type="shop/shipping" view="select"/></span>
                                            </li>


                                            <li>
                                                <span class="h5"><?php _lang("Shipping price", 'templates/dream'); ?>:</span>
                                                <span><module type="shop/shipping" view="cost"/></span>
                                            </li>


                                            <?php if ($cart_totals) { ?>
                                                <?php foreach ($cart_totals as $cart_total_key => $cart_total_item) { ?>
                                                    <?php if ($cart_total_key != 'shipping') { ?>

                                                        <li>
                                                            <span class="h5"><?php print  $cart_total_item['label'] ?>:</span>
                                                            <span><?php print  $cart_total_item['amount'] ?></span>

                                                        </li>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                    <div class="row">
                        <div class="col-xs-12 text-right">
                            <a href="?step=2" class="btn btn-primary"><?php _lang("PROCEED TO SHIPMENT", 'templates/dream'); ?></a>
                        </div>
                    </div>
                </div>


                <div class="mw-cart-data-holder shop-checkout">
                    <div <?php if ($step != 2): ?>style="display: none;"<?php endif; ?>>

                        <div class="col-lg-8 col-sm-8 billing-details">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h6 class="edit nodrop" field="checkout_personal_inforomation_title" rel="global"
                                        rel_id="<?php print $params['id'] ?>"><?php _lang("Personal Information", 'templates/dream'); ?></h6>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <input name="first_name" type="text" value="<?php if (isset($user['first_name'])) {
                                        print $user['first_name'];
                                    } ?>" placeholder="<?php _lang("First Name", 'templates/dream'); ?>"/>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <input name="last_name" type="text" value="<?php if (isset($user['last_name'])) {
                                        print $user['last_name'];
                                    } ?>" placeholder="<?php _lang("Last Name", 'templates/dream'); ?>"/>
                                </div>

                                <div class="col-xs-12 col-md-6">
                                    <input name="email" type="text" value="<?php if (isset($user['email'])) {
                                        print $user['email'];
                                    } ?>" placeholder="<?php _lang("Email", 'templates/dream'); ?>"/>
                                </div>

                                <div class="col-xs-12 col-md-6">
                                    <input name="phone" type="text" value="<?php if (isset($user['phone'])) {
                                        print $user['phone'];
                                    } ?>" placeholder="<?php _lang("Phone", 'templates/dream'); ?>"/>
                                </div>
                            </div>

                            <?php if ($cart_show_shipping != 'n'): ?>
                                <div class="mw-shipping-and-payment">
                                    <module type="shop/shipping"/>
                                </div>
                            <?php endif; ?>

                            <module type="shop/checkout/terms"/>
                        </div>

                        <div class="col-lg-4 col-sm-4">
                            <?php if ($cart_show_payments != 'n'): ?>
                                <div class="mw-shipping-and-payment">
                                    <module type="shop/payments"/>
                                </div>
                            <?php endif; ?>
                        </div>


                        <div class="col-xs-9">
                            <module type="btn" button_text="<?php _lang("Go back to cart", 'templates/dream'); ?>" url="?step=1" />
                        </div>
                        
                        <div class="col-xs-3 text-right">
                            <module type="btn" button_id="complete_order_button" <?php if ($tems): ?>button_disabled="disabled"<?php endif; ?> button_text="<?php _lang("Complete order", 'templates/dream'); ?>" button_onclick="mw.cart.checkout('#checkout_form_<?php print $params['id']; ?>');" />
                        </div>
                        
                    </div>
                </div>
                <div class="mw-checkout-responce"></div>
            </form>

        <?php else: ?>
            <h2>
                <?php _lang("Your payment was successfull.", 'templates/dream'); ?>
            </h2>
        <?php endif; ?>
    <?php endif; ?>
</div>
