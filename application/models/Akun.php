<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Model 
{
	public function daftar_akun($data)
	{
		$param = array(
            "name"=>$data['nama'],
            "username"=>$data['username'],
            "email"=>$data['email'],
            "password"=>$data['password'],
            "address"=>$data['alamat'],
            "image" => 'default.svg'
		);
		$insert = $this->db->insert('users', $param);
		if ($insert) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function login_akun($data) {
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);

		$result = $this->db->get('users');
		if ($result->num_rows()==1) {
			return $result->row(0);
		}else{
			return false;
		}
	}

	public function getAkun($username){

		$query = $this->db->order_by('id','DESC')->get('users');

/*		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username =',$username);
		$query = $this->db->get();
		return $query->result();*/

/*		$query = $this->db->get('users', array('username' => $username));*/
/*
		return $query->result();*/
	}

}