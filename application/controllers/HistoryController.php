<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryController extends Application
{

    /**
     * Index Page for this controller.
     *
     */
    public function index()
    {       
        $this->data['pagetitle'] = 'History'; //title
        $this->data['pagebody'] = 'history'; //view file
        
        $source = $this->history->all();

        $history = array();
        foreach ($source as $record)
        {
            $history[] = array ('id' => $record->id, 'transactionType' => $record->transactionType,
                    'quantity' => $record->quantity, 'amount' => $record->amount, 'timestamp' => $record->timestamp,
                    'plant' => $record->plant);
        }

        $this->data['history'] = $history;
        $this->render();
    }

}

