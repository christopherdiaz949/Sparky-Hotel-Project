<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->model('Room_model');
		$this->load->model('Transaction_model');
	}

	public function signup()
	{
		if ($this->input->post('signup')) {
			$this->Auth_model->register();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg', '<p style="color:green">Successfully Signed up!</p>');
			} else {
				$this->session->set_flashdata('msg', '< style="color:red;">Failed to Sign up, please try again</p>');
			}
			$this->load->view('login');
		}
	}
	public function login()
	{
		if ($this->session->userdata('email'))
			redirect('Welcome');
		if ($this->input->post('login')) {
			$login = $this->Auth_model->getuser($this->input->post('email'));
			if ($login != NULL) {

				$data = array(
					'email' => $login->email,
					'password' => $login->password,
					'nama' => $login->name,
					'no' => $login->telp_num,
					'akses' => $login->role,
					'gambar' => $login->picture
				);
				if ($this->input->post('password') == $login->password) {
					$this->session->set_userdata($data);
					redirect('Welcome');
				}
			}
			$this->session->set_flashdata('msg', '<p style="color:red;">Invalid Username or Password!</p>');
		}
		$this->load->view('login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}

	public function booking($id)
	{
		if (!$this->session->userdata('email'))
			redirect('Auth/login');

		$data['detail'] = $this->db->get_where('kamar', ['id' => $id])->row();

		$this->session->set_userdata('checkin_date', $this->input->post('checkin_date'));
		$this->session->set_userdata('checkout_date', $this->input->post('checkout_date'));
		$this->session->set_userdata('jenis', $this->input->post('jenis'));
		$this->session->set_userdata('amount', $this->input->post('amount'));

		$this->load->view('user/booking', $data);
	}

	public function do_booking()
	{
		if (!$this->session->userdata('email')) {
			redirect('Auth/login');
		}

		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no = $this->input->post('no');
		$checkin_date = $this->input->post('checkin_date');
		$checkout_date = $this->input->post('checkout_date');
		$jenis = $this->input->post('jenis');
		$amount = $this->input->post('amount');

		if (!$checkin_date || !$checkout_date || !$jenis || !$amount) {
			$checkin_date = $this->session->userdata('checkin_date');
			$checkout_date = $this->session->userdata('checkout_date');
			$jenis = $this->session->userdata('jenis');
			$amount = $this->session->userdata('amount');
		}

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'no' => $no,
			'checkin_date' => $checkin_date,
			'checkout_date' => $checkout_date,
			'jenis' => $jenis,
			'amount' => $amount,
		);

		$this->Auth_model->input_data($data, 'transaksi');
		$this->session->set_flashdata('msg', '<p style="color:green;">You have successfully made a booking!</p>');
		redirect('Auth/bookinfo');
	}

	public function do_contact()
	{
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		redirect('Welcome');

	}

	public function bookinfo()
	{
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		$data['trans'] = $this->db->get_where('transaksi', ['no' => $this->session->userdata('no')])->row();
		$data['kamar'] = $this->Transaction_model->getAllTrans();
		$this->load->view('user/bookinfo', $data);
	}

	public function do_payment()
	{
		if (!$this->session->userdata('email'))
			redirect('Auth/login');
		redirect('Welcome');
	}

}