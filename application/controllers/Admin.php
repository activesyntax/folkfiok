<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {

        if ($this->session->userdata('login') == true) {
            redirect('admin/dashboard');
        }

        if (isset($_GET['code'])) {

            $this->googleplus->getAuthenticate();
            $this->session->set_userdata('login', true);
            $userInfo = $this->googleplus->getUserInfo();
            $this->session->set_userdata('user_profile', $userInfo);
            print_r($userInfo);

            if (strcmp($userInfo['email'], 'admin@folkfiok.hu') == 0 ||
                    strcmp($userInfo['email'], 'admin2@folkfiok.hu') == 0) {

                redirect('admin/dashboard');
            } else {
                echo 'FORBIDDEN';
                $this->session->set_userdata('login', false);
            }
        }

        $contents['login_url'] = $this->googleplus->loginURL();
        $this->load->view('welcome_message', $contents);
    }

    public function dashboard() {

        if ($this->session->userdata('login') != true) {
            redirect('');
        }

        $this->load->model('Customers');
        $this->load->model('Orders');
        $customers = $this->Customers->getAll();
        foreach ($customers as $customer) {
            $customer->orders = $this->Orders->getCustomerOrders($customer->customer_id);
        }


        $data['customers'] = $customers;

        $data['user_profile'] = $this->session->userdata('user_profile');
        $this->load->view('page/admin-header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('page/admin-footer', $data);
    }

    public function profile() {

        if ($this->session->userdata('login') != true) {
            redirect('');
        }

        $contents['user_profile'] = $this->session->userdata('user_profile');
        $this->load->view('profile', $contents);
    }

    public function logout() {

        $this->session->sess_destroy();
        $this->googleplus->revokeToken();
        redirect('');
    }

}
