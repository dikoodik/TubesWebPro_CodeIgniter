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

}

?>