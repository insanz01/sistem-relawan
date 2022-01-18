<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['bencana'] = $this->m_bencana->get();
		$data['provinces'] = $this->crud->get('reg_provinces');
		$data['jenis_bencana'] = $this->crud->get('jenis_bencana');
		$data['level_bencana'] = $this->crud->get('level_bencana');

		$this->load->template('layouts/dashboard', 'app/bantuan/index', $data);
	}
}