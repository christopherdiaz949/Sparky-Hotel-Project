<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		if (!$this->session->userdata('akses') == 'Admin')
			redirect('Welcome');
		$this->load->model('User_model');
	}

	public function read()
	{

		$data['user'] = $this->User_model->read();
		$data['error'] = '';
		$data['result'] = $this->db->order_by('user_id', 'DESC')
			->get('user_data')
			->result();
		$this->load->view('admin/user/data', $data);
	}

	public function edit($id)
	{

		$data['detail'] = $this->db->get_where('user_data', ['user_id' => $id])->row();
		$this->load->view('admin/user/edit', $data);

	}

	public function delete($id)
	{
		$_id = $this->db->get_where('user_data', ['user_id' => $id])->row();
		$query = $this->db->delete('user_data', ['user_id' => $id]);
		if ($query) {
			unlink("images/user/" . $_id->picture);
		}
		redirect('User/read');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$_image = $this->db->get_where('user_data', ['user_id' => $id])->row();
		$config['upload_path'] = './images/user/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 0;
		$config['max_width'] = 0;
		$config['max_height'] = 0;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$data = array(
				'name' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telp_num' => $this->input->post('no'),
				'role' => $this->input->post('akses')
			);
			$query = $this->db->update('user_data', $data, array('user_id' => $id));
		} else {
			$_data = array('upload_data' => $this->upload->data());
			$data = array(
				'name' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telp_num' => $this->input->post('no'),
				'role' => $this->input->post('akses'),
				'picture' => $_data['upload_data']['file_name']
			);
			$query = $this->db->update('user_data', $data, array('user_id' => $id));
			if ($query) {
				unlink("images/user/" . $_image->picture);
			}
		}
		redirect('User/read');
	}

	public function do_upload()
	{
		$config['upload_path'] = './images/user';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 0;
		$config['max_width'] = 0;
		$config['max_height'] = 0;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/user/data', $error);
		} else {
			$_data = array('upload_data' => $this->upload->data());
			$data = array(
				'name' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telp_num' => $this->input->post('no'),
				'role' => $this->input->post('akses'),
				'picture' => $_data['upload_data']['file_name']
			);
			$query = $this->db->insert('user_data', $data);
			if ($query) {
				$this->session->set_flashdata('msg', '<p style="color:green;">User Added!</p>');
				redirect('User/read');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red;">Failed to Add User.</p>');
			}
		}
	}

}