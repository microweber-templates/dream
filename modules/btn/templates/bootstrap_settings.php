<?php
    $style =  get_option('button_style', $params['id']);
    $size =  get_option('button_size', $params['id']);
    $action =  get_option('button_action', $params['id']);
    $url =  get_option('url', $params['id']);
    $popupcontent =  get_option('popupcontent', $params['id']);
    $text =  get_option('text', $params['id']);
	$description = get_option('description', $params['id']);

    $url_blank = get_option('url_blank', $params['id']);
?>
<div class="mw-ui-field-holder">
  <div class="mw-ui-row-nodrop">
    <div class="mw-ui-col">
      <div class="mw-ui-col-container">
        <label class="mw-ui-label">
          <?php _lang("Color", 'templates/dream'); ?>); ?>
        </label>
        <select  class="mw-ui-field mw_option_field"  name="button_style">
          <option <?php if($style==''){ print 'selected'; } ?> value="btn-primary"><?php _lang("Default", 'templates/dream'); ?>); ?></option>
          <option <?php if($style=='btn-primary'){ print 'selected'; } ?> value="btn-primary">
          <?php _lang("Primary", 'templates/dream'); ?>); ?>
          </option>
          <option <?php if($style=='btn-info'){ print 'selected'; } ?> value="btn-info">
          <?php _lang("Info", 'templates/dream'); ?>); ?>
          </option>
          <option <?php if($style=='btn-success'){ print 'selected'; } ?> value="btn-success">
          <?php _lang("Success", 'templates/dream'); ?>); ?>
          </option>
          <option <?php if($style=='btn-warning'){ print 'selected'; } ?> value="btn-warning">
          <?php _lang("Warning", 'templates/dream'); ?>); ?>
          </option>
          <option <?php if($style=='btn-danger'){ print 'selected'; } ?> value="btn-danger">
          <?php _lang("Danger", 'templates/dream'); ?>); ?>
          </option>
          <option <?php if($style=='btn-simple'){ print 'selected'; } ?> value="btn-simple">
          <?php _lang("Simple", 'templates/dream'); ?>); ?>
          </option>
        </select>
      </div>
    </div>
    <div class="mw-ui-col">
      <div class="mw-ui-col-container">
        <label class="mw-ui-label">
          <?php _lang("Size", 'templates/dream'); ?>); ?>
        </label>
        <select  class="mw-ui-field mw_option_field"  name="button_size">
          <option <?php if($size==''){ print 'selected'; } ?> value="">
          <?php _lang("Default", 'templates/dream'); ?>); ?>
          </option>
          <option <?php if($size=='btn-default-large btn--lg'){ print 'selected'; } ?> value="btn-default-large btn--lg">
          <?php _lang("Large", 'templates/dream'); ?>); ?>
          </option>
          <option <?php if($size=='btn-default-small btn--sm'){ print 'selected'; } ?> value="btn-default-small btn--sm">
          <?php _lang("Small", 'templates/dream'); ?>); ?>
          </option>
          <option <?php if($size=='btn-default-mini btn--xs'){ print 'selected'; } ?> value="btn-default-mini btn--xs">
          <?php _lang("Mini", 'templates/dream'); ?>); ?>
          </option>
        </select>
      </div>
    </div>
  </div>
</div>
