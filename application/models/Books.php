<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_books() {
        $this->db->select('id, title, author, short_description, price, price_euro, preview_image_count');
        $this->db->order_by('display_order', 'ASC');
        $query = $this->db->get('books');
        return $query->result();
    }

    public function get_book($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('books');
        return $query->row();
    }
    
}
