<?php
/**
 * @file
 * admin.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function admin_taxonomy_default_vocabularies() {
  return array(
    'project_type' => array(
      'name' => 'Project tags',
      'machine_name' => 'project_type',
      'description' => '',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
