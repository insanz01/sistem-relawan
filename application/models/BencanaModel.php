<?php

class BencanaModel extends CI_Model {
	public function get() {
		$query = "SELECT bencana.id, jenis_bencana.nama as jenis, reg_provinces.name as lokasi, level_bencana.nama as level, bencana.radius, bencana.created_at, bencana.updated_at FROM bencana JOIN jenis_bencana ON bencana.id_bencana = jenis_bencana.id JOIN reg_provinces ON bencana.id_lokasi = reg_provinces.id JOIN level_bencana ON bencana.level = level_bencana.id";

		return $this->db->query($query)->result_array();
	}
}