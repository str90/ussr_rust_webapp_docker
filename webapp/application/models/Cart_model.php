<?php

class Cart_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getPrice() {
        $order_sum = 0;
        if(isset($_SESSION['cart_objects'])) for($i = 0; $i < count($_SESSION['cart_objects']); $i++) {
            $query = $this->db->get('billing_table_costs');
            foreach ($query->result() as $row) {
                if($_SESSION['cart_objects'][$i]->getItemName() === $row->Item) $order_sum += intval($row->Cost) * intval($_SESSION['cart_objects'][$i]->getItemAmount());
            }
        }
        return (int)$order_sum;
    }
}