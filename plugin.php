<?php
/**
 * Plugin Name: Tribe Fools
 * Plugin URI: https://github.com/moderntribe/tribe-fools
 * Description: A versatile suite of blocks to enhance your WordPress site; 90s-esque themed by default.
 * Author: Modern Tribe, Inc | April Fools Division
 * Author URI: https://tri.be
 * Version: 1.0.0
 * License: GPL3+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 *
 *     Tribe Fools - a suite of blocks for WordPress
 *     Copyright (C) 2019 Modern Tribe, Inc
 *
 *     This program is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     (at your option) any later version.
 *
 *     This program is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
