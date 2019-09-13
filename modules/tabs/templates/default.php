<?php

/*

type: layout

name: Default

description: Default

*/
?>

<?php

if ($json == false) {
    print lnotif(_e('Click to edit tabs', true));

    return;
}

if (isset($json) == false or count($json) == 0) {
    $json = array(0 => $defaults);
}

?>

<div id="mw-tabs-module-<?php print $params['id'] ?>" class="mw-tabs-box-wrapper mw-module-tabs-skin-default">
    <div class="tabs-container tabs-2">
        <ul class="tabs">
            <?php
            $count = 0;
            foreach ($json as $key=>$slide) {
                $count++;

                $edit_field_key = $key;
                if(isset($slide['id'])){
                    $edit_field_key = $slide['id'];
                }

                ?>
                <li class="<?php if ($count == 1): ?>active<?php endif; ?> voh vnn">
                    <div class="tab__title">
                        <h5><?php print isset($slide['icon']) ? $slide['icon'] . ' ' : ''; ?><?php print isset($slide['title']) ? $slide['title'] : ''; ?></h5>
                    </div>
                    <div class="tab__content">
                        <div class="edit allow-drop"
                             field="tab-item-<?php print $edit_field_key ?>"
                             rel="module-<?php print $params['id'] ?>">
                            <div class="element"> <?php print isset($slide['content']) ? $slide['content'] : 'Tab content ' . $count ?></div>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<script>

    mw.$(document).ready(function () {
        mw.tplDream.tabs($)
    })

</script>
