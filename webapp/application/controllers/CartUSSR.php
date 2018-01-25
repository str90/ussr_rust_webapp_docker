<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartUSSR extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function display() {
        $this->load->helper('url');
        $this->load->view('cart_view');
    }

    public function ym_native() {
        printf("%d", $this->Cart_model->getPrice());
    }

    public function ym_card() {
        printf("%d", $this->Cart_model->getPrice());
    }

    public function clear_cart() {
        unset($_SESSION['cart_objects']);
        echo 0;
    }
}