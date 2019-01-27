<?php

/**
 * Fired during plugin activation.
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
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since     1.0.0
 */
class WCSW_Activator {

	/**
	 * Fired during plugin activation.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		if ( ! is_plugin_active( WCSW_WOO ) ) {
			return;
		}

		if ( ! get_transient( 'wcsw_flush' ) ) {

			set_transient( 'wcsw_flush', '1', 0 );

		}

		if ( ! get_option( 'wcsw_settings' ) ) {

			add_option( 'wcsw_settings', array(
				'wcsw_select_field_0'   => 1,
				'wcsw_checkbox_field_1' => 1,
				'wcsw_checkbox_field_2' => 1,
			) );

		}

	}

}
