<?php

$title = elgg_echo('river_addon:friends:online');   

$options = array(
		'type' => 'user',
		"limit" => FALSE,
		'relationship' => 'friend',
		'relationship_guid' => elgg_get_logged_in_user_guid(),
		'inverse_relationship' => FALSE,
		'full_view' => FALSE,
		'pagination' => FALSE,
		'list_type' => 'gallery',
		'gallery_class' => 'elgg-gallery-users',
		);
		
$friends_online = elgg_get_entities_from_relationship($options);
		
?>
<script type="text/javascript">
	$(document).ready(function() {
		setInterval(function() {
		$("#responsecontainer").load(location.href+" #responsecontainer>*","");
		}, 20000); 
	});
</script>

<div id="responsecontainer">
	<?php
        foreach ($friends_online as $online) {
            if ($online->last_action > time() - 300) {
                $result .= elgg_view_entity_icon($online, 'tiny', array('use_hover' => TRUE));
            } 
        }
		if ($result) {
    		echo elgg_view_module('featured', $title, $result);
		} else {
			$result = elgg_echo('river_addon:friends:online:none');
			echo elgg_view_module('featured', $title, $result);
		}
	?>
</div>
