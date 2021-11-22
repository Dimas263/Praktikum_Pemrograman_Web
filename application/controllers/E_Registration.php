<?php
defined('BASEPATH') or exit('No direct script access allowed');

class E_Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		if(!empty($this->session->userdata('login') == FALSE)){
			// alert peringatan bahwa harus login
			echo "<script>alert('Maaf, Anda Belum login, silahkan login terlebih dahulu !');</script>";
			$this->session->set_flashdata('failed','Anda Belum login, silahkan login terlebih dahulu !');
			redirect(base_url('login'));
		}
        $this->load->model('Modeldata');
    }

    public function index()
    {
        $this->load->view('bagian/header');
        $this->load->view('home');
        $this->load->view('bagian/footer');
    }

    public function addData()
    {
        $this->load->model('Modeldata');
        $this->Modeldata->addData();
        redirect('E_Registration/data_mahasiswa');
    }

    public function data_mahasiswa()
    {
        $data['mahasiswa'] = $this->Modeldata->getdata();
        $this->load->view('bagian/header');
        $this->load->view('data_mahasiswa', $data);
		$this->load->view('bagian/footer');
    }

    public function editData()
    {
        $this->Modeldata->editData();
        redirect('E_Registration/data_mahasiswa');
    }
	public function deleteData()
	{
		$id = $_GET['id'];
		$this->Modeldata->deleteData($id);
		redirect('E_Registration/data_mahasiswa');
	}
}
