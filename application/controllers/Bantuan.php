<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->template('layouts/dashboard', 'app/bantuan/index');
	}
}