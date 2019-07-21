<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi_model extends CI_Model {

	public function login($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->join('akses','pegawai.id_akses = akses.id_akses');
		return $this->db->get('pegawai');
	}
}

/* End of file Autentikasi_model.php */
/* Location: ./application/models/Autentikasi_model.php */
