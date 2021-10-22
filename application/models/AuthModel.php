<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {
	public function login($data) {
		$user = $this->db->get_where('users', ['username' => $data['username'], 'is_active' => 1])->row_array();

		if(password_verify($data['password'], $user['password'])) {
			$this->session->set_userdata('sess_relawan_userid', $user['id']);
			$this->session->set_userdata('sess_relawan_username', $user['username']);
			$this->session->set_userdata('sess_relawan_roleid', $user['role_id']);

			return TRUE;
		}

		return FALSE;
	}

	public function activate($user_id) {
		$user = $this->db->get_where('users', ['id' => $user_id])->row_array();

		$this->db->set('is_active', !$user['is_active']);
		$this->db->where('id', $user_id);
		$this->db->update('users');

		return $this->db->affected_rows();
	}
}