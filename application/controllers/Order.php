<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function index() {

        $data['title'] = 'Rendelés';
        $data['description'] = 'Betyármesék, interaktív betyáróra, néprajzi elbeszélések.';
        $data['image_url'] = 'img/folkfiok.png';

        $this->load->view('page/header', $data);
        $this->load->view('rendeles');
        $this->load->view('page/footer');
    }

    public function add() {

        $data = json_decode(file_get_contents("php://input"));

        if ($data == NULL ||
                !isset($data->customer_name) ||
                !isset($data->customer_email) ||
                !isset($data->ship_address) ||
                !isset($data->products) ||
                !isset($data->pay_method) ||
                !isset($data->total_amount) ||
                 !isset($data->shipping_costs)
        ) {
            $this->output->set_header('HTTP/1.0 403 Forbidden');
            echo 'Forbidden';
            return;
        }

        $this->load->model('Customers');
        $customer_id = $this->Customers->add($data->customer_name, $data->customer_email, $data->ship_address);

        $this->load->model('Orders');
        $pay_method = strcmp($data->pay_method, 'bank') == 0 ? 0 : 1;
        echo "PAY METHOD " . $data->pay_method;
        $this->Orders->add($customer_id, $data->products, $pay_method);
        $this->send_mail($data);
    }

    public function send_mail($data) {
        $this->load->library('companymail');
        $this->load->helper('messages');

        $htmlMessage = Messages::getOrderEmail($data->customer_name, $data->total_amount, $data->products, $data->shipping_costs);
        $textMessage = Messages::getOrderEmailText($data->customer_name, $data->total_amount, $data->products, $data->shipping_costs);

        Companymail::send(Messages::$orderEmail, $data->customer_email, Messages::$orderEmailSubject, $htmlMessage, $textMessage);
    }

    public function send_mail_php() {
        $message = "Line 1\r\nLine 2\r\nLine 3";
        $message = wordwrap($message, 70, "\r\n");

        $this->load->helper('messages');
        mail(Messages::$adminEmail, 'Test mail', $message);
    }

    public function send_mail_ci() {
        $this->load->library('email');
        $this->load->helper('messages');


        $this->email->from(Messages::$orderEmail, 'FolkFiók');
        $this->email->to(Messages::$adminEmail);
        $this->email->set_newline("\r\n");

        $this->email->subject('Email Teszt');
        $this->email->message('Email küldés tesztelése. HTML email: <strong/>árvíztűrő tükörfúrógép</strong>');
        $this->email->set_alt_message('Ez egy sima szövegese email.');

        if ($this->email->send()) {
            echo 'Az emailt sikeresen elküldtük.';
        } else {
            show_error($this->email->print_debugger());
        }
    }

}
