<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class c_akun extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Akun');
	}

	public function index()
	{
		if($this->session->userdata('logged') == 'Sudah Login')
		{
			$this->load->view('v_myaccount');
		}else{
			$this->load->view('v_login');
		}
	}

	public function v_regist()
	{
		$this->load->view('v_register');
	}

	public function daftar_akun()
	{
		$this->load->model('Akun');
		$data = $this->input->post(null, TRUE);
		$insert = $this->Akun->daftar_akun($data);
		if ($insert) {
			$this->session->set_flashdata('alert','berhasil_daftar');
			redirect('c_akun/index');
		} else {
			echo "<script>alert('daftar_gagal');</script>";
		}
	}

	public function cek_login()
	{
		$data = $this->input->post(null, TRUE);
		$login = $this->Akun->login_akun($data);
		if($login) {

			$newdata = array(
				'logged' => 'Sudah Login',
				'username' => $login->username,
				'password' => $login->password,
				'email' => $login->email,
				'name' => $login->name,
				'address' => $login->address,
				'img' => $login->image
			);
			$this->session->set_userdata($newdata);
			$this->load->view('v_myaccount');
		} else {
			$this->session->set_flashdata('info','gagal_login');
			redirect('c_akun/index');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('c_akun/index');
	}
}