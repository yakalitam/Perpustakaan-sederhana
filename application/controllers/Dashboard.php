<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'email', 'session'));
		$this->load->helper(array('text', 'url', 'cookie', 'string'));
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Dashboard
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('nama') == '') {
			redirect(base_url('login'));
		}
		$data['nama'] = 'Budi Santoso';
		$data['alamat'] = 'Kartasura';
		$data['email'] = 'Budi@santoso.com';
		$data['hobi'] = ['SUKA', 'mancing', 'keributan'];

		$this->load->view('header');
		$this->load->view('dashboard', $data);
		$this->load->view('footer');
	}
}
