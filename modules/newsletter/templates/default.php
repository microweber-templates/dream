<?php

/*

type: layout

name: Default

description: Default

*/
?>


<form class="form--merge form--no-labels newsletter" method="post" id="newsletters-form-<?php print $params['id'] ?>">
    <?php print csrf_form(); ?>
    <input class="col-md-8 col-sm-6 validate-required validate-email" placeholder="<?php _lang('Email Address', "templates/dream"); ?>" name="email" type="email" required/>

    <button type="submit" class="btn"><?php _lang('Go', "templates/dream"); ?></button>
    <br/><br/>
</form>
