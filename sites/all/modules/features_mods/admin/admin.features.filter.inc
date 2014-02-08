<?php
/**
 * @file
 * admin.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function admin_filter_default_formats() {
  $formats = array();

  // Exported format: HTML.
  $formats['plain_text'] = array(
    'format' => 'plain_text',
    'name' => 'HTML',
    'cache' => 1,
    'status' => 1,
    'weight' => 10,
    'filters' => array(),
  );

  return $formats;
}
