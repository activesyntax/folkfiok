<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Model {

    public $customer_id;
    public $customer_name;
    public $customer_email;
    public $ship_address;
    
//    public $orders;

    public function __construct() {
        parent::__construct();
    }

    public function add($cutomer_name, $customer_email, $ship_address) {
        
        $this->customer_name = $cutomer_name;
        $this->customer_email = $customer_email;
        $this->ship_address = $ship_address;
        
        $this->db->insert('customers', $this);
        return $this->db->insert_id();
    }
    
      public function getAll() {
        $this->db->select('customer_id, customer_name, customer_email, ship_address ');
        $this->db->order_by('customer_id', 'ASC');
        $query = $this->db->get('customers');
        return $query->result();
    }

}

