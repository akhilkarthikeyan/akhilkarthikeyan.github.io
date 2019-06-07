<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regmodel extends CI_Model 
{

	function view()
	{
		$query=$this->db->get('products');
		return $query->result();
	}
	function select($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('products');
		return $query->row();
	}
	function search($id)
	{
		$this->db->where("name LIKE '%$id%'");
		$query=$this->db->get('products');
		return $query->result();
	}
}