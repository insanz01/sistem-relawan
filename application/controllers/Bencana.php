<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// bencanapedia.id

class Bencana extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('CRUDModel', 'crud');
		$this->load->model('BencanaModel', 'm_bencana');
		$this->load->model('RelawanModel', 'm_relawan');
	}

	public function index($aksi = NULL) {
		
		if($aksi == "tambah") {
			
			$data = $this->input->post();
			$data['id'] = NULL;

			if($this->crud->insert('jenis_bencana', $data)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambah data</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambah data</div>');
			}

			redirect('bencana/index');

		} else {

			$data['bencana'] = $this->crud->get('jenis_bencana');

			$this->template->load('layouts/dashboard', 'app/bencana/index', $data);
		}
	}

	public function spesifikasi($aksi = NULL) {

		if($aksi == "tambah") {
			
			$data = $this->input->post();
			$data['id'] = NULL;

			if($this->crud->insert('bencana', $data)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data bencana</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data bencana</div>');
			}

			redirect('bencana/spesifikasi');

		} else {

			$data['bencana'] = $this->m_bencana->get();
			$data['provinces'] = $this->crud->get('reg_provinces');
			$data['jenis_bencana'] = $this->crud->get('jenis_bencana');
			$data['level_bencana'] = $this->crud->get('level_bencana');

			$this->template->load('layouts/dashboard', 'app/bencana/spesifikasi', $data);
		}
	}

	public function tanggap($aksi = NULL) {

		if($aksi == "tambah") {

			$data = $this->input->post();
			$data['id'] = NULL;

			if($this->crud->insert("tugas_relawan", $data)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Relawan berhasil ditugaskan</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Relawan gagal ditugaskan</div>');
			}

			redirect('bencana/tanggap');
		
		} else {

			$data['bencana'] = $this->m_bencana->get();
			$data['relawan'] = $this->m_relawan->get();
			$data['tugas_relawan'] = $this->m_relawan->tugas();

			$this->template->load('layouts/dashboard', 'app/tanggap/index', $data);
		}
	}
}