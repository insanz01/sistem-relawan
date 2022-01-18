<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('CRUDModel', 'crud');
		$this->load->model('BencanaModel', 'm_bencana');
		$this->load->model('RelawanModel', 'm_relawan');
	}

	public function get($aksi = "", $id = NULL) {
		$data = [];

		switch ($aksi) {
			case 'bencana':
				$data = $this->m_bencana->get($id);
				break;
			case 'relawan':
				$data = $this->m_relawan->get($id);
				break;
			
			default:
				$data = [];
				break;
		}

		echo json_encode($data, JSON_PRETTY_PRINT);
	}
}