<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class History extends CI_Model  {

    // Constructor
    public function __construct()
    {
            parent::__construct();
    }

    // retrieve a single transaction history
    public function get($which)
    {
        // iterate over the data until we find the one we want
        foreach ($this->db->get('history') as $record)
                if ($record->id == $which)
                        return $record;
        return null;
    }

    // retrieve all of the transaction history entries
    public function all()
    {
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('history');
        return $query->result();
    }


    // retrieves total amount spent
    public function totalSpent() {
        $total = 0;

        foreach ($this->all() as $record)
            if ($record->transactionType == 'Purchase')
                $total += $record->amount;

        return $total;
    }

    // retrieves total amount earned
    public function totalEarned() {
        $total = 0;

        foreach ($this->all() as $record)
            if ($record->transactionType == 'Return' || $record->transactionType == 'Sale')
                $total += $record->amount;

        return $total;
    }

    //add transaction into the database
    public function add($transaction) {
        $this->db->insert('history', $transaction);
    }
}
