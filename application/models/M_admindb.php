<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class M_admindb extends CI_Model
{
    /*USER*/
	public function get_datauser()
	{
		$query = $this->db->order_by('id','DESC')->get('users');
		return $query->result();
	}

    public function delete_datausers($id){
        $this->db->where('id', $id);
        $delete = $this->db->delete('users');
        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /*SHOES*/

    public function get_datashoes()
    {
        $query = $this->db->where('category =', "Shoes")->get('product');
        return $query->result();
    }

	public function save_datashoes($data)
	{
		$param = array(
					"ID"=>$data['id'],
					"name"=>$data['name'],
					"price"=>$data['price'],
					"summary"=>$data['summary'],
					"stock"=>$data['stock'],
                    "category"=>"Shoes",
                    "img"=>$data['img']
		);
		$insert = $this->db->insert('product', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

    public function edit_datashoes($data){
	    $table = 'product';
        $param = array(
            "ID"=>$data['id'],
            "name"=>$data['name'],
            "price"=>$data['price'],
            "summary"=>$data['summary'],
            "stock"=>$data['stock'],
            "img"=>$data['img']
        );
        $this->db->where('id', $data['id']);
        $update = $this->db->update('product', $param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function delete_datashoes($id){
        $table = 'product';
        $this->db->where('id', $id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /*STROLLER*/

    public function get_datastroller()
    {
        $query = $this->db->where('category =', "Stroller")->get('product');
        return $query->result();
    }

    public function save_datastroller($data)
    {
        $param = array(
                    "ID"=>$data['id'],
                    "name"=>$data['name'],
                    "price"=>$data['price'],
                    "summary"=>$data['summary'],
                    "stock"=>$data['stock'],
                    "category"=>"Stroller",
                    "img"=>$data['img']
        );
        $insert = $this->db->insert('product', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function edit_datastroller($data){
        $table = 'product';
        $param = array(
            "ID"=>$data['id'],
            "name"=>$data['name'],
            "price"=>$data['price'],
            "summary"=>$data['summary'],
            "stock"=>$data['stock'],
            "img"=>$data['img']
        );
        $this->db->where('id', $data['id']);
        $update = $this->db->update('product', $param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function delete_datastroller($id){
        $table = 'product';
        $this->db->where('id', $id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }

    /*CARSEAT*/
    public function get_datacarseat()
    {
        $query = $this->db->where('category =', "Carseat")->get('product');
        return $query->result();
    }

    public function save_datacarseat($data)
    {
        $param = array(
                    "ID"=>$data['id'],
                    "name"=>$data['name'],
                    "price"=>$data['price'],
                    "summary"=>$data['summary'],
                    "stock"=>$data['stock'],
                    "category"=>"Carseat",
                    "img"=>$data['img']
        );
        $insert = $this->db->insert('product', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function edit_datacarseat($data){
        $table = 'product';
        $param = array(
            "ID"=>$data['id'],
            "name"=>$data['name'],
            "price"=>$data['price'],
            "summary"=>$data['summary'],
            "stock"=>$data['stock'],
            "img"=>$data['img']
        );
        $this->db->where('id', $data['id']);
        $update = $this->db->update('product', $param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function delete_datacarseat($id){
        $table = 'product';
        $this->db->where('id', $id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /*TOYS*/
    public function get_datatoys()
    {
        $query = $this->db->where('category =', "Toys")->get('product');
        return $query->result();
    }

    public function save_datatoys($data)
    {
        $param = array(
                    "ID"=>$data['id'],
                    "name"=>$data['name'],
                    "price"=>$data['price'],
                    "summary"=>$data['summary'],
                    "stock"=>$data['stock'],
                    "category"=>"Toys",
                    "img"=>$data['img']
        );
        $insert = $this->db->insert('product', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function edit_datatoys($data){
        $table = 'product';
        $param = array(
            "ID"=>$data['id'],
            "name"=>$data['name'],
            "price"=>$data['price'],
            "summary"=>$data['summary'],
            "stock"=>$data['stock'],
            "img"=>$data['img']
        );
        $this->db->where('id', $data['id']);
        $update = $this->db->update('product', $param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function delete_datatoys($id){
        $table = 'product';
        $this->db->where('id', $id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /*CLOTHES*/
    public function get_dataclothes()
    {
        $query = $this->db->where('category =', "CLothes")->get('product');
        return $query->result();
    }

    public function save_dataclothes($data)
    {
        $param = array(
                    "ID"=>$data['id'],
                    "name"=>$data['name'],
                    "price"=>$data['price'],
                    "summary"=>$data['summary'],
                    "stock"=>$data['stock'],
                    "category"=>"Clothes",
                    "img"=>$data['img']
        );
        $insert = $this->db->insert('product', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function edit_dataclothes($data){
        $table = 'product';
        $param = array(
            "ID"=>$data['id'],
            "name"=>$data['name'],
            "price"=>$data['price'],
            "summary"=>$data['summary'],
            "stock"=>$data['stock'],
            "img"=>$data['img']
        );
        $this->db->where('id', $data['id']);
        $update = $this->db->update('product', $param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function delete_dataclothes($id){
        $table = 'product';
        $this->db->where('id', $id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

?>