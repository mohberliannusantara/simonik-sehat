<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->logged_in == TRUE) {
			redirect('autentikasi','refresh');
		}
		if ($this->session->nama_akses == 'admin' ) {
			redirect('admin/beranda','refresh');
		}
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('beranda/index');
		$this->load->view('template/footer');
	}
}
