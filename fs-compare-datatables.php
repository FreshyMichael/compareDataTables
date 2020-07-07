<?php
/**
* Plugin Name: TablePress Extension: Compare Function
* Plugin URI: https://github.com/FreshyMichael/compareDataTables
* Description: Compare table data by row using DataTables CDN ** Disable TablePress function: Use DataTables - to prevent duplicate inclusion ** 
* Version: 1.0.0
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/
// Add Little Security
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

//Define the Plugin Directory
define('PLUGIN_DIR' , dirname(__FILE__).'/');
//______________________________________________________________________________
include 'includes/fs061820_append_wp_head.php';

//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/compareDataTables',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'compareDataTables'
);
//Enable Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
//Optional: If you're using a private repository, specify the access token like this:
//
//
//Future Update Note: Comment in these sections and add token and branch information once private git established
//
//
//$myUpdateChecker->setAuthentication('your-token-here');
//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//______________________________________________________________________________
/* PluginName End */
?>
