<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function index()
	{
		$this->load->view('sppd/admin/template/header');
		$this->load->view('sppd/admin/verifikasi/index');
		$this->load->view('sppd/admin/template/footer');
	}
}
