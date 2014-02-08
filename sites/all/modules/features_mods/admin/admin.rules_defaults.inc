<?php
/**
 * @file
 * admin.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function admin_default_rules_configuration() {
  $items = array();
  $items['rules_add_update_content'] = entity_import('rules_config', '{ "rules_add_update_content" : {
      "LABEL" : "Add \\/ update content",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "rules" ],
      "ON" : { "node_insert" : [], "node_update" : [] },
      "DO" : [ { "redirect" : { "url" : "admin\\/content", "force" : 0 } } ]
    }
  }');
  $items['rules_user_login'] = entity_import('rules_config', '{ "rules_user_login" : {
      "LABEL" : "User login",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "rules" ],
      "ON" : { "user_login" : [] },
      "DO" : [ { "redirect" : { "url" : "admin\\/content" } } ]
    }
  }');
  return $items;
}
