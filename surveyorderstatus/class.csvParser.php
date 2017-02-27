<?php

class CSV_Parser {

    protected $enclosure = '"';

    protected $delimiter = ",";

    protected $imported_data;

public function load_data ( $data )
{
    	if ( "\n" !== substr( $data, -1 ) ) 
        {
            $data .= "\n";
	}
	$this->import_data = $data;
}

public function parse_csv( $delimiter )
{

    $csvData = file_get_contents($fileName);
    $lines = explode(PHP_EOL, $csvData);
    $array = array();
    
    foreach ($lines as $lines)
    {
        $array[] = str_getcsv($line);
    }
    
    // TODO: Insert to database.
    global $wpdb;
    
    $table_name = $wpdb->prefix . "orderstatussurvey";
    // TODO: Check if table is empty. Right now assume it isn't.
    $sql = "TRUNCATE $table_name";
    $dbDelta ( $sql );
    
    // Iterate through the array, insert data.
    foreach ($array as $arr_index)
    {
    	$sql = "INSERT INTO $table_name (workorderid, status)
    	VALUES ($arr_index['workorderid'], $arr_index['status']);";
    	// run it
    	dbDelta( $sql );
    }   
}

}