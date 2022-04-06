<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
    }
    public function index()
    {
        $data['nama'] = 'Budi Santoso';
        $data['alamat'] = 'Kartasura';
        $data['email'] = 'Budi@santoso.com';
        $data['hobi'] = ['SUKA', 'mancing', 'keributan'];

        $this->load->view('header');
        $this->load->view('about', $data);
        $this->load->view('footer');
    }
}
