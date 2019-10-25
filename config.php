<?php

$config = array();
$config['name'] = "Dream";
$config['author'] = "Microweber";
$config['version'] = 2.8;
$config['url'] = "http://microweber.com";
$config['standalone_module_skins'] = true;
$config['is_default'] = 1; //if you set this parameter the template will be selected on the install screen
$config['bootstrap'] = 3;

$config['data-fields-product'] = array();
$config['data-fields-product'][] = array(
    'title' => 'Label',
    'name' => 'label',
    'type' => 'text'
);
$config['data-fields-product'][] = array(
    'title' => 'Label Color',
    'name' => 'label-color',
    'type' => 'color'
);

//Layouts Padding Top & Bottom classes definiton
$config['layouts_css_classes'] = [];
$config['layouts_css_classes']['padding-top'][0] = 'unpad--top';
$config['layouts_css_classes']['padding-top'][1] = 'p-t-10';
$config['layouts_css_classes']['padding-top'][2] = 'p-t-20';
$config['layouts_css_classes']['padding-top'][3] = 'p-t-30';
$config['layouts_css_classes']['padding-top'][4] = 'p-t-40';
$config['layouts_css_classes']['padding-top'][5] = 'p-t-50';
$config['layouts_css_classes']['padding-top'][6] = 'p-t-60';
$config['layouts_css_classes']['padding-top'][7] = 'p-t-70';
$config['layouts_css_classes']['padding-top'][8] = 'p-t-80';
$config['layouts_css_classes']['padding-top'][9] = 'p-t-90';
$config['layouts_css_classes']['padding-top'][10] = 'p-t-100';

$config['layouts_css_classes']['padding-bottom'][0] = 'unpad--bottom';
$config['layouts_css_classes']['padding-bottom'][1] = 'space-bottom--sm';
$config['layouts_css_classes']['padding-bottom'][2] = 'space--sm';
$config['layouts_css_classes']['padding-bottom'][3] = 'p-b-30';
$config['layouts_css_classes']['padding-bottom'][4] = 'p-b-40';
$config['layouts_css_classes']['padding-bottom'][5] = 'p-b-50';
$config['layouts_css_classes']['padding-bottom'][6] = 'p-b-60';
$config['layouts_css_classes']['padding-bottom'][7] = 'p-b-70';
$config['layouts_css_classes']['padding-bottom'][8] = 'p-b-80';
$config['layouts_css_classes']['padding-bottom'][9] = 'p-b-90';
$config['layouts_css_classes']['padding-bottom'][10] = 'p-b-100';

$config['stylesheet_compiler']['source_file'] = 'assets/less/theme.less';
$config['stylesheet_compiler']['css_file'] = 'assets/css/theme.css';
$config['stylesheet_compiler']['settings']['bg-white'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Background White');
$config['stylesheet_compiler']['settings']['color-bg-site'] = array('type' => 'color', 'default' => '#F8F8F8', 'label' => 'Background Color Site');
$config['stylesheet_compiler']['settings']['color-primary'] = array('type' => 'color', 'default' => '#425cbb', 'label' => 'Primary Color');
$config['stylesheet_compiler']['settings']['color-primary-1'] = array('type' => 'color', 'default' => '#7cc36a', 'label' => 'Primary Color 1');
$config['stylesheet_compiler']['settings']['color-primary-2'] = array('type' => 'color', 'default' => '#d14b4b', 'label' => 'Primary Color 2');
$config['stylesheet_compiler']['settings']['color-primary-3'] = array('type' => 'color', 'default' => '#6c9a81', 'label' => 'Primary Color 3');
$config['stylesheet_compiler']['settings']['color-bg-secondary'] = array('type' => 'color', 'default' => '#F4F4F4', 'label' => 'Background Color Secondary');
$config['stylesheet_compiler']['settings']['color-on-dark'] = array('type' => 'color', 'default' => '#F4F4F4', 'label' => 'Color on Dark');
$config['stylesheet_compiler']['settings']['color-body'] = array('type' => 'color', 'default' => '#767676', 'label' => 'Body Color');
$config['stylesheet_compiler']['settings']['color-heading'] = array('type' => 'color', 'default' => '#343434', 'label' => 'Heading Color');

$config['stylesheet_compiler']['settings']['base-font-size-px'] = array('type' => 'text', 'default' => '16px', 'label' => 'Base Font Size');
$config['stylesheet_compiler']['settings']['base-font-size-mobile-px'] = array('type' => 'text', 'default' => '14px', 'label' => 'Base Font Size in Mobile');
$config['stylesheet_compiler']['settings']['nav-item-font-size'] = array('type' => 'text', 'default' => '10px', 'label' => 'Nav Item Font Size');
$config['stylesheet_compiler']['settings']['button-radius'] = array('type' => 'text', 'default' => '100px', 'label' => 'Buttons Radius');
$config['stylesheet_compiler']['settings']['input-border-radius'] = array('type' => 'text', 'default' => '50px', 'label' => 'Input Border Radius');
$config['stylesheet_compiler']['settings']['border-width'] = array('type' => 'text', 'default' => '2px', 'label' => 'Border Width');