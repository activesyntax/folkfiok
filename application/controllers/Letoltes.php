<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Letoltes extends CI_Controller {

    private $related_pages = array(
        'konyvek' => 'Nyomtatott könyvek',
        'konyvek/egy-tucat-bakonyi-betyarmese' => 'Betyármesék',
        'konyvek/tobb-tucat-feladat-bakonyi-betyarmesekhez' => 'Munkafüzet a betyármesékhez',
        'konyvek/tortenetek-a-falubol' => 'Történetek a faluból',
        'betyarora' => 'Interaktív betyáróra',
        'esemenyek/sobri-rajzpalyazat' => 'Sobri-rajzpályázat',
        'esemenyek/betyarmesek-a-szinpadon' => 'Betyármesék a színpadon',);

    public function index() {

        $data['title'] = 'Letöltés';
        $data['description'] = 'Betyármesék, interaktív betyáróra, néprajzi elbeszélések.';
        $data['image_url'] = 'img/pdf.png';
        $data['content'] = $this->load->view('letoltes', '', TRUE);
        $data['related_pages'] = $this->related_pages;

        $this->load->view('page/header', $data);
        $this->load->view('page/page', $data);
        $this->load->view('page/footer');
    }

}
