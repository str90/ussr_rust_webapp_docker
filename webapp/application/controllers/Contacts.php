<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
    public function display() {
        $this->load->helper('url');
        $this->load->view('contacts_view');
    }
}