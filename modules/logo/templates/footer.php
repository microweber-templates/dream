<?php


if($size != 'auto') {
    $size = $size . 'px';
}

?>

<a href="<?php if (!in_live_edit()) {
    print site_url();
} else {
    if ($logoimage == '' and $text == '') {
        print 'javascript:mw.drag.module_settings();void(0);';
    } else {
        print site_url();
    }


}; ?>" class="mw-ui-row-nodrop module-logo" style="width: auto;">
    <?php if ($logoimage == '' and $text == '') {
        if (is_live_edit()) { ?><span class="mw-logo-no-values"><?php _lang('Click to add logo', 'templates/dream'); ?></span><?php }
    } else { ?>
        <?php if ($logotype == 'image' or $logotype == false or $logotype == 'both') { ?>
            <?php if ($logoimage != '' and $logoimage != false) { ?>
                <span class="mw-ui-col" style="width: <?php print $size; ?>">
            <img src="<?php print $logoimage; ?>" alt="" style="max-width: 100%;width: <?php print $size; ?>;" class="logo"/>
            </span>
            <?php }
        } ?>
        <?php if ($logotype == 'text' or $logotype == false or $logotype == 'both') { ?>
            <span class="mw-ui-col"><span
                        class="module-logo-text"
                        style="font-family: '<?php print $font_family_safe; ?>';font-size:<?php print $font_size; ?>px"><?php print $text; ?></span>
            </span>
        <?php } ?>

    <?php } ?>
</a>
