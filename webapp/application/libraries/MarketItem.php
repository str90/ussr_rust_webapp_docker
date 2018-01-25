<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarketItem {
    private $item;
    private $item_amount;

  /*  function __construct($in_item, $in_item_amount) {
        $this->item = $in_item;
        $this->item_amount = $in_item_amount;
    } */

    public function setItemProperties($in_item, $in_item_amount) {
        $this->item = $in_item;
        $this->item_amount = $in_item_amount;
    }

    public function getItemName() {
        return $this->item;
    }

    public function getItemAmount() {
        return $this->item_amount;
    }
}