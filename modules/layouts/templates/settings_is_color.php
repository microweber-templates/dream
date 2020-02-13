<?php
$is_color = get_option('is_color', $params['id']);
if ($is_color === null OR $is_color === false OR $is_color == '') {
    $is_color = '';
}
?>



<div class="is-color-select" style="padding-top: 15px;">
    <label class="mw-ui-label"><?php _lang("Color as overlay", "templates/dream"); ?> ?</label>
    <div class="color_picker_for_sidebar_settings"></div>


    <input id="color_change_val" type="hidden" name="is_color" placeholder="<?php _lang("Color name Or HEX", "templates/dream"); ?>" value="<?php print $is_color; ?>" class="mw-ui-field mw_option_field"/>



    <?php /*
    <input type="text" name="is_color" placeholder="<?php _lang("Color name Or HEX", "templates/dream"); ?>" value="<?php print $is_color; ?>" class="mw-ui-field mw_option_field color_picker_for_sidebar_settings"/>

 */ ?>
</div>

<script>

    mw.$(document).ready(function(){

        var timer_color_pick;


        mw.colorPicker({
            element:'.color_picker_for_sidebar_settings',
            position:'bottom-left',
            value:'<?php print $is_color; ?>',

            onchange:function(color){


                window.clearTimeout(timer_color_pick);

                mw.$('#color_change_val').val(color);


                timer_color_pick = window.setTimeout(function(){

                    mw.$('#color_change_val').trigger('change');
                    //  mw.$('.color_picker_for_sidebar_settings').trigger('change');




                },500);






            },
            method: 'inline'
        });

    });

</script>
