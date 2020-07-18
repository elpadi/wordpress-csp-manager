<?php
/**
 * Content Security Policy Manager
 * 
 * @package CSP_Manager
 * @author Patrick Sletvold
 * @license GPL-3.0-or-later
 * 
 * Plugin Name:       Content Security Policy Manager
 * Description:       Manage Content Security Policies separately for wp-admin, logged in users and regular users.
 * Version:           1.0.0
 * Requires at least: 4.5
 * Requires PHP:      7.2
 * Author:            Patrick Sletvold
 * Author URI:        https://www.multitek.no/
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 */

defined('ABSPATH') || die('No script kiddies please!');

require_once __DIR__ . '/src/CSP_Manager/Settings.php';
use CSP_Manager\Settings;

$settings = new Settings(__FILE__);