<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluarga extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $this->load->view('kesehatan/template/header');
    $this->load->view('kesehatan/keluarga/index');
    $this->load->view('kesehatan/template/footer');
  }

  public function create()
  {
    $this->load->view('kesehatan/template/header');
    $this->load->view('kesehatan/keluarga/create');
    $this->load->view('kesehatan/template/footer');
  }

}
