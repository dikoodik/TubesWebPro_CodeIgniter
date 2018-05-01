<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_C extends CI_Controller {

    //Diah Hevyka M 1301164336
    public function __construct()
    {   
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('M_admin');
        $this->load->helper('url');
    }

    //Diah Hevyka M 1301164336
    public function index()
    {
        $this->load->view('admin/login');
    }

    //Diah Hevyka M 1301164336
    public function daftar_view()
    {
        $this->load->view('admin/daftar');
    }

    //Diah Hevyka M 1301164336
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

    //Diah Hevyka M 1301164336
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

    //Diah Hevyka M 1301164336
    public function logout(){
        $this->session->sess_destroy();
        redirect('admin_C/index');
    }
}