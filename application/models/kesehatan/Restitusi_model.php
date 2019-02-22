<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restitusi_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get()
  {
    $this->db->join('pegawai', 'restitusi.id_pegawai = pegawai.id_pegawai');
    $this->db->from('restitusi');

    $query = $this->db->get();
    return $query->result();
  }

}
