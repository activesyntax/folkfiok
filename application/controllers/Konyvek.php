<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Konyvek extends CI_Controller {

    private $related_pages = array(
        'fizetes-es-szallitas' => 'Fizetés és szállítás',
        'letoltes' => 'E-könyv letöltés',
        'betyarora' => 'Interaktív betyáróra',
        'esemenyek/sobri-rajzpalyazat' => 'Sobri-rajzpályázat',
        'esemenyek/konyvbemutato-papan' => 'Könyvbemutató Pápán',
        'esemenyek/betyarmesek-a-szinpadon' => 'Betyármesék a színpadon');
    
    private $related_pages_betyarmesek = array(
        'konyvek/tobb-tucat-feladat-bakonyi-betyarmesekhez' => 'Munkafüzet a betyármesékhez');
    
    private $related_pages_munkafuzet = array(
        'konyvek/egy-tucat-bakonyi-betyarmese' => 'Betyármesék');

    public function index() {

        $data['title'] = 'Könyvek';
        $data['description'] = 'Betyármesék, interaktív betyáróra, néprajzi elbeszélések.';
        $data['image_url'] = 'img/folkfiok.png';

        $this->load->model('Books');
        $data['books'] = $this->Books->get_books();
        $data['content'] = $this->load->view('konyvek', $data, TRUE);

        $data['related_pages'] = $this->related_pages;

        $this->load->view('page/header', $data);
        $this->load->view('page/page', $data);
        $this->load->view('page/footer');
    }

    public function view($id) {

        $data['title'] = 'Könyvek';
        $data['description'] = 'Betyármesék, interaktív betyáróra, néprajzi elbeszélések.';
        $data['image_url'] = 'img/folkfiok.png';

        $this->load->model('Books');
        $data['book'] = $this->Books->get_book($id);
        $data['content'] = $this->load->view('page/book', $data, TRUE);
        
        $data['og_title'] = $data['book']->title;       
        $data['image_url'] = 'img/books/thumb/'.$data['book']->id.'.jpg';
        

        // TODO: move to database
        switch ($id) {
            case 'tobb-tucat-feladat-bakonyi-betyarmesekhez':
                $data['related_pages'] = array_merge($this->related_pages_munkafuzet, $this->related_pages);
                $data['description'] = "Ez a munkafüzet az Egy tucat bakonyi betyármese c. könyvhöz kapcsolódik. A feladatok főképp a szövegértési készséget fejlesztik. Ezen felül magyar betyárvilág megismerését is segíti az általános iskolás korosztály számára. ";
                break;

            case 'egy-tucat-bakonyi-betyarmese':
                $data['related_pages'] = array_merge($this->related_pages_betyarmesek, $this->related_pages);
                $data['description'] = "Ez a mesekönyv a bakonyi betyárok kalandos életébe vezeti be az ifjú olvasót";
                break;

            default:

                $data['related_pages'] = $this->related_pages;
                $data['description'] = "Ezekben az elbeszélésekben az írói fantázia a hiteles néprajzi ábrázolásmóddal találkozik.";
                break;
        }


        $this->load->view('page/header', $data);
        $this->load->view('page/page', $data);
        $this->load->view('page/footer');
    }

}
