<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index(){

		$this->load->view('login');

		/**
		if(isset($_POST['submit'])){
			$this->_login();
		}
		 */
	}
	public function proses(){
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$user = $this->db->get_where('user',['username' => $username]); //->row_array();

		if ($user->num_rows() > 0){
			$hasil = $user->row();
			if (password_verify($password, $hasil->password)){//$user['password'])){
				$this->session->set_userdata('id', $hasil->id_user);
				$this->session->set_userdata('login', TRUE);
				//$this->session->set_userdata('login', '1');
				//$this->session->set_userdata('login', TRUE);
				//$this->session->set_userdata('username', $user['username']);
				//$this->session->set_userdata('password', $user['password']);
				echo "<script>alert('Selamat, login berhasil')</script>";
				redirect(base_url('E_Registration'));
			}
			else{
				$this->session->set_flashdata('gagal','Password salah !');
				echo "<script>alert('Maaf, password salah')</script>";
				redirect(base_url('login'));
			}
		}
		else{
			echo "<script>alert('Maaf, user tidak ada')</script>";
			redirect(base_url('login'));
		}
	}
}
