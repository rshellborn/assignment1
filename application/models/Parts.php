<?php

/**
 * This is a "CMS" model for parts, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author Maks
 */

class Parts extends CI_Model {

    var $data = array(
        array('id' => '1', 'PartCode' => 'a1', 'creationPlant' => 'Apple', 'caCode' => 'b7c247',
            'creationDateTime' => '2017/02/08/06/30', 'image' => 'a1.jpeg'),
        array('id' => '2', 'PartCode' => 'a2', 'creationPlant' => 'Orange', 'caCode' => 'fb853c',
            'creationDateTime' => '2017/02/07/12/00', 'image' => 'a2.jpeg'),
        array('id' => '3', 'PartCode' => 'a3', 'creationPlant' => 'Mango', 'caCode' => '7e1b6a',
            'creationDateTime' => '2017/02/05/11/30', 'image' => 'a3.jpeg')
        );

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // retrieve a single quote
    public function get($which)
    {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $which)
                return $record;
        return null;
    }

    // retrieve all of the quotes
    public function all()
    {
        return $this->data;
    }

}