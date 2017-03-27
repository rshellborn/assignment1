<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AssemblyController extends Application
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		// build the list of parts, to pass on to our view
		$source = $this->robots->all();
		$parts = array ();

		foreach ($source as $record)
		{
		    $parts = explode(',', $record->parts);

            $image1 = $parts[0];
            $image2 = $parts[1];
            $image3 = $parts[2];

			$robots[] = array ('amount' => $record->amount, 'image1' => $image1, 'image2' => $image2, 'image3' => $image3);
		}

		$this->data['robots'] = $robots;
        $this->data['pagetitle'] = 'Assembly';
        $this->data['pagebody'] = 'assembly';

		$this->render();
	}

}
