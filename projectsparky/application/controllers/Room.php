<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		if (!$this->session->userdata('akses') == 'Admin')
			redirect('Welcome');
		$this->load->model('Room_model');
		$this->load->database();
	}

	public function read()
	{

		$data['kamar'] = $this->Room_model->read();
		$data['error'] = '';
		$data['result'] = $this->db->order_by('id', 'DESC')
			->get('kamar')
			->result();
		$this->load->view('admin/kamar/data', $data);
	}

	public function edit($id)
	{

		$data['detail'] = $this->db->get_where('kamar', ['id' => $id])->row();
		$this->load->view('admin/kamar/edit', $data);

	}

	public function delete($id)
	{
		$_id = $this->db->get_where('kamar', ['id' => $id])->row();
		$query = $this->db->delete('kamar', ['id' => $id]);
		if ($query) {
			unlink("images/kamar/" . $_id->gambar);
		}
		redirect('Room/read');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$_image = $this->db->get_where('kamar', ['id' => $id])->row();
		$config['upload_path'] = './images/kamar/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 0;
		$config['max_width'] = 0;
		$config['max_height'] = 0;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$data = array(
				'jenis' => $this->input->post('jenis'),
				'harga' => $this->input->post('harga'),
				'amount' => $this->input->post('amount')
			);
			$query = $this->db->update('kamar', $data, array('id' => $id));
		} else {
			$_data = array('upload_data' => $this->upload->data());
			$data = array(
				'jenis' => $this->input->post('jenis'),
				'harga' => $this->input->post('harga'),
				'amount' => $this->input->post('amount'),
				'gambar' => $_data['upload_data']['file_name']
			);
			$query = $this->db->update('kamar', $data, array('id' => $id));
			if ($query) {
				unlink("images/kamar/" . $_image->gambar);
			}
		}
		redirect('Room/read');
	}

	public function do_upload()
	{
		$config['upload_path'] = './images/kamar';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 0;
		$config['max_width'] = 0;
		$config['max_height'] = 0;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/kamar/data', $error);
		} else {
			$_data = array('upload_data' => $this->upload->data());
			$data = array(
				'jenis' => $this->input->post('jenis'),
				'harga' => $this->input->post('harga'),
				'amount' => $this->input->post('amount'),
				'gambar' => $_data['upload_data']['file_name']
			);
			$query = $this->db->insert('kamar', $data);
			if ($query) {
				$this->session->set_flashdata('msg', '<p style="color:green;">Successfully added a Room!</p>');
				redirect('Room/read');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red;">Failed to add a Room!</p>');
			}
		}
	}
}