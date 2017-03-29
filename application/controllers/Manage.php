<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends Application
{
    public function index() {
        // build the list of robots, to pass on to our view
        $source = $this->robots->all();

        foreach ($source as $record)
        {
            $parts = explode(',', $record->partCodes);

            $image1 = $parts[0];
            $image2 = $parts[1];
            $image3 = $parts[2];

            $robots[] = array (
                'id' => $record->id, 
                'amount' => $record->amount, 
                'image1' => $image1,
                'image2' => $image2,
                'image3' => $image3
                );
        }



        $this->data['pagetitle'] = 'Manage'; //title
        $this->data['pagebody'] = 'manage'; //view file
        $this->data['error'] = $this->session->userdata('error');
        $this->data['message'] = $this->session->userdata('message');
        if (isSet($robots)){
            $this->data['robots'] = $robots;
        } else {
            $robots[] = array (
                'id' => "none", 
                'amount' => 0, 
                'image1' => "none1", 
                'image2' => "none2", 
                'image3' => "none3"
                );
            $this->data['robots'] = $robots;
        }

        $this->render();
        $this->session->set_userdata('error', "");
        $this->session->set_userdata('message', "");
    }

    public function reboot() {
        $apikey = $this->properties->getApiKey();

        $response = file_get_contents('https://umbrella.jlparry.com/work/rebootme?key=' . $apikey);

        if($response == "Ok") {
            //ok to reboot
            $this->parts->deleteAll();
            $this->history->deleteAll();
            $this->robots->deleteAll();
            $this->properties->deleteAll();

            //set session to flag api key needed
            $this->session->set_userdata('message', "Successfully rebooted plant.");
        } else {
            //error
            $this->session->set_userdata('error', $response);
        }
        redirect('/manage');
    }

    public function register() {
        $token = $this->input->post('token');

        $response = file_get_contents('https://umbrella.jlparry.com/work/registerme/' . PLANT_NAME . '/' . $token);

        if(substr($response, 0, 2) == "Ok") {
            //success
            $this->session->set_userdata('message', "Kiwi Plant is registered with PRC.");

            $apikey = substr($response, 3);

            //store api key into database
            $data = array(
                'apikey' => $apikey
            );

            $this->properties->deleteAll();
            $this->properties->add($data);
        } else {
            //failure
            $this->session->set_userdata('error', "Unable to register, check your token.");
        }

        redirect('/manage');
    }

    public function sell() {
        $robotId = $this->input->post('robot');

        if($robotId == "none") {
            
            redirect('/manage');
        }

        $robot = $this->robots->get($robotId);

        $caCodes = explode(',', $robot->caCodes);

        $apikey = $this->properties->getApiKey();

        $response = file_get_contents('https://umbrella.jlparry.com/work/buymybot/' .
                                        $caCodes[0] . '/' . $caCodes[1] . '/' . $caCodes[2] .
                                        '?key=' . $apikey);

        if($response == "Ok") {
            //successfully sold
            $this->robots->remove($robotId);
            $this->session->set_userdata('message', "Robot successfully sold to PRC!");
        } else {
            //error
            $this->session->set_userdata('error', substr($response, 4));
        }
        redirect('/manage');
    }
}