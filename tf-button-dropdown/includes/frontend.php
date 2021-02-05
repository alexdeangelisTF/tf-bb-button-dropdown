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
		echo '<div class="button-wrap" id="button-wrap-1">';
		echo '<button type="button" class="tf-button" data-toggle="dropdown">';
		// This text should change to a module field value
		echo $button_1_text;
		echo '</button>';
		echo '<div class="tf-dropdown-menu tf-dropdown-menu-1 hide">';
		foreach($button_1_repeater_field as $repeater_1) {
			
			if ($button_1_link_type == 'link_type_url_field') {
				$link = $repeater_1[$button_1_link_value];
			} elseif ($button_1_link_type == 'link_type_repeater_field') {
				$link = '#';
			} else {}
			
			$button_1_id = urlencode($repeater_1[$button_1_label_value]);
			
			echo '<a class="tf-dropdown-item" id="' . $button_1_id . '" href="' . $link . '">';
			echo $repeater_1[$button_1_label_value];
			echo '</a>';
			
		}
		echo '</div>';
		echo '</div>';
		
		if ($button_1_link_type == 'link_type_repeater_field') {
			
			$button_2_repeater_value = $settings->tf_button_dropdown_button_2_repeater_field;
			$button_2_text = $settings->tf_button_dropdown_button_2_text;
			if ($button_2_repeater_value) {
				
				$button_2_label_field = $settings->tf_button_dropdown_button_2_label_field;
				$button_2_link_field = $settings->tf_button_dropdown_button_2_link_field;
				
				echo '<div class="button-wrap hide" id="button-wrap-2">';
				echo '<button type="button" class="tf-button" data-toggle="dropdown" id="button-2">';
				// This text should change to a module field value
				echo $button_2_text;
				echo '</button>';
				echo '<div class="tf-dropdown-menu tf-dropdown-menu-2 hide">';
				foreach($button_1_repeater_field as $repeater_1) {
					
					$button_1_id = urlencode($repeater_1[$button_1_label_value]);
					
					$button_2_repeater = $repeater_1[$button_2_repeater_value];
					
					foreach($button_2_repeater as $button_2_values) {
						
						$button_2_label = $button_2_values[$button_2_label_field];
						$button_2_link = $button_2_values[$button_2_link_field];
						
						echo '<a class="tf-dropdown-item hide" data-button="' . $button_1_id . '" href="' . $button_2_link . '">';
						echo $button_2_label;
						echo '</a>';
						
					}
					
				}
				echo '</div>';
				echo '</div>';
			}
			
		}
		
		echo '</div>';
		
	}
}
?>