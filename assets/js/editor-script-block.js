/**
 * Remove squared button style
 *
 * @since Growth Labs 0.1
 */
/* global wp */
wp.domReady( function() {
	wp.blocks.unregisterBlockStyle( 'core/button', 'squared' );
} );
