<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fizetes extends CI_Controller {

    private $related_pages = array(
        'konyvek' => 'Könyvek',
        'konyvek/egy-tucat-bakonyi-betyarmese' => 'Betyármesék',
        'konyvek/tortenetek-a-falubol' => 'Történetek a faluból',
        'letoltes' => 'E-könyv letöltés',
        'betyarora' => 'Interaktív betyáróra',
        'esemenyek/sobri-rajzpalyazat' => 'Sobri-rajzpályázat',
        'esemenyek/konyvbemutato-papan' => 'Könyvbemutató Pápán',
        'esemenyek/betyarmesek-a-szinpadon' => 'Betyármesék a színpadon',);

    public function index() {

        $data['title'] = 'Fizetés és szállítás';
        $data['description'] = 'Betyármesék, interaktív betyáróra, néprajzi elbeszélések.';
        $data['image_url'] = 'img/folkfiok.png';
        $data['content'] = $this->load->view('fizetes-es-szallitas', '', TRUE);
        $data['related_pages'] = $this->related_pages;

        $this->load->view('page/header', $data);
        $this->load->view('page/page', $data);
        $this->load->view('page/footer');
    }

}
