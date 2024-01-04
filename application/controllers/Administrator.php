<?php
class Administrator extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Login');
	}

	function index()
	{
		$this->load->view('login');
	}

	function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cadmin = $this->Model_Login->cekadmin($username, $password);
		if ($cadmin->num_rows() > 0) {
			$xcadmin = $cadmin->row_array();
			$newdata = array(
				'id' => $xcadmin['id'],
				'username' => $xcadmin['username'],
				'password' => $xcadmin['password'],
				'nama_lengkap' => $xcadmin['nama_lengkap'],
				'email' => $xcadmin['email'],
				'alamat' => $xcadmin['alamat'],
				'masuk' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('Dashboard');
		} else {
			redirect('administrator/gagallogin');
		}
	}
	function gagallogin()
	{
		$url = base_url('administrator');
		echo $this->session->set_flashdata('pesan', 'username atau password anda salah !!');
		redirect($url);
	}
	function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('Administrator');
		redirect($url);
	}
}
