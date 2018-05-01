<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class c_akun extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Akun');
	}
	//Indah Ayu NF_1301164004
	public function index()
	{
		if($this->session->userdata('logged') == 'Sudah Login')
		{

			$this->load->view('v_myaccount');
		}else{
			$this->load->view('v_login');
		}
	}

	//Indah Ayu NF_1301164004
	public function v_regist()
	{
		$this->load->view('v_register');
	}


	//Indah Ayu NF_1301164004
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

	//Indah Ayu NF_1301164004
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
			redirect('c_akun/index');
		} else {
			$this->session->set_flashdata('info','gagal_login');
			redirect('c_akun/index');
		}
	}

	//Riandi Kartiko_1301164300
	public function edit_dataakun(){
		if ($this->input->post('submit')) {

		      $password = $this->input->post('password');
		      $namalengkap = $this->input->post('namalengkap');
		      $email = $this->input->post('email');
		      $alamat = $this->input->post('alamat');

			 $diupdate = $this->Akun->updateAkun($this->session->userdata('username'),$namalengkap,$password,$email,$alamat);
				if($diupdate)
				{	
/*							$newdata = array(
							'logged' => 'Sudah Login',
							'username' => $this->session->userdata('username'),
							'password' => $password,
							'email' => $email,
							'name' => $namalengkap,
							'address' => $alamat,
							'img' => 'default.svg'
						);
				$this->session->set_userdata($newdata);*/
					redirect('c_akun/index');

				}else{
					$this->session->set_flashdata('info','gagal_update');
					redirect('c_akun/index');
				}
		}
    }

	public function logout() {
		$this->session->sess_destroy();
		redirect('c_akun/index');
	}
}