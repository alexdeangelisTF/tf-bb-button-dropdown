<?php
// Get the value of the repeater field in the module
// This should be the field name of the repeater for button one
$tf_button_1_repeater_value = $settings->tf_button_dropdown_button_1_repeater_field;
// Check if this field name matches in the db
$tf_button_1_repeater_field = get_field($tf_button_1_repeater_value);
// If a field name with a value has been found, show the button
if ($tf_button_1_repeater_field) {
	
	// Get label field value
	$label_value = $settings->tf_button_dropdown_button_1_label_field;
	// Get link field value
	$link_value = $settings->tf_button_dropdown_button_1_link_field;
	
	// There must be a lable & link value in order to show the button
	if ($label_value && $link_value) {
		
		echo '<div class="tf-dropdown tf-dropdown-' . $id . '">';
		echo '<button type="button" class="tf-button" data-toggle="dropdown">';
		// This text should change to a module field value
		echo 'Select Format';
		echo '</button>';
		echo '<div class="tf-dropdown-menu">';
		foreach($tf_button_1_repeater_field as $repeater_1) {
			echo '<a class="tf-dropdown-item" id="postname-1" href="' . $repeater_1[$link_value] . '">';
			echo $repeater_1[$label_value];
			echo '</a>';
		}
		echo '</div>';
		echo '</div>';
		
	}
}
?>