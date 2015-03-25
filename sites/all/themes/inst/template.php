<?php
function inst_theme(&$existing, $type, $theme, $path){
  $hooks = array();
   // Make user-register.tpl.php available

  $hooks['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'inst'),
    'template' => 'user-login',
    'preprocess functions' => array(
    'inst_preprocess_user_login'
    ),
  );
  $hooks['user_pass_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'inst'),
    'template' => 'user-pass',
    'preprocess functions' => array(
    'inst_preprocess_user_login'
    ),
  );   
  $hooks['user_register_form'] = array (
     'render element' => 'form',
     'path' => drupal_get_path('theme','inst'),
     'template' => 'user-register',
     'preprocess functions' => array(
     'inst_preprocess_user_register_form'
	 ),
  );
  return $hooks;
}

function inst_preprocess_user_register_form(&$vars) {
  $args = func_get_args();
  array_shift($args);
  $form_state['build_info']['args'] = $args;
  $vars['form'] = drupal_build_form('user_register_form', $form_state['build_info']['args']);
}

function inst_preprocess_user_login(&$vars) {
  $args = func_get_args();
  array_shift($args);
  $form_state['build_info']['args'] = $args;
  $vars['form'] = drupal_build_form('user_login', $form_state['build_info']['args']);
}

function inst_preprocess_user_pass(&$vars) {
  $args = func_get_args();
  array_shift($args);
  $form_state['build_info']['args'] = $args;
  $vars['form'] = drupal_build_form('user_pass', $form_state['build_info']['args']);
}

/**
* theme_menu_link()
*/
function inst_menu_link(array $variables) {
//add class for li
   $variables['element']['#attributes']['class'][] = 'menu-sidebar-below-image' . $variables['element']['#original_link']['mlid'];
//add class for a
   $variables['element']['#localized_options']['attributes']['class'][] = 'menu-sidebar-below-image' . $variables['element']['#original_link']['mlid'];
//dvm($variables['element']);

//add class for li
   $variables['element']['#attributes']['class'][] = 'menu-college-menu' . $variables['element']['#original_link']['mlid'];
//add class for a
   $variables['element']['#localized_options']['attributes']['class'][] = 'menu-college-menu' . $variables['element']['#original_link']['mlid'];
//dvm($variables['element']);
  return theme_menu_link($variables);
}



/**
 * Remove the comment filters' tips
 */
function inst_filter_tips($tips, $long = FALSE, $extra = '') {
  return '';
}
/**
 * Remove the comment filter's more information tips link
 */
function inst_filter_tips_more_info () {
  return '';
}


/**
 * Add / modify variables before the page renders.
 * this function is inculded to create a template for a custom content type
 * This content type is common page
 *  
*/
function inst_preprocess_page(&$vars) {
// custom content type page template
  // Renders a new page template to the list of templates used if it exists
  if (isset($vars['node']->type)) {
// This code looks for any page--custom_content_type.tpl.php page
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}