<?php

/*

type: layout

name: Newsletter Form

description: Skin 1

*/
?>


<div class="form-subscribe-1 boxed boxed--lg bg--white text-center box-shadow-wide edit nodrop" field="module-<?php print $params['id'] ?>" rel="module">
    <h4><?php _lang('Keep Informed', "templates/dream"); ?></h4>
    <p class="lead">
        <?php _lang('Subscribe for free resources and news updates.', "templates/dream"); ?>
    </p>

    <form class="" method="post" id="newsletters-form-<?php print $params['id'] ?>">
        <?php print csrf_form(); ?>
        <div class="input-with-icon">
            <label for="fieldName"><?php _lang('Your Name', "templates/dream"); ?></label>
            <i class="icon icon-Male-2"></i>
            <input id="fieldName" name="name" type="text" required>
        </div>

        <div class="input-with-icon">
            <label for="fieldEmail"><?php _lang('Email Address', "templates/dream"); ?></label>
            <i class="icon icon-Mail-2"></i>
            <input class="validate-required validate-email" id="fieldEmail" name="email" type="email" required>
        </div>

        <button type="submit" class="btn"><?php _lang('Subscribe Now', "templates/dream"); ?></button>
        <br /><br />
    </form>
</div>