<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CSV_Parser {

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
    $data = &$this->imported_data;
    
    $rows = array(); // completed rows
    $row = array(); // current working row
    $column = 0; // current working column index
    $cell_contents = ''; // contents of the current working cell
    
    // TODO: actually parse this >_>
    
}

}