<?php


/*



type: layout



name: Small



description: Small cart template



*/

?>

<?php
$total_qty = 0;
$total_price = 0;
if ($data) {
    foreach ($data as $item) {
        if (isset($item['qty'])) {
            $total_qty += $item['qty'];
            if (isset($item['price'])) {
                $total_price += $item['price'] * $item['qty'];
            }
        }
    }
}
?>


<div class="cart-overview__title">
    <h5><?php _lang('Your Cart', 'templates/dream'); ?></h5>
</div>
<?php if ($data): ?>
    <ul class="cart-overview__items">
        <?php foreach ($data as $item) : ?>
            <li>
                <div class="item__image">
                    <a href="<?php print($item['url']); ?>">
                        <img alt="" src="<?php print thumbnail($item['picture'], 45); ?>"/>
                    </a>
                </div>
                <div class="item__detail">
                    <span><?php print $item['title']; ?></span>
                    <span class="h6"><?php print $item['qty']; ?> x <?php print currency_format($item['price']); ?></span>
                </div>
                <div onclick="javascript:mw.cart.remove('<?php print $item['id'] ?>');" class="item__remove" title="<?php _lang('Remove From Cart', 'templates/dream'); ?>"></div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <h6><?php _lang('0 ITEMS ON YOUR CART', 'templates/dream'); ?></h6>
<?php endif; ?>

<div class="cart-overview__subtotal">
    <h5>Subtotal:</h5>
    <span><?php print currency_format($total_price); ?></span>
</div>

<?php
if (!isset($params['checkout-link-enabled'])) {
    $checkout_link_enanbled = get_option('data-checkout-link-enabled', $params['id']);
} else {
    $checkout_link_enanbled = $params['checkout-link-enabled'];
}
?>

<?php if ($checkout_link_enanbled != 'n') : ?>
    <?php
    $checkout_page = get_option('data-checkout-page', $params['id']);
    if ($checkout_page != false and strtolower($checkout_page) != 'default' and intval($checkout_page) > 0) {
        $checkout_page_link = content_link($checkout_page) . '/view:checkout';
    } else {
        $checkout_page_link = checkout_url();
    }
    ?>
    <div class="cart-overview__action">
        <a href="<?php echo route('checkout.contact_information'); ?>" class="btn btn--square btn--primary">
            <span class="btn__text"><?php _lang('Checkout Now', 'templates/dream'); ?></span>
        </a>
    </div>


<?php endif; ?>



