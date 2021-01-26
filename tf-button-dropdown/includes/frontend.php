<?php
// Get the value of the repeater field in the module
// This should be the field name of the repeater for button one
$button_1_repeater_value = $settings->tf_button_dropdown_button_1_repeater_field;
// Check if this field name matches in the db
$button_1_repeater_field = get_field($button_1_repeater_value);
// If a field name with a value has been found, show the button
if ($button_1_repeater_field) {
	
	// Get label field value
	$button_1_label_value = $settings->tf_button_dropdown_button_1_label_field;
	
	$button_1_text = $settings->tf_button_dropdown_button_1_text;
	if (!$button_1_text) {
		$button_1_text = 'Button text';
	}
	
	// There must be a label in order to show the button
	if ($button_1_label_value) {
		
		$button_1_link_type = $settings->tf_button_dropdown_button_1_link_type;
		$button_1_link_value = $settings->tf_button_dropdown_button_1_link_field;
		
		echo '<div class="tf-dropdown tf-dropdown-' . $id . '">';
		echo '<button type="button" class="tf-button" data-toggle="dropdown">';
		// This text should change to a module field value
		echo $button_1_text;
		echo '</button>';
		echo '<div class="tf-dropdown-menu">';
		foreach($button_1_repeater_field as $repeater_1) {
			
			if ($button_1_link_type == 'link_type_url_field') {
				$link = $repeater_1[$button_1_link_value];
			} elseif ($button_1_link_type == 'link_type_repeater_field') {
				$link = '#';
			} else {}
			
			echo '<a class="tf-dropdown-item" id="postname-1" href="' . $link . '">';
			echo $repeater_1[$button_1_label_value];
			echo '</a>';
		}
		echo '</div>';
		echo '</div>';
		
	}
}
?>