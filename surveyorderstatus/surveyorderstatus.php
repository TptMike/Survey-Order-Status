<?php
/**
 * @package Survey_Order_Status
 * @version 0.1
 */
/*
Plugin Name: Survey Order Status
Plugin URI: http://github.com/tptmike
Description: This is a custom plugin created for TX Surveing Inc
Author: Michael White
Version: 0.1
License: MIT
Author URI: http://github.com/tptmike
*/

// TODO: Prevent exposing the file or running directly
if ( ! function_exists( 'add_action' )) {
    if ( !headers_sent() ) {
        if (function_exists( 'http_response_code' )) {
            http_response_code(403);
        }
        else {
            header('HTTP/1.1 403 Forbidden', true, 403 );
        }
    }
    exit('Hey there! I am a WordPress plugin requiring functions included with WordPress. I am not meant to be addressed directly.');
}

// Definitions
define( 'SURVSTAT_VERSION', '0.1' );
define( 'SURVSTAT__MINIMUM_WP_VERSION', '4.7' );
define( 'SURVSTAT__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

//TODO: Activation / Deactivation hooks
register_activation_hook(SURVSTAT__PLUGIN_DIR, survstat_install);
register_deactivation_hook(SURVSTAT__PLUGIN_DIR, survstat_decativation);


// TODO: Required files
require_once( SURVSTAT__PLUGIN_DIR . 'class.surveyorderstatus.php' );
