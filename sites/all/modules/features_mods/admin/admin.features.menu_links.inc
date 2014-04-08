<?php
/**
 * @file
 * admin.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function admin_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: editor-menu_add-content:node/add
  $menu_links['editor-menu_add-content:node/add'] = array(
    'menu_name' => 'editor-menu',
    'link_path' => 'node/add',
    'router_path' => 'node/add',
    'link_title' => 'Add content',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'editor-menu_add-content:node/add',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
    'parent_identifier' => 'editor-menu_content:admin/content',
  );
  // Exported menu link: editor-menu_content:admin/content
  $menu_links['editor-menu_content:admin/content'] = array(
    'menu_name' => 'editor-menu',
    'link_path' => 'admin/content',
    'router_path' => 'admin/content',
    'link_title' => 'Content',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'editor-menu_content:admin/content',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: editor-menu_project:node/add/project
  $menu_links['editor-menu_project:node/add/project'] = array(
    'menu_name' => 'editor-menu',
    'link_path' => 'node/add/project',
    'router_path' => 'node/add/project',
    'link_title' => 'Project',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'editor-menu_project:node/add/project',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
    'parent_identifier' => 'editor-menu_add-content:node/add',
  );
  // Exported menu link: editor-menu_projects:admin/projects
  $menu_links['editor-menu_projects:admin/projects'] = array(
    'menu_name' => 'editor-menu',
    'link_path' => 'admin/projects',
    'router_path' => 'admin/projects',
    'link_title' => 'Projects',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'editor-menu_projects:admin/projects',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
    'parent_identifier' => 'editor-menu_content:admin/content',
  );
  // Exported menu link: editor-menu_tags:admin/structure/taxonomy/project_type
  $menu_links['editor-menu_tags:admin/structure/taxonomy/project_type'] = array(
    'menu_name' => 'editor-menu',
    'link_path' => 'admin/structure/taxonomy/project_type',
    'router_path' => 'admin/structure/taxonomy/%',
    'link_title' => 'Tags',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'editor-menu_tags:admin/structure/taxonomy/project_type',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: main-menu_info:info
  $menu_links['main-menu_info:info'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'info',
    'router_path' => 'info',
    'link_title' => 'Info',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'main-menu_info:info',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -49,
    'customized' => 1,
  );
  // Exported menu link: main-menu_projects:<front>
  $menu_links['main-menu_projects:<front>'] = array(
    'menu_name' => 'main-menu',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Projects',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'main-menu_projects:<front>',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -50,
    'customized' => 1,
  );
  // Exported menu link: main-menu_store:http://google.com
  $menu_links['main-menu_store:http://google.com'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://google.com',
    'router_path' => '',
    'link_title' => 'Store',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'main-menu_store:http://google.com',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -48,
    'customized' => 1,
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Add content');
  t('Content');
  t('Info');
  t('Project');
  t('Projects');
  t('Store');
  t('Tags');


  return $menu_links;
}
