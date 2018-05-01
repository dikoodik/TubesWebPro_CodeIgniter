<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{	
		parent::__construct();
		$this->load->model('web');
		$this->load->helper('url');
	}

	//Indah Ayu NF_1301164004
	public function index()
	{
		$data = array(
			'title' => 'Babyfirst',
		);
		$this->load->view('head',$data);
		$this->load->view('home');
		$this->load->view('aboutus');
		$this->load->view('footer');

	}

	
}
