<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Room_model');
		$this->load->model('User_model');
		$this->load->model('Transaction_model');
	}
	public function index()
	{
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		if ($this->session->userdata('akses') == 'Admin') {
			$this->load->view('admin/index');
		} else {
			$data['kamar'] = $this->Room_model->read();
			$data['error'] = '';
			$data['result'] = $this->db->order_by('id', 'DESC')
				->get('kamar')
				->result();
			$data['trans'] = $this->Transaction_model->read();
			$data['error'] = '';
			$data['trans'] = $this->db->order_by('id', 'DESC')
				->get('transaksi')
				->result();
			$this->load->view('user/index', $data);
		}
	}

	public function facility()
	{
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		$data['kamar'] = $this->Room_model->read();
		$data['error'] = '';
		$data['result'] = $this->db->order_by('id', 'DESC')
			->get('kamar')
			->result();
		$data['trans'] = $this->Transaction_model->read();
		$data['error'] = '';
		$data['trans'] = $this->db->order_by('id', 'DESC')
			->get('transaksi')
			->result();
		$this->load->view('user/facility', $data);
	}

	public function meeting()
	{
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		$data['kamar'] = $this->Room_model->read();
		$data['error'] = '';
		$data['result'] = $this->db->order_by('id', 'DESC')
			->get('kamar')
			->result();
		$data['trans'] = $this->Transaction_model->read();
		$data['error'] = '';
		$data['trans'] = $this->db->order_by('id', 'DESC')
			->get('transaksi')
			->result();
		$this->load->view('user/meeting', $data);
	}

	public function wedding()
	{
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		$data['kamar'] = $this->Room_model->read();
		$data['error'] = '';
		$data['result'] = $this->db->order_by('id', 'DESC')
			->get('kamar')
			->result();
		$data['trans'] = $this->Transaction_model->read();
		$data['error'] = '';
		$data['trans'] = $this->db->order_by('id', 'DESC')
			->get('transaksi')
			->result();
		$this->load->view('user/wedding', $data);
	}

	public function contact()
	{
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		$data['kamar'] = $this->Room_model->read();
		$data['error'] = '';
		$data['result'] = $this->db->order_by('id', 'DESC')
			->get('kamar')
			->result();
		$data['trans'] = $this->Transaction_model->read();
		$data['error'] = '';
		$data['trans'] = $this->db->order_by('id', 'DESC')
			->get('transaksi')
			->result();
		$this->load->view('user/contact', $data);
	}
}