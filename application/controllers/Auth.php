<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model("AuthModel", 'm_auth');
	}

	public function index() {
		if($this->session->has_userdata('sess_relawan_userid')) {
			redirect('app');
		}

		$this->template->load('layouts/authenticate', 'auth/login');
	}

	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === TRUE) {
			$data = $this->input->post();

			if($this->m_auth->login($data)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat Datang</div>');
			
				redirect('app');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Username atau Password anda salah.</div>');

				redirect('login');
			}

		} else {
			redirect('login');
		}
	}

	public function logout() {
		$this->session->unset_userdata('sess_relawan_userid');
		$this->session->unset_userdata('sess_relawan_username');
		$this->session->unset_userdata('sess_relawan_roleid');

		redirect('login');
	}

}