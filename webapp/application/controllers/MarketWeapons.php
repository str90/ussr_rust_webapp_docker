<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarketWeapons extends CI_Controller {
    public function display() {
        function __construct() {
            parent::__construct();
        }
        $this->load->helper('url');
        $this->load->view('market_weapons_view');
    }

    public function add_to_cart() {
        $post_buffer = $this->input->post();
        $item_buffer = new MarketItem();
        $item_buffer->setItemProperties($post_buffer['item'], $post_buffer['item_quantity']);
        $_SESSION['cart_objects'][] = $item_buffer;
        echo "Добавлено в корзину";
        unset($item_buffer);
        //unset($_SESSION['cart_objects']);
    }
}