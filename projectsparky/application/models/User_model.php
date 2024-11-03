<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

	public function read()
	{
		$query = $this->db->get('user_data');
		return $query->result();
	}

	public function read_by($id)
	{
		$this->db->where('user_id', $id);
		$query = $this->db->get('user_data');
		return $query->row();
	}
}