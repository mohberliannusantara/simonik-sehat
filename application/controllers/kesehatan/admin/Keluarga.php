<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluarga extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('kesehatan/admin/template/header');
		$this->load->view('kesehatan/admin/verifikasi/index');
		$this->load->view('kesehatan/admin/template/footer');
  }

}