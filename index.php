<?php

/**
*
 * @link              https://github.com/navish
 * @since             1.0.0
 * @package           Market_Surveys
 *
 * @wordpress-plugin
 * Plugin Name:       Market Surveys
 * Plugin URI:        https://github.com/navish
 * Description:       Creates surveys 
 * Version:           1.0.0
 * Author:            Nancy Victor
 * Author URI:        https://github.com/navish
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       market-surveys
 * Domain Path:       /languages
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MARKET_SURVEYS_VERSION', '1.0.0' );

/**
 * Runs during plugin activation.
 */
function activate_market_surveys() {
	require_once plugin_dir_path( __FILE__ ) . 'includes\class-market-surveys-activator.php';
	Market_Surveys_Activator::activate();
}

/**
 * Runs during plugin deactivation.
 */
function deactivate_market_surveys() {
	require_once plugin_dir_path( __FILE__ ) . 'includes\class-market-surveys-deactivator.php';
	Market_Surveys_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_market_surveys' );
register_deactivation_hook( __FILE__, 'deactivate_market_surveys' );


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes\class-market-surveys.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

function run_market_surveys() {

	$plugin = new Market_Surveys();
	$plugin->run();

}
run_market_surveys();

?>