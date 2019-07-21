<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('sppd/admin/template/header');
		$this->load->view('sppd/admin/beranda/index');
		$this->load->view('sppd/admin/template/footer');
	}
}
