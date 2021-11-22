<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function index()
	{
		$this->load->view('register');
	}

	public function proses(){
		$query = $this->db->query('SELECT * FROM user');
		$jumlah_data = $query->num_rows();
		$i = $jumlah_data + 1;
		$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
		//echo $password_hash;

		$data = [
			'id_user' => $i,
			'username' => $_POST['username'],
			'password' => $password_hash,
		];

		$this->db->insert('user', $data);
		echo "<script>alert('Selamat, anda berhasil membuat akun');</script>";
		redirect(base_url('login'));
	}
}
