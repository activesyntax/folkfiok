<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kapcsolat extends CI_Controller {

    
    private $related_pages = array(
                                     'konyvek' => 'Könyvek',
                                    'konyvek/egy-tucat-bakonyi-betyarmese' => 'Betyármesék',
                                    'konyvek/tobb-tucat-feladat-bakonyi-betyarmesekhez' => 'Munkafüzet a betyármesékhez',
                                    'konyvek/tortenetek-a-falubol' => 'Történetek a faluból',      
                                    'letoltes' => 'E-könyv letöltés',
                                     'betyarora' => 'Interaktív betyáróra',
                                     'esemenyek/sobri-rajzpalyazat' => 'Sobri-rajzpályázat',
                                     'esemenyek/konyvbemutato-papan' => 'Könyvbemutató Pápán',
                                     'esemenyek/betyarmesek-a-szinpadon' => 'Betyármesék a színpadon', );
    
    public function index() {

        $data['title'] = 'Kapcsolat';
        $data['description'] = 'Betyármesék, interaktív betyáróra, néprajzi elbeszélések.';
        $data['image_url'] = 'img/folkfiok.png';
        $data['content'] = $this->load->view('kapcsolat', '', TRUE);
        $data['related_pages'] = $this->related_pages;
        
        $this->load->view('page/header', $data);
        $this->load->view('page/page', $data);
        $this->load->view('page/footer');
    }

}
