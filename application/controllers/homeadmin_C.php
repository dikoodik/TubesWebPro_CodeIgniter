<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeadmin_C extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admindb');
	}

	public function index()
	{
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

    public function viewusers(){
        $data['query'] = $this->M_admindb->get_datauser();
        $this->load->view('admin/dasboard', $data);
    }

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

    public function addshoes()
    {
        $data = $this->input->post(null,TRUE);
        $insert = $this->M_admindb->save_datashoes($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    public function viewshoes()
    {
        $data['query'] = $this->M_admindb->get_datashoes();
        $this->load->view('admin/dasboard', $data);
    }

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

    public function addstroller()
    {
        $data = $this->input->post(null,TRUE);
        $insert = $this->M_admindb->save_datastroller($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    public function viewstroller()
    {
        $data['query'] = $this->M_admindb->get_datastroller();
        $this->load->view('admin/dasboard', $data);
    }

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
    public function addcarseat()
    {
        $data = $this->input->post(null,TRUE);
        $insert = $this->M_admindb->save_datacarseat($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    public function viewcarseat()
    {
        $data['query'] = $this->M_admindb->get_datacarseat();
        $this->load->view('admin/dasboard', $data);
    }

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
    public function addtoys()
    {
        $data = $this->input->post(null,TRUE);
        $insert = $this->M_admindb->save_datatoys($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    public function viewtoys()
    {
        $data['query'] = $this->M_admindb->get_datatoys();
        $this->load->view('admin/dasboard', $data);
    }

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
    public function addclothes()
    {
        $data = $this->input->post(null,TRUE);
        $insert = $this->M_admindb->save_dataclothes($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('homeadmin_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    public function viewclothes()
    {
        $data['query'] = $this->M_admindb->get_dataclothes();
        $this->load->view('admin/dasboard', $data);
    }

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
