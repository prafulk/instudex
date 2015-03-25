<?php
	//dsm($node);
?>

<?php
//print render($content['field_cover_photo']);
//print image_style('coverphotoprof', $node->field_cover_photo['und'][0]['uri']); 
?>

<?php
print theme('image_style', array( 'path' =>  $node->field_cover_photo['und'][0]['uri'],
      'style_name' => 'coverphotoprof'));
?>

<div class="summery"><h1>Summary</h1>
<?php
	print render($content['body']);
?>

</div>