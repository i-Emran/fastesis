/*
 * Fastesis
 *
 * @package     fastesis\lib\js\global
 *
 * @link        https://hindistaan.com
 * 
 * @author      Imran Raza
 * 
 * @copyright   Copyright © 2022 Hindistaan
 * 
 * @license     GPL-3.0-or-later
 * 
 * @description Custom Off Canvas Menu and Search form.
 */
( function ( document, $, undefined ) {

	//'use strict';

	// Add aria labels.
	$( '.menu-toggle, .sub-menu-toggle, .search-toggle' ).attr( { "aria-expanded":false, "aria-pressed": false } );

	$( '.menu-toggle' ).click(function(event){
		event.preventDefault();
		$(this).next( '.nav-primary' ).animate({width: 'toggle'}, 200);
		$( this ).toggleClass( "activated" );
			
		 $( this ).attr( 'aria-expanded',$( this ).attr( 'aria-expanded' ) === 'true'?'false':'true' );
	    $( this ).attr( 'aria-pressed',$( this ).attr( 'aria-pressed' ) === 'true'?'false':'true' );
		$('.nav-primary').toggleClass('activated');
	});
// Add Sub menu toggle icon
$( '.menu-item-has-children > a' ).before( '<button class="sub-menu-toggle" role="button"><span class="subburger"></span><span class="screen-reader-text">Sub Menu</span></button>' );

// Sub menu toggle.
	 $( ".sub-menu-toggle" ).on( "click", function() {
	  event.preventDefault();
		$( this ).toggleClass( "activated" );
	    $( this ).siblings( ".sub-menu" ).slideToggle( 120 );
	    $( this ).attr( 'aria-expanded',$( this ).attr( 'aria-expanded' ) === 'true'?'false':'true' );
	    $( this ).attr( 'aria-pressed',$( this ).attr( 'aria-pressed' ) === 'true'?'false':'true' );
	} );

	// Search Toggle

	$( '.search-toggle' ).click(function(event){
		event.preventDefault();
		$(this).next( '.header-widget-area' ).slideToggle( 120 );
		$( this ).toggleClass( "activated" );
		 $( this ).attr( 'aria-expanded',$( this ).attr( 'aria-expanded' ) === 'true'?'false':'true' );
	    $( this ).attr( 'aria-pressed',$( this ).attr( 'aria-pressed' ) === 'true'?'false':'true' );
		$('.header-widget-area').toggleClass('activated');
	});
} )( document, jQuery );
