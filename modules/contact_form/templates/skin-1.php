<div class="alert alert-success margin-bottom-30" id="msg<?php print $form_id; ?>" style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong><?php _lang("Thank You", "templates/dream"); ?>!</strong> <?php _lang("Your message successfully sent", "templates/dream"); ?>!
</div>

<div class="form-subscribe-1 boxed boxed--lg bg--white box-shadow-wide">
    <div class="subscribe__title text-center edit" rel="module" field="module-<?php print $params['id'] ?>">
        <h4><?php _lang("Keep Informed", "templates/dream"); ?></h4>
        <p class="lead">
            <?php _lang("Subscribe for free resources and news updates", "templates/dream"); ?>.
        </p>
    </div>

    <form class="" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
        <?php print csrf_form() ?>
        <input type="hidden" name="for" value="contact_form"/>
        <input type="hidden" name="for_id" value="<?php print $params['id']; ?>"/>

        <div class="input-with-icon">
            <i class="mw-micon-Male-2"></i>
            <input id="fieldName" name="first_name" placeholder="<?php _lang('Your Name', "templates/dream"); ?>" type="text">
        </div>
        <div class="input-with-icon">
            <i class="mw-micon-Mail-2"></i>
            <input class="validate-required validate-email" id="fieldEmail" name="email" placeholder="<?php _lang('Email Address', "templates/dream"); ?>" type="email" required="">
        </div>

        <div class="input-with-icon">
            <i class="mw-micon-Phone-2"></i>
            <input type="text" name="phone" id="fieldPhone" placeholder="<?php _lang('Phone', "templates/dream"); ?>"/>
        </div>

        <div class="input-with-icon">
            <i class="mw-micon-message"></i>
            <textarea name="message" id="fieldMessage" placeholder="Your Message" rows="2" style="background: #f8f8f8; border-radius: 15px;"></textarea>
        </div>

        <?php if (get_option('disable_captcha', $params['id']) != 'y'): ?>
            <module type="captcha" template="skin-1"/>
            <br/>
        <?php endif; ?>

        <input type="submit" clsas="btn" value="<?php _lang('Submit Form', "templates/dream"); ?>"/>
    </form>
</div>
