<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kemampuan extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('CRUDModel', 'crud');
	}

	public function index() {
		$data['kemampuan'] = $this->crud->get('jenis_bencana');

		$this->template->load('layouts/dashboard', 'app/kemampuan/index', $data);
	}
}