<?php
/**
 * @file
 * Bulk export of heartbeat objects generated by Bulk export module.
 */

/**
 * Implements hook_heartbeat_stream_info().
 */
function heartbeat_heartbeat_stream_info() {

  $heartbeatstreams = array();

  /**
   * singleactivity
   */
  $heartbeatstream = new HeartbeatStreamConfig();
  $heartbeatstream->disabled = FALSE; /* Edit this to true to make a default heartbeatstream disabled initially */
  $heartbeatstream->api_version = 1;
  $heartbeatstream->class = 'singleactivity';
  $heartbeatstream->real_class = 'singleactivity';
  $heartbeatstream->name = 'Single activity';
  $heartbeatstream->module = 'heartbeat';
  $heartbeatstream->title = 'Activity for one single instance';
  $heartbeatstream->path = 'streams/singleactivity.inc';
  $heartbeatstream->settings = array(
    'settings__active_tab' => 'edit-settings-fs-perms',
    'messages_denied' => array(
    ),
    'stream_path' => '',
    'stream_profile_path' => '',
    'show_status_form' => '0',
    'shoutbox' => 0,
  );
  $heartbeatstream->variables = array();
  $heartbeatstreams['singleactivity'] = $heartbeatstream;

  /**
   * viewsactivity
   */
  $heartbeatstream = new HeartbeatStreamConfig();
  $heartbeatstream->disabled = FALSE; /* Edit this to true to make a default heartbeatstream disabled initially */
  $heartbeatstream->api_version = 1;
  $heartbeatstream->class = 'viewsactivity';
  $heartbeatstream->real_class = 'viewsactivity';
  $heartbeatstream->name = 'Views activity';
  $heartbeatstream->module = 'heartbeat';
  $heartbeatstream->title = 'Views activity (automatically used for views)';
  $heartbeatstream->path = 'streams/viewsactivity.inc';
  $heartbeatstream->settings = array(
    'settings__active_tab' => 'edit-settings-fs-activity-status',
    'messages_denied' => array(
    ),
    'stream_path' => '',
    'stream_profile_path' => '',
    'show_status_form' => '0',
    'shoutbox' => 0,
  );
  $heartbeatstream->variables = array();
  $heartbeatstreams['viewsactivity'] = $heartbeatstream;

  return $heartbeatstreams;

}