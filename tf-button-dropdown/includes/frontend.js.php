<?php

/*Instance JS goes here*/

?>

(function($) {

	var module = $('.tf-dropdown-<?php echo $id; ?>');
	
	// Button Dropdown on click
	$(module).find('.button-wrap button').on('click',function(e){
		e.preventDefault();
		var dropdown = $(this).parent().find('.tf-dropdown-menu');
		$(module).find('.tf-dropdown-menu').not(dropdown).removeClass('show');
		$(module).find('.tf-dropdown-menu').not(dropdown).addClass('hide');
		// Check if the dropdown has the hide class, or the show class
		if ( $(dropdown).hasClass('hide') ) {
			// Remove hide class and add show class
			$(dropdown).removeClass('hide');
			$(dropdown).addClass('show');
		} else if ( $(dropdown).hasClass('show') ) {
			// Remove show class and add hide class
			$(dropdown).removeClass('show');
			$(dropdown).addClass('hide');
		} else {}
	});
	
	// On click of a dropdown item
	$(module).find('.button-wrap .tf-dropdown-menu a').on('click',function(e){
		var dropdown = $(this).parent();
		var buttonWrap = $(dropdown).parent();
		// Check if the dropdown has the show class
		if ( $(dropdown).hasClass('show') ) {
			// Remove show class and add hide class
			$(dropdown).removeClass('show');
			$(dropdown).addClass('hide');
		} else {}
		
		// Get the text value of the item clicked & replace the button text with that
		var linkText = $(this).text();
		$(buttonWrap).find('.tf-button').text(linkText);
		
		// If the button is button 1, on click of item, show button 2
		var buttonWrapID = $(buttonWrap).attr('id');
		if ( buttonWrapID == 'button-wrap-1' ) {
			$(module).find('#button-wrap-2').removeClass('hide');
			$(module).find('#button-wrap-2').addClass('show');
		} else {}
		
		// Get the ID of the link that is being clicked
		var linkID = $(this).attr('id');
		// If the button being clicked is button 1
		if ( buttonWrapID == 'button-wrap-1' ) {
			
			var dropdown2Menu = $(module).find('#button-wrap-2 .tf-dropdown-menu');
			
			// For each link in this dropdown
			// Set the links to show class where the link ID matches the data-button attribute
			$(dropdown2Menu).find('a').each(function(){
				$(this).removeClass('hide');
				$(this).removeClass('show');
				var dataButton = $(this).attr('data-button');
				if (dataButton == linkID) {
					$(this).addClass('show');
				} else {
					$(this).addClass('hide');
				}
			});
		} else {}
	});
})( jQuery );