<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $_arrData;
	public $_return;
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Model_Product');
	}

	public function index() {
		$data['products_featured'] = $this->Model_Product->_selectAll();
		$data['products_new'] = $this->Model_Product->_getAllLimit('id', 'desc', 10, 0);
		$data['products_variable'] = $this->Model_Product->_getAllLimit('id', 'desc', 10, 10);
		$this->load->view('home', $data);
	}
}
