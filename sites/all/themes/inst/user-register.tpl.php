
<div class="custom-user-register">
<div id="title-register">Sign Up</div>
<?php
print render($form['profile_main']['field_first_name']);
print render($form['profile_main']['field_last_name']);
print render($form['account']['mail']);
print render($form['account']['conf_mail']);
print render($form['account']['pass']);
print render($form['profile_main']['field_date_of_birth']);
print render($form['profile_main']['field_iam']);	
print render($form['autoassignrole_user']['user_roles']);
print drupal_render($form['actions']['submit']); // print submit button
print drupal_render($form['form_token']);
print drupal_render($form['form_id']);

//print drupal_render_children($form);
print drupal_render($form['actions']);


?>
</div>