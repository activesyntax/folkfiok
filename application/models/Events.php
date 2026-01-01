<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_events() {
        $this->db->select('id, title, date, location, short_description');
        $this->db->order_by('date', 'DESC');
        $query = $this->db->get('events');
        return $query->result();
    }

    public function get_event($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('events');
        return $query->row();
    }

}


