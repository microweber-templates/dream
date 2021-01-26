<div class="mw-user-logged-holder">
	<div class="mw-user-welcome">
		<?php _lang("Welcome", "templates/dream"); ?>
		<?php print user_name(); ?> </div>
	<a href="<?php print site_url() ?>">
	<?php _lang("Go to", "templates/dream"); ?>
	<?php print site_url() ?></a><br />
 <a href="<?php print api_link('logout', "templates/dream") ?>" >
	<?php _lang("Log Out", "templates/dream"); ?>
	</a>
	<?php if(is_admin()): ?>
	<div class="mw-user-logged-holder"> <a href="<?php print admin_url() ?>">
		<?php _lang("Admin panel", "templates/dream"); ?>
		</a>  </div>
	<?php endif; ?>
</div>
