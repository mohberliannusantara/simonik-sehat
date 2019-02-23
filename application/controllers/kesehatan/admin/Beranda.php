<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('kesehatan/admin/template/header');
		$this->load->view('kesehatan/admin/beranda/index');
		$this->load->view('kesehatan/admin/template/footer');
	}
}
