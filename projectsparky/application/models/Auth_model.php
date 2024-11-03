<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{


	public function getuser($email)
	{
		$this->db->where('email', $email);
		return $this->db->get('user_data')->row();
	}

	public function register()
	{
		$data = array(
			'name' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'telp_num' => $this->input->post('telp'),
			'role' => $this->input->post('akses')
		);
		$this->db->insert('user_data', $data);
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
}
?>