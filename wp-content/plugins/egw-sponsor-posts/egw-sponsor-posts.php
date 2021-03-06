<?php
/*
	Plugin Name: Evergreen Wellness Sponsored Posts
	Plugin URI: https://www.myegw.com
	Description: A solution for adding sponsored posts to www.myegw.com
	Version: 1.0.0
	Author: AD
	Requires at least: 4.7.2
	Tested up to: 4.7.2

	License: GPL v3

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


	/* NOTICE ---------------------------------------------------------------
	* this plugin currently relies on CPT UI with  "sponsored_post" post type
	------------------------------------------------------------------------*/

	// Prohibits Direct Call
	if (!function_exists('get_option')) {
  		header('HTTP/1.0 403 Forbidden');
  		die;
	}

	define('EGWSP_NAMESPACE', 'egwsp');
	define('EGWSP_VERSION', '1.0.0');
	define('EGWSP_PLUGIN_URL', plugin_dir_url(__FILE__)); 
	define('EGWSP_PLUGIN_DIR', plugin_dir_path(__FILE__));
	define('EGWSP_PLUGIN_BASE_NAME', plugin_basename(__FILE__));
	define('EGWSP_PLUGIN_FILE', basename(__FILE__));
	define('EGWSP_PLUGIN_FULL_PATH', __FILE__);

	require_once 'egwsp-init.php';