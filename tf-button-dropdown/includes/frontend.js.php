<?php

/*Instance JS goes here*/

?>

(function($) {
	$('.tf-dropdown-<?php echo $id; ?> #button-1 button').on('click',function(e){
		e.preventDefault();
		$('.tf-dropdown-<?php echo $id; ?> #button-1 .tf-dropdown-menu').toggle();
	});
})( jQuery );