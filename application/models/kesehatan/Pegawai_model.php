<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get()
  {
    $this->db->order_by('pegawai.nama_pegawai', 'ASC');
    // $this->db->join('jenis_barang', 'barang.id_jenis_barang = jenis_barang.id_jenis_barang');
    $this->db->join('akses', 'pegawai.id_akses = akses.id_akses');
    $this->db->where('pegawai.id_akses', 2);
    $this->db->from('pegawai');

    $query = $this->db->get();
    return $query->result();
  }

}
