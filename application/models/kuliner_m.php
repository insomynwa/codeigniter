<?php
class Kuliner_m extends CI_Model {

	function __construct() {
		//load database
		$this->load->database();
	}

	function get_kuliner() {
		// mengambil data kuliner yang di database
		$query =
			$this->db
				->select('nama_masakan, gambar, isi, tanggal')
				->order_by('tanggal', 'desc')
				->get('kuliner_tang');

		if($query->num_rows() > 0) {
			return $query->result();
		}
		return false;
	}

}