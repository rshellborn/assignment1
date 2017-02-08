<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Parts extends Application
{
	public function index()
	{
        
        

        // build the list of parts, to pass on to our view
		$source = $this->parts->all();

		// $parts = array();
		// foreach ($source as $parts)
		// {
		// 	$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		// }

		// send the data to the view 
		$this->data['data'] = $source;

		$this->data['pagetitle'] = 'Parts';
		$this->data['pagebody'] = 'parts'; // the view file 


		$this->render();
    }
}