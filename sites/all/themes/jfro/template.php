<?php

/**
 * Implements hook_preprocess().
 */
function jfro_preprocess_page(&$variables) {
  $variables['main_menu'] = render(menu_tree_output(menu_tree_all_data('main-menu')));
}

/**
 * Implements hook_css_alter().
 * Removes all Drupal system stylesheets.
 */
function jfro_css_alter(&$css){
  $remove = array(
    'sites/all/modules/date/date_api/date.css',
    'sites/all/modules/date/date_popup/themes/datepicker.1.7.css',
    'sites/all/modules/views/css/views.css',
    'sites/all/modules/ckeditor/ckeditor.css',
    'sites/all/modules/ctools/css/ctools.css',
    'sites/all/modules/field_group/field_group.field_ui.css',
    'sites/all/modules/commerce/modules/product/theme/commerce_product.theme.css',
    'sites/all/modules/commerce/modules/cart/theme/commerce_cart.theme.css',
    'sites/all/modules/commerce/modules/line_item/theme/commerce_line_item.theme.css',
    'sites/all/modules/addressfield/addressfield.css'
  );
  foreach($css as $path => $stylesheet){
    if(strpos($path, 'modules/') === 0 || in_array($path, $remove)) unset($css[$path]);
  }
}

?>