<?php
/**
 * Customizer Separator Control settings for this theme.
 *
 * @package WordPress
 * @subpackage Growth Labs 2021
 * @since Growth Labs 0.1
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( ! class_exists( 'TwentyTwenty_Separator_Control' ) ) {
		/**
		 * Separator Control.
		 */
		class TwentyTwenty_Separator_Control extends WP_Customize_Control {
			/**
			 * Render the hr.
			 */
			public function render_content() {
				echo '<hr/>';
			}

		}
	}
}
