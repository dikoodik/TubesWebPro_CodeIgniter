<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Cart_model extends CI_Model
{

    function get_all_produk(){
        $hasil=$this->db->get('product');
        return $hasil->result();
    }
}

?>