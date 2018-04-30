<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_C extends CI_Controller {


    public function __construct()
    {   
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function daftar_view()
    {
        $this->load->view('admin/daftar');
    }

    public function daftar_akun()
    {
        $this->load->model('M_admin');
        $data = $this->input->post(null,TRUE);
        $insert = $this->M_admin->daftar_akun($data);
        if($insert){
            $this->session->set_flashdata('alert', 'berhasil_daftar');
            redirect('admin_C/index');
        }else{
            echo "<script>alert('Gagal daftar!');</script>";
        }

    }

    public function cek_login()
    {
        $data = $this->input->post(null,TRUE);
        $login= $this->M_admin->login_akun($data);
        if($login){
            $newdata = array(
                'logged' => 'Sudah Login',
                'username' => $login->username,
                'level' => 'Admin'
            );
            $this->session->set_userdata($newdata);
            redirect('homeadmin_C/index');
        }else{
            $this->session->set_flashdata('info', 'gagal_login');
            redirect('admin_C/index');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('admin_C/index');
    }
}