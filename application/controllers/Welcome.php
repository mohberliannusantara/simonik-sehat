<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->session->logged_in == TRUE) {
			if ($this->session->nama_akses == 'admin' ) {
				redirect('admin/beranda','refresh');
			}else {
				redirect('beranda','refresh');
			}
		}
	}

	public function index()
	{
		$this->load->view('pages-template/header');
		$this->load->view('welcome_message');
		$this->load->view('pages-template/footer');
	}
}
