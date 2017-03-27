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
		    $parts[] = array ('id' => $record->id, 'partCode' => $record->partCode);
		}

		// send the data to the view 
		$this->data['parts'] = $parts;

		$this->data['pagetitle'] = 'Parts';
		$this->data['pagebody'] = 'parts'; // the view file 

		$this->render();
    }
    
    public function details($id) {
        $part = $this->parts->get($id);

        //cd code, part code, amount, plant

        $this->data['id'] = $part->id;
        $this->data['caCode'] = $part->caCode;
        $this->data['partCode'] = $part->partCode;
        $this->data['plant'] = $part->plant;
        $this->data['amount'] = $part->amount;

		$this->data['pagetitle'] = 'Part Details';
		$this->data['pagebody'] = 'partDetails'; // the view file
        $this->render();
    }
}