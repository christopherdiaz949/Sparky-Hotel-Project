<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		if (!$this->session->userdata('akses') == 'Admin')
			redirect('Welcome');
		$this->load->model('Room_model');
		$this->load->model('Transaction_model');
	}

	public function read()
	{
		$data['trans'] = $this->Transaction_model->read();
		$data['error'] = '';
		$data['result'] = $this->db->where('status', 'Pending')
			->get('transaksi')
			->result();
		$this->load->view('admin/transaksi/pending', $data);
	}

	public function data()
	{
		$data['trans'] = $this->Transaction_model->read();
		$data['error'] = '';
		$data['result'] = $this->db->where('status', 'Confirm')
			->get('transaksi')
			->result();
		$this->load->view('admin/transaksi/confirm', $data);
	}

	public function add()
	{
		$data['kamar'] = $this->Room_model->read();
		$data['error'] = '';
		$data['result'] = $this->db->order_by('id', 'ASC')
			->get('kamar')
			->result();
		$this->load->view('admin/transaksi/create', $data);
	}

	public function edit($id)
	{
		$this->db->set('status', 'Confirm');
		$this->db->where('id', $id);
		$this->db->update('transaksi');

		redirect('Transaction/data');
	}
	
	public function create()
	{
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no = $this->input->post('no');
		$checkin_date = $this->input->post('tglin');
		$checkout_date = $this->input->post('tglout');
		$jenis = $this->input->post('jenis');
		$amount = $this->input->post('amount');
		$status = $this->input->post('status');
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'no' => $no,
			'checkin_date' => $checkin_date,
			'checkout_date' => $checkout_date,
			'jenis' => $jenis,
			'amount' => $amount,
			'status' => $status,
		);
		$this->Transaction_model->input_data($data, 'transaksi');
		$this->session->set_flashdata('msg', '<p style="color:green;">Transaction Completed!</p>');
		redirect('Transaction/data', $data);
	}
}