<?php
	class Site_c extends CI_Controller {


		function pages($halaman = 'home') {
			$data['judul'] = "Halaman ".$halaman;
			$data['hal'] = $halaman;
			$this->load->view('pages/template', $data);
		}

	}