	<div class="profilepage">
    

	<?php //dsm($user_profile); ?>
	
	<?php
	// load profile fields in user-profile.tpl.php
	$profile = profile2_load_by_user($elements['#account']);
	//dsm($profile);
	?>
	
<div id="friendlink">
<?php
  $account = menu_get_object('user');
  print flag_create_link('friend', $account->uid);
?>
</div>
	
	<div class="cover-photo">
	<?php
	print theme('image_style', array( 'path' =>  $profile['main']->field_profile_cover_photo['und'][0]['uri'],
	      'style_name' => 'coverphotoprof'));
	?>
	</div>

	<div id="about">
		<div class="heading"><h1>About</h1></div>
		<?php 
		$views = views_embed_view('studentpagefront', 'block_1');
		print render($views);
		?>
	</div>
	
	<div id="heartact">
		<div class="heartactivity"><h1>Recent Activity</h1></div>
		<?php 
		//$views = views_embed_view('custom_heartbeat_activity-block', 'block_1');
		//print render($views);
		?>
		<?php
		$block = module_invoke('views', 'block_view', 'd491d2ab6fc519d4ee2131c3446bfb63');
		print render($block['content']);
		?>
		<?php
		//$block = module_invoke('module_name', 'block_view', 'block_delta');
		//print render($block['content']);
		?>
	</div>

	<?php
	print render($user_profile['statuses']); 
	?>
	<div id="following-college">
		<div class="heading"><h2>Colleges following</h2>
			<?php
			$block = module_invoke('views', 'block_view', 'following_colleges-block');
			print render($block['content']);
			?>
		</div>
	</div>
</div>