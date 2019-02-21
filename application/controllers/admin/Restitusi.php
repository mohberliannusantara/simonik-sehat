<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restitusi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Restitusi_model');
		$this->load->library('form_validation');

		if ($this->session->logged_in == TRUE) {
			if ($this->session->nama_akses == 'pegawai' ) {
				redirect('beranda','refresh');
			}
		}
	}

	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/restitusi/index');
		$this->load->view('admin/template/footer');
	}
}
