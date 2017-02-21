<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// We need access to the database via dbDelta()
function survstat_install()
{
    // call database global var
    global $wpdb;
    
    // TODO: Table Creation
    $table_name = $wpdb->prefix . "orderstatussurvey";
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
            workorderid int(12) NOT NULL,
            status text NOT NULL,
            PRIMARY KEY (workorderid)
            ) $charset_collate;";
    
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );  
}

function survstat_uninstall()
{
    global $wpdb;
    
    // TODO: Table Drop
    $table_name = $wpdb->prefix . "orderstatussurvey";
    
    $sql = "DROP TABLE IF EXISTS $table_name;";
    dbDelta( $sql );
}

function survstat_decativation()
{
    //Do nothing
}

function survstat_cleardata()
{
    //do nothing
}
