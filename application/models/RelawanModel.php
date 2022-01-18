<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RelawanModel extends CI_Model {
	public function get($id = NULL) {
		$query = "SELECT attr_relawan.id, attr_relawan.nama_lengkap, attr_relawan.email, attr_relawan.no_hp, reg_provinces.name as lokasi FROM attr_relawan JOIN reg_provinces ON attr_relawan.lokasi = reg_provinces.id";

		if($id) {
			$query .= " WHERE attr_relawan.id = $id";

			return $this->db->query($query)->row_array();
		}

		return $this->db->query($query)->result_array();
	}

	public function tugas($id = NULL) {
		$query = "SELECT tugas_relawan.id, attr_relawan.id as id_relawan, attr_relawan.nama_lengkap, attr_relawan.email, attr_relawan.no_hp, jenis_bencana.nama as bencana, reg_provinces.name as asal, bencana.id_lokasi as lokasi_bencana FROM tugas_relawan JOIN attr_relawan ON tugas_relawan.id_relawan = attr_relawan.id JOIN reg_provinces ON reg_provinces.id = attr_relawan.lokasi JOIN bencana ON tugas_relawan.id_bencana = bencana.id JOIN jenis_bencana ON bencana.id_bencana = jenis_bencana.id";

		if($id) {
			$query .= " WHERE tugas_relawan.id = $id";

			$tugas = $this->db->query($query)->row_array();

			$tugas['lokasi'] = $this->db->get_where('reg_provinces', ['id' => $tugas['lokasi_bencana']])->row_array()['name'];

			return $tugas;
		}

		$arr_tugas = [];

		$tugas = $this->db->query($query)->result_array();

		foreach($tugas as $t) {
			$lokasi = $this->db->get_where('reg_provinces', ['id' => $t['lokasi_bencana']])->row_array()['name'];

			$temp = [
				'id' => $t['id'],
				'id_relawan' => $t['id_relawan'],
				'nama_lengkap' => $t['nama_lengkap'],
				'email' => $t['email'],
				'no_hp' => $t['no_hp'],
				'bencana' => $t['bencana'],
				'asal' => $t['asal'],
				'lokasi' => $lokasi
			];

			array_push($arr_tugas, $temp);
		}

		return $arr_tugas;
	}
}