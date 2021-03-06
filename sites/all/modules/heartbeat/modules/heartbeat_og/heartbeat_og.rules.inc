<?php

/**
 * @file Includes any rules integration provided by heartbeat OG.
 */

/**
 * Implements hook_rules_file_info().
 */
function heartbeat_og_rules_file_info() {
  return array('heartbeat_og');
}

/**
 * Implements hook_rules_action_info().
 */
function heartbeat_rules_rules_action_info_alter(& $actions) {

  ctools_include('export');
  foreach (ctools_export_crud_load_all('heartbeat_messages', TRUE) as $template) {
  	$actions['heartbeat_activity_' . $template->message_id]['parameter']['in_group'] = array(
  	  'type' => 'boolean',
      'label' => t('Add the "In-Group" tag to track OG activity'),
      'optional' => TRUE,
  	);
  }
}

/**
 * Implements hook_rules_action_info().
 */
function __heartbeat_rules_rules_action_info() {

  $base_parameters = array(
    'nid' => array('type' => 'text', 'label' => t('Entity ID')),
    'uid' => array('type' => 'text', 'label' => t('User ID')),
    'nid_target' => array('type' => 'text', 'label' => t('Entity target ID'), 'optional' => TRUE),
    'uid_target' => array('type' => 'text', 'label' => t('User target ID'), 'optional' => TRUE),
    'cid' => array('type' => 'text', 'label' => t('Comment ID'), 'optional' => TRUE),
  );
  $actions = array();

  ctools_include('export');
  foreach (ctools_export_crud_load_all('heartbeat_messages', TRUE) as $template) {

    $variables = $template->variables;
    $name = 'heartbeat_activity_' . $template->message_id;

    $actions[$name] = array(
      'label' => t('Log activity for @template', array('@template' => $template->description)),
      'group' => t('Heartbeat'),
      'parameter' => $base_parameters,
      'base' => 'rules_action_heartbeat_activity_log',
    );
    $actions[$name]['parameter']['message_id'] = array(
      'label' => t('Message ID'),
      'type' => 'list<text>',
      'options list' => 'heartbeat_templates_names',
      'default value' => $template->message_id,
      'description' => t('Unique identifier for the heartbeat message template that will be used.'),
    );

    if (!empty($variables)) {
      foreach ($variables as $var_name => $variable) {
        $actions[$name]['parameter'][$var_name] = array(
          'type' => 'text',
          'label' => $var_name
        );
      }
    }

  }

  return $actions;
}
