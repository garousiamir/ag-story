<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://agarousi.com
 * @since             1.0.0
 * @package           Ag_Story
 *
 * @wordpress-plugin
 * Plugin Name:       Ag Story
 * Plugin URI:        https://agarousi.com
 * Description:       Very clean and Minimal Story Builder plugin For WordPress like Google Web stories but not very hard and complicated like that and with So much Easier options.
 * Version:           1.0.0
 * Author:            Amirhossein Garousi
 * Author URI:        https://agarousi.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ag-story
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AG_STORY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ag-story-activator.php
 */
function activate_ag_story() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ag-story-activator.php';
	Ag_Story_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ag-story-deactivator.php
 */
function deactivate_ag_story() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ag-story-deactivator.php';
	Ag_Story_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ag_story' );
register_deactivation_hook( __FILE__, 'deactivate_ag_story' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ag-story.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ag_story() {

	$plugin = new Ag_Story();
	$plugin->run();

}
run_ag_story();
