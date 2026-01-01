<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    var $titles = array(
//        'konyvek' => 'KÖNYVEK',
//        'betyarora' => 'BETYÁRÓRA',
//        'letoltes' => 'LETÖLTÉS',
//        'esemenyek' => 'ESEMÉNYEK',
//        'kapcsolat' => 'KAPCSOLAT',
//        'konyvek/egy-tucat-bakonyi-betyarmese' => 'EGY TUCAT BAKONYI BETYÁRMESE',
        'konyvek' => 'Könyvek',
        'betyarora' => 'Betyáróra',
        'letoltes' => 'Letöltés',
        'esemenyek' => 'Események',
        'kapcsolat' => 'Kapcsolat',
        'konyvek/egy-tucat-bakonyi-betyarmese' => 'Könyvek',     
        'konyvek/tortenetek-a-falubol' => 'Könyvek',        
        'konyvek/betyarutakon' => 'Könyvek',
//        'konyvek/egy-tucat-bakonyi-betyarmese' => 'Egy tucat bakonyi betyármese',     
//        'konyvek/tortenetek-a-falubol' => 'Történetek a faluból',        
//        'konyvek/betyarutakon' => 'Betyárutakon',
        
    );

    public function index() {
        
    }

    public function view($page = 'kezdolap', $subsite = NULL) {        
        
        $view_path = trim(join('/', array($page, $subsite)), '/');

        if (!file_exists(APPPATH . 'views/' . $view_path . '.php')) {
            show_404();
        }

        $this->load->view('page/header');
        if ($page != 'kezdolap') {

            $data['title'] = $this->titles[$view_path];
            $data['content'] = $this->load->view($view_path, '', TRUE);
            $this->load->view('page/page', $data);
        } else {

            $this->load->view('kezdolap');
        }
        $this->load->view('page/footer');
    }

}
