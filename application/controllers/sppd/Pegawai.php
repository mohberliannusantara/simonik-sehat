<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pegawai_model');
		$this->load->library('form_validation');

		if ($this->session->logged_in == TRUE) {
			if ($this->session->nama_akses == 'pegawai' ) {
				redirect('beranda','refresh');
			}
		}
	}

	public function index()
	{
		$data['pegawai'] = $this->Pegawai_model->get();

		$this->load->view('template/header');
		$this->load->view('pegawai/index', $data);
		$this->load->view('template/footer');
	}
}
