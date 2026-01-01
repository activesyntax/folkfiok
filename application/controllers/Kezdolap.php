<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kezdolap extends CI_Controller {

    public function index() {

        $data['title'] = 'FolkFiók - népi kultúra, betyárvilág, irodalom';
        $data['description'] = 'Betyármesék, interaktív betyáróra, néprajzi elbeszélések.';
        $data['image_url'] = 'img/folkfiok.png';
        
        
        $this->load->model('Books');
        $data['books'] = $this->Books->get_books();

        
        
        $this->load->view('page/header',$data);
        $this->load->view('kezdolap', $data);
        $this->load->view('page/footer');
    }

}
