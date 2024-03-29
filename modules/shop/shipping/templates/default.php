<?php

/*

type: layout

name: Default

description: Default

*/
?>
<div class="row">
    <div class="col-xs-12">

        <hr/>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <h6 style="margin-top:0 " class="edit nodrop" field="checkout_shipping_information_title" rel="global" rel_id="<?php print $params['id'] ?>">
            <?php _lang("Shipping Information", 'templates/dream'); ?>
        </h6>
    </div>
</div>

<div style="display: none">
    <select onchange="Gateway(this);" name="shipping_gw"
            class="field-full form-control mw-shipping-gateway mw-shipping-gateway-<?php print $params['id']; ?> <?php if (count($shipping_options) == 1): ?> semi_hidden <?php endif; ?>">
        <?php foreach ($shipping_options as $item) : ?>
            <option value="<?php print  $item['module_base']; ?>"><?php print  $item['name']; ?></option>
        <?php endforeach; ?>
    </select>
</div>

<?php if (isset($shipping_options[0]) and isset($shipping_options[0]['module_base'])): ?>
    <div id="mw-shipping-gateway-selected-<?php print $params['id']; ?>">
        <module type="<?php print $shipping_options[0]['module_base'] ?>" template="default"/>
    </div>
<?php endif; ?>
