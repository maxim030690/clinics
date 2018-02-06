(function( $ ) {
	"use strict";
	
	// Home Page Background Image - Image Control
	wp.customize( 'jtit_herpes_home_page_bgimage_background_image', function( value ) {
		value.bind( function( to ) {
			$( '.cover-image-container' ).css( 'background-image', 'url( ' + to + ')' );
		} );
	});

})( jQuery );