<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Betyarorak extends CI_Model {

    public $name;
    public $email;
    public $message;

    public function __construct() {
        parent::__construct();
    }

    public function add($name, $email, $message) {
        
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;

        $this->db->insert('betyarorak', $this);
    }

}


