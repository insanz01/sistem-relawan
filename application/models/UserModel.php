<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function get($role, $id = NULL) {
		if($role == "admin") {
			if($id) {
				$query = "SELECT attr_admin.id, users.id as user_id, users.username, attr_admin.nama_lengkap, attr_admin.no_hp, attr_admin.email, reg_provinces.name as lokasi, attr_admin.created_at, attr_admin.updated_at FROM attr_admin JOIN users ON attr_admin.user_id = users.id JOIN reg_provinces ON reg_provinces.id = attr_admin.lokasi WHERE attr_admin.user_id = $id";
			} else {
				$query = "SELECT attr_admin.id, users.id as user_id, users.username, attr_admin.nama_lengkap, attr_admin.no_hp, attr_admin.email, reg_provinces.name as lokasi, attr_admin.created_at, attr_admin.updated_at FROM attr_admin JOIN users ON attr_admin.user_id = users.id JOIN reg_provinces ON reg_provinces.id = attr_admin.lokasi";
			}
		} else if($role == "relawan") {
			if($id) {
				$query = "SELECT attr_relawan.id, users.id as user_id, users.username, attr_relawan.nama_lengkap, attr_relawan.no_hp, attr_relawan.email, reg_provinces.name as lokasi, attr_relawan.created_at, attr_relawan.updated_at FROM attr_relawan JOIN users ON attr_relawan.user_id = users.id JOIN reg_provinces ON reg_provinces.id = attr_relawan.lokasi WHERE attr_relawan.user_id = $id";
			} else {
				$query = "SELECT attr_relawan.id, users.id as user_id, users.username, attr_relawan.nama_lengkap, attr_relawan.no_hp, attr_relawan.email, reg_provinces.name as lokasi, attr_relawan.created_at, attr_relawan.updated_at FROM attr_relawan JOIN users ON attr_relawan.user_id = users.id JOIN reg_provinces ON reg_provinces.id = attr_relawan.lokasi";
			}
		}

		if($id) {
			return $this->db->query($query)->row_array();
		}

		return $this->db->query($query)->result_array();
	}

	public function insert($table, $data) {
		$data['created_at'] = date('Y-m-d H:i:s', time());
		$data['updated_at'] = date('Y-m-d H:i:s', time());

		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function delete($table, $id) {
		$is_deleted = $this->db->delete($table, ['user_id' => $id]);

		if($is_deleted) {
			return $this->db->delete('users', ['id' => $id]);
		}

		return false;
	}

	public function update($table, $data, $id) {
		$this->db->set($data);
		$this->db->where($id);
		$this->db->update($table);

		return $this->db->affected_rows();
	}

	public function activate($id) {
		// $query = "SELECT users.id, users.username, users.password FROM users JOIN attr_customer ON users.id = attr_customer.user_id WHERE attr_customer.user_id = $id";
		$user = $this->db->get_where('users', ['id' => $id])->row_array();

		$this->db->set('is_active', !$user['is_active']);
		$this->db->where('id', $id);
		$this->db->update('users');

		return $this->db->affected_rows();
	}

	public function reset_password($data, $id) {
		$this->db->set($data);
		$this->db->where($id);
		$this->db->update('users');

		return $this->db->affected_rows();
	}
}