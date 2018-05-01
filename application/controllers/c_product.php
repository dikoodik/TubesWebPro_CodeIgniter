<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_product extends CI_Controller {


	public function __construct()
	{	
		parent::__construct();
		$this->load->model('m_product');
		$this->load->helper('url');

	}

	public function index()
	{
		

	}

	//Riandi Kartiko_1301164300
	public function carseat()
	{
	$data = array(
			'title' => 'Babyfirst - Carseat',
			'product' => $this->m_product->get_data('Carseat')
		);
		$this->load->view('head',$data);
		$this->load->view('v_product',$data);
		$this->load->view('footer');
	}

	//Riandi Kartiko_1301164300
	public function fashion()
	{
	$data = array(
			'title' => 'Babyfirst - Fashion',
			'product' => $this->m_product->get_data('Clothes')
		);
		$this->load->view('head',$data);
		$this->load->view('v_product',$data);
		$this->load->view('footer');
	}

	//Riandi Kartiko_1301164300
	public function shoes()
	{
	$data = array(
			'title' => 'Babyfirst -Shoes',
			'product' => $this->m_product->get_data('Shoes')
		);
		$this->load->view('head',$data);
		$this->load->view('v_product',$data);
		$this->load->view('footer');
	}

	//Riandi Kartiko_1301164300
	public function stroller()
	{
	$data = array(
			'title' => 'Babyfirst',
			'product' => $this->m_product->get_data('Stroller')
		);
		$this->load->view('head',$data);
		$this->load->view('v_product',$data);
		$this->load->view('footer');
	}
}

