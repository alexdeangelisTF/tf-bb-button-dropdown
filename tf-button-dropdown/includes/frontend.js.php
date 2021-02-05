<?php

/*Instance JS goes here*/

?>

(function($) {
	// Button 1 Dropdown on click
	$('.tf-dropdown-<?php echo $id; ?> #button-1 button').on('click',function(e){
		e.preventDefault();
		$('.tf-dropdown-<?php echo $id; ?> #button-1 .tf-dropdown-menu').toggle();
	});
	// Button 2 Dropdown on click
	$('.tf-dropdown-<?php echo $id; ?> #button-2 button').on('click',function(e){
		e.preventDefault();
		$('.tf-dropdown-<?php echo $id; ?> #button-2 .tf-dropdown-menu').toggle();
	});
})( jQuery );