<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PartsController extends Application
{
	public function index()
	{
        // build the list of parts, to pass on to our view
		$source = $this->parts->all();

		$parts = array();
		foreach ($source as $record)
		{
                    $parts[] = array ('id' => $record['id'], 'partCode' => $record['partCode']);
		}

		// send the data to the view 
		$this->data['parts'] = $parts;

		$this->data['pagetitle'] = 'Parts';
		$this->data['pagebody'] = 'parts'; // the view file 

		$this->render();
    }
    
    public function details($id) {
        $part = $this->parts->get($id);
        
        $this->data['parts'] = $part;

		$this->data['pagetitle'] = 'Part ' . $id . ' Details';
		$this->data['pagebody'] = 'partDetails'; // the view file 
                $this->render();
    }
}