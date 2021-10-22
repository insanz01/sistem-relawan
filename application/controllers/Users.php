<?php

class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('CRUDModel', 'crud');
		$this->load->model('UserModel', 'm_user');
	}

	public function index() {
		$this->template->load('layouts/dashboard', 'app/users/admin/index');
	}

	public function admin($aksi = NULL) {

		if($aksi == "tambah") {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('nama_lengkap', 'NamaLengkap', 'required');
			$this->form_validation->set_rules('no_hp', 'NoHP', 'required');

			if($this->form_validation->run() === FALSE) {

				redirect('users/admin');
			} else {
				
				$userData = [
					'id' => NULL,
					'username' => $this->input->post('username'),
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'role_id' => 1,
					'is_active' => 1
				];

				$userID = $this->m_user->insert('users', $userData);

				if($userID) {
					$adminAttr = [
						'id' => NULL,
						'user_id' => $userID,
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'email' => $this->input->post('email'),
						'no_hp' => $this->input->post('no_hp'),
						'lokasi' => $this->input->post('lokasi')
					];

					if($this->m_user->insert('attr_admin', $adminAttr)) {
						
						$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun berhasil dibuat!</div>');
					} else {
						
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun gagal dibuat!</div>');
					}

				} else {

					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun gagal dibuat!</div>');
				}

				redirect('users/admin');
			}

		} else {

			$data['provinsi'] = $this->crud->get('reg_provinces');
			$data['users'] = $this->m_user->get('admin');

			$this->template->load('layouts/dashboard', 'app/users/admin/index', $data);
		}
	}

	public function relawan($aksi = NULL) {
		
		if($aksi == "tambah") {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('nama_lengkap', 'NamaLengkap', 'required');
			$this->form_validation->set_rules('no_hp', 'NoHP', 'required');

			if($this->form_validation->run() === FALSE) {

				redirect('users/relawan');
			} else {
				
				$userData = [
					'id' => NULL,
					'username' => $this->input->post('username'),
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'role_id' => 2,
					'is_active' => 1
				];

				$userID = $this->m_user->insert('users', $userData);

				if($userID) {
					$relawanAttr = [
						'id' => NULL,
						'user_id' => $userID,
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'email' => $this->input->post('email'),
						'no_hp' => $this->input->post('no_hp'),
						'lokasi' => $this->input->post('lokasi')
					];

					if($this->m_user->insert('attr_relawan', $relawanAttr)) {
						
						$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun berhasil dibuat!</div>');
					} else {
						
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun gagal dibuat!</div>');
					}

				} else {

					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun gagal dibuat!</div>');
				}

				redirect('users/relawan');
			}

		} else {

			$data['provinsi'] = $this->crud->get('reg_provinces');
			$data['users'] = $this->m_user->get('relawan');

			$this->template->load('layouts/dashboard', 'app/users/relawan/index', $data);
		}
	}
}