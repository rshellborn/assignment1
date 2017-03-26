<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class History extends CI_Model {

    // Constructor
    public function __construct()
    {
            parent::__construct();
    }

    // retrieve a single transaction history
    public function get($which)
    {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
                if ($record['purchaseId'] == $which)
                        return $record;
        return null;
    }

    // retrieve all of the transaction history entries
    public function all()
    {
        return $this->data;
    }


    // retrieves total amount spent
    public function totalSpent() {
        $total = 0;

        foreach ($this->data as $record)
            if ($record['transactionType'] == 'purchase')
                $total += $record['money'];

        return $total;
    }

    // retrieves total amount earned
    public function totalEarned() {
        $total = 0;

        foreach ($this->data as $record)
            if ($record['transactionType'] == 'sold' || $record['transactionType'] == 'sold')
                $total += $record['money'];

        return $total;
    }
}
