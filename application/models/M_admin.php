<?php
class M_admin extends CI_Model
{
    //Diah Hevyka M 1301164336
    public function daftar_akun($data)
    {
        $param = array(
            "id"=>$data['id'],
            "username"=>$data['username'],
            "email"=>$data['email'],
            "password"=>$data['password'],
            "name"=>$data['name']
        );
        $insert = $this->db->insert('admin', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    //Diah Hevyka M 1301164336
    public function login_akun($data){
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);

        $result = $this->db->get('admin');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }
}