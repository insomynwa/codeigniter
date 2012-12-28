<?php
	class Site_c extends CI_Controller {


		function pages($halaman = 'home') {
			$data['judul'] = "Halaman ".$halaman;
			$data['hal'] = $halaman;

			if($halaman=='kuliner') {
				$this->load->model('kuliner_m'); // nembak ke model kuliner_m
				$data['konten'] = $this->kuliner_m->get_kuliner(); // ngambil data dari model
			}

			$this->load->view('pages/template', $data);
		}

	}