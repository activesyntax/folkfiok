<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hasici extends CI_Controller {

    public function index() {

        $data['title'] = 'Hasiči';
        $data['description'] = '';
        $data['image_url'] = 'img/folkfiok.png';
        
        /*
        $this->load->model('Books');
        $data['books'] = $this->Books->get_books();

        
        */
        
        $this->load->view('hasici/header',$data);
        $this->load->view('hasici/hasici', $data);
        $this->load->view('hasici/footer');
    }

}