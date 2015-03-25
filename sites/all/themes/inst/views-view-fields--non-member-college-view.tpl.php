<?php
//dsm($fields); ?>


<?php
//print render($content['field_cover_photo']);
//print image_style('coverphotoprof', $node->field_cover_photo['und'][0]['uri']); 
?>



<?php print $fields['field_cover_photo']->content; ?>


<div class="summery"><h1>Summery</h1>
<?php print $fields['body']->content; ?>
<?php print flag_create_link('follow_college', $row->nid); ?>

</div>