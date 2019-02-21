<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {
	
	public function index()
	{
		$this->load->view('template/admin/header');
		$this->load->view('verifikasi/admin/index');
		$this->load->view('template/admin/footer');
	}
}
