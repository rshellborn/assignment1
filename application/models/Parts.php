<?php

/**
 * This is a "CMS" model for parts, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author Maks
 */

class Parts extends CI_Model {

    // note: having parts for a complete robot is going to be rare in the next iteration. 
    var $data = array(
        array('id' => '1', 'partCode' => 'a1', 'plant' => 'HeadOffice', 'caCode' => 'b7c247',
            'amount' => '12', 'image' => 'a1.jpeg'),
        array('id' => '2', 'partCode' => 'a2', 'plant' => 'HeadOffice', 'caCode' => 'fb853c',
            'amount' => '12', 'image' => 'a2.jpeg'),
        array('id' => '3', 'partCode' => 'a3', 'plant' => 'HeadOffice', 'caCode' => '7e1b6a',
            'amount' => '12', 'image' => 'a3.jpeg'),
        array('id' => '6', 'partCode' => 'b3', 'plant' => 'HeadOffice', 'caCode' => 'fb8656',
            'amount' => '12', 'image' => 'b3.jpeg'),
        array('id' => '11', 'partCode' => 'm2', 'plant' => 'HeadOffice', 'caCode' => '5e5a0f',
            'amount' => '12', 'image' => 'm2.jpeg')

        );

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // retrieve a single part given the id 
    public function get($which)
    {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $which)
                return $record;
        return null;
    }

    // retrieve all of the parts
    public function all()
    {
        return $this->data;
    }
    
    // retrieves total number of parts in inventory
    public function totalParts() {
        return sizeof($this->data);
    }

}