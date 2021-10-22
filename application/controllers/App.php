<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('CRUDModel', 'crud');

		if(!$this->session->has_userdata('sess_relawan_userid')) {
			redirect('login');
		}
	}

	public function index() {
		$this->template->load('layouts/dashboard', 'app/dashboard');
	}

}