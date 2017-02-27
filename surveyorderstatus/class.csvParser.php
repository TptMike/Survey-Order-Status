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
    
}

}