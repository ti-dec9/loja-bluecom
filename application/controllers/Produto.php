<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function index() {
        $this->load->view('shop.php');
	}
}
