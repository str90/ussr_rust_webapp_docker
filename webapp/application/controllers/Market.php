<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Market extends CI_Controller {
    public function display() {
        $this->load->helper('url');
        $this->load->view('market_view');
    }
}