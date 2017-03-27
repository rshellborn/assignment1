<?php

/**
 * This is a "CMS" model for parts, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author Maks
 */

class Parts extends CI_Model {

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // retrieve a single part given the id 
    public function get($which)
    {
        // iterate over the data until we find the one we want
        foreach ($this->all() as $record)
            if ($record->id == $which)
                return $record;
        return null;
    }

    // retrieve all of the parts
    public function all()
    {
        $query = $this->db->get('parts');
        return $query->result();
    }
    
    // retrieves total number of parts in inventory
    public function totalParts() {
        return sizeof($this->all());
    }

}