<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Betyarora extends CI_Controller {
    private $related_pages = array(
                                    'betyarora#betyarora-igenylese-urlap' => 'Betyáróra igénylése', 
                                    'konyvek/egy-tucat-bakonyi-betyarmese' => 'Betyármesék',           
                                    'letoltes' => 'E-könyv letöltés',                                  
                                    'esemenyek/sobri-rajzpalyazat' => 'Sobri-rajzpályázat',                                     
                                     'esemenyek/betyarmesek-a-szinpadon' => 'Betyármesék a színpadon', );

    public function index() {

        $data['title'] = 'Betyáróra';
        $data['description'] = 'Betyármesék, interaktív betyáróra, néprajzi elbeszélések.';
        $data['image_url'] = 'img/folkfiok.png';
        $data['content'] = $this->load->view('betyarora', '', TRUE);

        $data['related_pages'] = $this->related_pages;
        
        $this->load->view('page/header', $data);
        $this->load->view('page/page', $data);
        $this->load->view('page/footer');
    }

    public function add_request() {

        //$this->output->set_content_type('application/json');

        $data = json_decode(file_get_contents("php://input"));

        if ($data == NULL || !isset($data->name) || !isset($data->email) || !isset($data->message)) {
            $this->output->set_header('HTTP/1.0 403 Forbidden');
            echo 'Forbidden';
            return;
        }

        $this->load->model('Betyarorak');
        $this->Betyarorak->add($data->name, $data->email, $data->message);
        $this->send_mail($data->name, $data->email);
    }

    private function send_mail($requester_name, $requester_email) {
        $this->load->library('companymail');
        $this->load->helper('messages');

        $htmlMessage = sprintf(Messages::$betyaroraHtmlEmailTemplate.Messages::$signature, 
                                $requester_name
                                                             
        );
        $textMessage = sprintf(Messages::$betyaroraTextEmailTemplate.Messages::$signatureText, 
                                $requester_name 
                                );

        Companymail::send(Messages::$betyaroraEmail, $requester_email, Messages::$betyaroraEmailSubject, $htmlMessage, $textMessage);
    }

}
