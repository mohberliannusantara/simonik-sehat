<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kesehatan/Pegawai_model');
		$this->load->library('form_validation');

		if ($this->session->logged_in == TRUE) {
			if ($this->session->nama_akses == 'pegawai' ) {
				redirect('kesehatan/beranda','refresh');
			}
		}
	}

	public function index()
	{
		$data['pegawai'] = $this->Pegawai_model->get();

		$this->load->view('kesehatan/admin/template/header');
		$this->load->view('kesehatan/admin/pegawai/index', $data);
		$this->load->view('kesehatan/admin/template/footer');
	}

	public function create()
	{
		$this->load->view('kesehatan/admin/template/header');
		$this->load->view('kesehatan/admin/pegawai/create');
		$this->load->view('kesehatan/admin/template/footer');
	}
}
