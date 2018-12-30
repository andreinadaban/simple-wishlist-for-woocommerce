<?php

/**
 * The assets class.
 *
 * @since    1.0.0
 */

/**
 * If this file is called directly, exit.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The assets class.
 *
 * @since    1.0.0
 */
class WCSW_Public_Assets {

	/**
	 * Registers the JavaScript files for the public side of the website.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( 'wcsw-public-js', plugin_dir_url( __FILE__ ) . 'js/wcsw-public.js', array( 'jquery' ), filemtime( WCSW_DIR . '/public/js/wcsw-public.js' ), true );

	}

	/**
	 * Adds some JavaScript variables.
	 *
	 * @since    1.0.0
	 */
	public function js_variables() {

		if ( is_account_page() || is_singular( 'product' ) ) {

			$ui = new WCSW_Public_UI();

			$view_wishlist_button = $ui->view_wishlist_button();
			$ajax_url = get_admin_url() . '/admin-ajax.php';

			echo <<<EOT
			
				<script>
				
					var goToWishlistButton = '{$view_wishlist_button}';
					var ajaxURL = '{$ajax_url}';
				
				</script>

EOT;

		}

	}

}
