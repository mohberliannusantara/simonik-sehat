<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Autentikasi_model');

		if ($this->session->nama_akses == 'admin' ) {
			redirect('admin/beranda','refresh');
		}
		if ($this->session->nama_akses == 'pegawai' ) {
			redirect('beranda','refresh');
		}
	}

	public function index()
	{
		$this->load->view('pages-template/header');
		$this->load->view('autentikasi/index');
		$this->load->view('pages-template/footer');
	}


	public function Login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() === FALSE){
			redirect('autentikasi');
		}else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$cek = $this->Autentikasi_model->login($username,$password);

			if ($cek->num_rows() == 1) {

				$value = $cek->row();

				$userdata = array(
					'id_pegawai' => $value->id_pegawai,
					'username' => $value->username,
					'nama_pegawai' => $value->nama_pegawai,
					'nip' => $value->nip,
					'no_telp' => $value->no_telp,
					'bank' => $value->bank,
					'norek' => $value->norek,
					'id_akses' => $value->id_akses,
					'nama_akses' => $value->nama_akses,
					'logged_in' => TRUE
				);

				$this->session->set_flashdata('user_loggedin', 'You are now logged in');

				if ($userdata['nama_akses'] == 'admin') {
					$this->session->set_userdata($userdata);
					redirect('admin/beranda','refresh');
				}else {
					$this->session->set_userdata($userdata);
					redirect('beranda','refresh');
				}
			} else {
				echo "<script>alert('Informasi Akun yang Anda Masukkan Salah') </script>";
				redirect('welcome','refresh');
			}
		}
	}

	public function logout()
	{
		$userdata = array('username','logged_in');
		$this->session->unset_userdata($userdata);
		redirect('welcome','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
