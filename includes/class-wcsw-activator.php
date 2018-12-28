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
 * @author    Andrei Nadaban <contact@andreinadaban.ro>
 */
class WCSW_Activator {

	/**
	 * Fired during plugin activation.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		if ( ! get_transient( 'wcsw_flush' ) ) {

			set_transient( 'wcsw_flush', '1', 0 );

		}

	}

}
