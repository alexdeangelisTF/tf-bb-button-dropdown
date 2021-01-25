<?php

/*Instance JS goes here*/

?>

(function($) {
	$('.tf-dropdown-<?php echo $id; ?> button').on('click',function(e){
		e.preventDefault();
		$('.tf-dropdown-<?php echo $id; ?> .tf-dropdown-menu').toggle();
	});
})( jQuery );