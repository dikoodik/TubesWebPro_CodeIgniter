<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Model 
{
	public function daftar_akun($data)
	{
		$param = array(
            "nama"=>$data['nama'],
            "username"=>$data['username'],
            "email"=>$data['email'],
            "password"=>$data['password'],
            "alamat"=>$data['alamat']
		);
		$insert = $this->db->insert('akun', $param);
		if ($insert) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function login_akun($data) {
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);

		$result = $this->db->get('akun');
		if ($result->num_rows()==1) {
			return $result->row(0);
		}else{
			return false;
		}
	}

}