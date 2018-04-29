<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{	
		parent::__construct();
		$this->load->model('web');
		$this->load->helper('url');
	}

	public function index()
	{
		$data = array(
			'title' => 'Babyfirst',
			/*'mahasiswa' => $this->web->get_data()*/
		);
		$this->load->view('head',$data);
		$this->load->view('home');
		$this->load->view('aboutus');
		$this->load->view('footer');

	}

	public function add()
	{

	}
}
