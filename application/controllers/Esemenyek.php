<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Esemenyek extends CI_Controller {

    private $related_pages = array(
                                     'konyvek' => 'Könyvek',
                                    'konyvek/egy-tucat-bakonyi-betyarmese' => 'Betyármesék',
                                    'konyvek/tortenetek-a-falubol' => 'Történetek a faluból',      
                                    'letoltes' => 'E-könyv letöltés',
                                     'betyarora' => 'Interaktív betyáróra',
                                     'esemenyek/sobri-rajzpalyazat' => 'Sobri-rajzpályázat',
                                     'esemenyek/konyvbemutato-papan' => 'Könyvbemutató Pápán',
                                     'esemenyek/betyarmesek-a-szinpadon' => 'Betyármesék a színpadon', );
    
    public function index() {

        $data['title'] = 'Események';
        $data['description'] = 'Betyármesék, interaktív betyáróra, néprajzi elbeszélések.';
        $data['image_url'] = 'img/folkfiok.png';

        $this->load->model('Events');
        $data['events'] = $this->Events->get_events();
        $data['content'] = $this->load->view('esemenyek', $data, TRUE);
        $data['related_pages'] = $this->related_pages;

        $this->load->view('page/header', $data);
        $this->load->view('page/page', $data);
        $this->load->view('page/footer');
    }

    public function view($id) {

       

        $this->load->model('Events');
        $data['event'] = $this->Events->get_event($id);
        $data['content'] = $this->load->view('page/event', $data, TRUE);
        $data['related_pages'] = $this->related_pages;

        $data['title'] = 'Események';
        $data['og_title'] = $data['event']->title;
        $data['description'] = 'Betyármesék, interaktív betyáróra, néprajzi elbeszélések.';
        $data['image_url'] = 'img/esemenyek/'.$data['event']->id.'.jpg';
        
        $this->load->view('page/header', $data);
        $this->load->view('page/page', $data);
        $this->load->view('page/footer');
    }

}
