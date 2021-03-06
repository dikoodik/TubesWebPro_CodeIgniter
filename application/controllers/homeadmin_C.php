<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeadmin_C extends CI_Controller {

    //Diah Hevyka M 1301164336
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admindb');
	}

    //Diah Hevyka M 1301164336
	public function index()
	{
        if ($this->session->userdata('level')!="Admin") {
            redirect('admin_C/index');
        }
        else{
            $data = array(
                'title' => 'Data Users',
                'users' => $this->M_admindb->get_datauser(),
                'shoes' => $this->M_admindb->get_datashoes(),
                'stroller' => $this->M_admindb->get_datastroller(),
                'carseat' => $this->M_admindb->get_datacarseat(),
                'toys' => $this->M_admindb->get_datatoys(),
                'clothes' => $this->M_admindb->get_dataclothes(),
            );
            $this->load->view('admin/dasboard',$data);
        }
	}

    //Diah Hevyka M 1301164336
    public function viewusers(){
        $data['query'] = $this->M_admindb->get_datauser();
        $this->load->view('admin/dasboard', $data);
    }

    //Diah Hevyka M 1301164336
    public function hapususers()
    {
        $id = $this->input->post('id');
        $hapus = $this->M_admindb->delete_datausers($id);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";

        }
    }

    /*SHOES*/
    //Riandi Kartiko 1301164300
    public function addshoes()
    {
          $data = $this->input->post(null,TRUE);
          $config['upload_path']          = './assets/img/img-product/img-shoes/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['max_size']             = 10000;
          $config['max_width']            = 1024;
          $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $insert = $this->M_admindb->save_datashoes($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    //Diah Hevyka M 1301164336
    public function viewshoes()
    {
        $data['query'] = $this->M_admindb->get_datashoes();
        $this->load->view('admin/dasboard', $data);
    }

    //Diah Hevyka M 1301164336
    public function editshoes()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->M_admindb->edit_datashoes($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";
        }
    }

    //Diah Hevyka M 1301164336
    public function hapusshoes()
    {
        $id = $this->input->post('id');
        $hapus = $this->M_admindb->delete_datashoes($id);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";
        }
    }

    /*STROLLER*/
    //Riandi Kartiko 1301164300
    public function addstroller()
    {
        $data = $this->input->post(null,TRUE);
          $config['upload_path']          = './assets/img/img-product/img-stroller/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['max_size']             = 10000;
          $config['max_width']            = 1024;
          $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $insert = $this->M_admindb->save_datastroller($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    //Diah Hevyka M 1301164336
    public function viewstroller()
    {
        $data['query'] = $this->M_admindb->get_datastroller();
        $this->load->view('admin/dasboard', $data);
    }

    //Diah Hevyka M 1301164336
    public function editstroller()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->M_admindb->edit_datastroller($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";
        }
    }

    //Diah Hevyka M 1301164336
    public function hapusstroller()
    {
        $id = $this->input->post('id');
        $hapus = $this->M_admindb->delete_datastroller($id);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";
        }
    }

    /*CARSEAT*/
    //Riandi Kartiko 1301164300
    public function addcarseat()
    {

        $data = $this->input->post(null,TRUE);
          $config['upload_path']          = './assets/img/img-product/img-shoes/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['max_size']             = 10000;
          $config['max_width']            = 1024;
          $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $insert = $this->M_admindb->save_datacarseat($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    //Diah Hevyka M 1301164336
    public function viewcarseat()
    {
        $data['query'] = $this->M_admindb->get_datacarseat();
        $this->load->view('admin/dasboard', $data);
    }

    //Diah Hevyka M 1301164336
    public function editcarseat()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->M_admindb->edit_datacarseat($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }

    //Diah Hevyka M 1301164336
    public function hapuscarseat()
    {
        $id = $this->input->post('id');
        $hapus = $this->M_admindb->delete_datacarseat($id);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";
        }
    }

    /*TOYS*/
    //Riandi Kartiko 1301164300
    public function addtoys()
    {
        $data = $this->input->post(null,TRUE);
          $config['upload_path']          = './assets/img/img-product/img-shoes/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['max_size']             = 10000;
          $config['max_width']            = 1024;
          $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $insert = $this->M_admindb->save_datatoys($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    //Diah Hevyka M 1301164336
    public function viewtoys()
    {
        $data['query'] = $this->M_admindb->get_datatoys();
        $this->load->view('admin/dasboard', $data);
    }

    //Diah Hevyka M 1301164336
    public function edittoys()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->M_admindb->edit_datatoys($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }

    //Diah Hevyka M 1301164336
    public function hapustoys()
    {
        $id = $this->input->post('id');
        $hapus = $this->M_admindb->delete_datatoys($id);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";
        }
    }

    /*CLOTHES*/
    //Riandi Kartiko 1301164300
    public function addclothes()
    {
        $data = $this->input->post(null,TRUE);
          $config['upload_path']          = './assets/img/img-product/img-shoes/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['max_size']             = 10000;
          $config['max_width']            = 1024;
          $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $insert = $this->M_admindb->save_dataclothes($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    //Diah Hevyka M 1301164336
    public function viewclothes()
    {
        $data['query'] = $this->M_admindb->get_dataclothes();
        $this->load->view('admin/dasboard', $data);
    }

    //Diah Hevyka M 1301164336
    public function editclothes()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->M_admindb->edit_dataclothes($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";
        }
    }

    //Diah Hevyka M 1301164336
    public function hapusclothes()
    {
        $id = $this->input->post('id');
        $hapus = $this->M_admindb->delete_dataclothes($id);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";
        }
    }
}
