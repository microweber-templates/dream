<?php

/*

type: layout

name: Default

description: Default

*/
?>

<div class="<?php print $config['module_class'] ?>">
    <div id="<?php print $rand; ?>">
        <?php $selected_country = mw()->user_manager->session_get('shipping_country'); ?>

        <div class="row">
            <div class="col-xs-12 col-md-6">
                <select name="country">
                    <option value=""><?php _lang("Country", 'templates/dream'); ?></option>
                    <?php foreach ($data as $item): ?>
                        <option value="<?php print $item['shipping_country'] ?>" <?php if (isset($selected_country) and $selected_country == $item['shipping_country']): ?> selected="selected" <?php endif; ?>><?php print $item['shipping_country'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-xs-12 col-md-6">
                <input name="Address[city]" type="text" value="" placeholder="<?php _lang("Town / City", 'templates/dream'); ?>"/>
            </div>

            <div class="col-xs-12 col-md-6">
                <input name="Address[zip]" type="text" value="" placeholder="<?php _lang("ZIP / Postal Code", 'templates/dream'); ?>"/>
            </div>

            <div class="col-xs-12 col-md-6">
                <input name="Address[state]"  type="text" value="" placeholder="<?php _lang("State / Province", 'templates/dream'); ?>"/>
            </div>

            <div class="col-xs-12 col-md-12">
                <input name="Address[address]"  type="text" value="" placeholder="<?php _lang("Address", 'templates/dream'); ?>"/>
            </div>

            <div class="col-xs-12 col-md-12">
                <input name="other_info" type="text" value="" placeholder="<?php _lang("Additional Information ( Special notes for delivery - Optional )", 'templates/dream'); ?>"/>
            </div>
        </div>

    </div>
</div>
