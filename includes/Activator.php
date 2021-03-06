<?php

/**
 * Simple Wishlist for WooCommerce
 * Copyright (C) 2018-2020 Andrei Nadaban
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

namespace SW;

/**
 * The activator class.
 *
 * @since     1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * The activator class.
 *
 * @since    1.0.0
 */
class Activator {

	/**
	 * Runs on plugin activation.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		// If the required plugins are not active, the execution stops here.
		if ( ! class_exists( 'WooCommerce' ) ) {
			return;
		}

		// Sets a transient that is used to flush the rewrite rules only once.
		if ( ! get_transient( 'sw_flush' ) ) {
			set_transient( 'sw_flush', '1', 0 );
		}

	}

}
