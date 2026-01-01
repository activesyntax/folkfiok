<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// THIS MUST BE SYNCED WITH DB 
define('ORDERED',0);
define('PAYED',1);
define('SHIPPED',2);

class Orders extends CI_Model {

    public $customer_id;
    public $product_id;
    public $quantity;
    public $order_date;
    public $state_id;
    public $pay_method;
    

    public function __construct() {
        parent::__construct();
    }

    public function add($customer_id, $products, $pay_method) {

        $this->customer_id = $customer_id;
        $this->order_date = date("Y-m-d H:i:s",  time());
        $this->state_id = ORDERED;        
        $this->pay_method = $pay_method;
        
        foreach ($products as $product) {

            $this->product_id = $product->productId;
            $this->quantity = $product->quantity;
            $this->db->insert('orders', $this);
        }
    }
    
     public function getCustomerOrders($customer_id) {
        $this->db->where('customer_id', $customer_id);
        $this->db->join('books', 'books.id = orders.product_id');
        $query = $this->db->get('orders');
        return $query->result();
    }

}
