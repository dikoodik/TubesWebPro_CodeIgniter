<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class m_product extends CI_Model
{

	public function get_data($category)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('Category =',$category);

		$query = $this->db->get();
		return $query->result_array();


/*		$query = $this->db->get($category);
		return $query->result();*/
	}
	    function add_to_cart(){ //fungsi Add To Cart
        $data = array(
            'id' => $this->input->post('produk_id'), 
            'name' => $this->input->post('produk_nama'), 
            'price' => $this->input->post('produk_harga'), 
            'qty' => $this->input->post('quantity'), 
        );
        $this->cart->insert($data);
        echo $this->show_cart(); //tampilkan cart setelah added
    }

}

?>