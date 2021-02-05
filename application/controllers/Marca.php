<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marca extends CI_Controller {

	public function index() {        
		redirect(base_url());		
	}

	public function transcend() {
		$this->load->view('shop');
	}

	public function lan_expert() {
		$this->load->view('shop');
	}

	public function cabo_hercules() {
		$this->load->view('shop');
	}
	
	public function gts_hard_soft() {
		$this->load->view('shop');
	}
}
