<?php

/**
 * Fired during plugin deactivation
 *
 * @link       navish.github.com
 * @since      1.0.0
 *
 * @package    Market_Surveys
 * @subpackage Market_Surveys/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Market_Surveys
 * @subpackage Market_Surveys/includes
 * @author     Nancy Victor <navish45@gmail.com>
 */
class Market_Surveys_Deactivator
{

	/**
	 * Description. 
	 *
	 * @since    1.0.0
	 */
	public static function deactivate()
	{
        echo "I am deactivated";
	}
}
