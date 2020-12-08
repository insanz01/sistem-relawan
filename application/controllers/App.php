<?php

class App extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('CRUDModel', 'crud');
	}

	// halaman dashboard
	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('app/dashboard');
		$this->load->view('templates/footer');
	}

	// member area
	public function register_member () {

		$this->form_validation->set_rules('NIK', 'NIK', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
		$this->form_validation->set_rules('agama', 'agama', 'required');
		$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'required');


		if($this->form_validation->run() == FALSE) {

			$id_terakhir = $this->crud->get_last('members');

			if($id_terakhir) {
				$data['ID'] = $id_terakhir['ID'] + 1;
			} else {
				$data['ID'] = 1;
			}

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('app/member/registrasi', $data);
			$this->load->view('templates/footer');
		} else {
			$data = $this->input->post();

			$data['created_at'] = date('Y-m-d H:i:s');
			$data['updated_at'] = date('Y-m-d H:i:s');

			if($this->crud->insert($data, 'members')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
			}

			redirect('app/members');
		}

	}

	public function users ($aksi = NULL, $id = NULL) {

		if($aksi == 'add') {
			$data = $this->input->post();
			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

			if($this->crud->insert($data, 'users')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal disimpan</div>');
			}

			redirect('App/users');

		} else if ($aksi == 'aktivasi') {
			if($this->crud->activation($id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Status akun berhasil diubah</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Status akun gagal diubah</div>');
			}

			redirect('App/users');
		} else {
			$data['users'] = $this->crud->get('users');

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('app/member/users', $data);
			$this->load->view('templates/footer');
		}

	}

	public function members ($aksi = NULL, $id = NULL) {
		if($aksi == "delete") {

			$id = $this->input->post('id');
			
			if($this->crud->delete('members', $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Member berhasil menghapus.</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Member gagal menghapus.</div>');
			}

			redirect('App/members');

		} else if($aksi == "edit") {

		} else {
			$data['members'] = $this->crud->get('members');

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('app/member/members', $data);
			$this->load->view('templates/footer');
		}
	}

	// transaksi area
	public function simpan() {
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('app/transaksi/simpan');
		$this->load->view('templates/footer');
	}

	public function pinjam() {
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('app/transaksi/pinjam');
		$this->load->view('templates/footer');
	}

	public function withdraw() {

	}

	public function angsuran() {

	}

	// lainnya untuk kebutuhan API
	public function get_data($table, $id = NULL) {
		$data = $this->crud->get($table, $id);

		echo json_encode($data, JSON_PRETTY_PRINT);
	}

}