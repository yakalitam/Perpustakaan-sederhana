<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('modelUser');
    }

    public function index()
    {
        $cookie = get_cookie('tigaserangkai');
        if ($this->session->userdata('nama') != '') {
        } elseif ($cookie != '') {
            $sesi = $this->modelUser->get_detail_by_cookie($cookie);
            $this->session->set_userdata($sesi);
            redirect(base_url('/dashboard'));
        }
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function auth()
    {
        $email  = $this->input->post('email');
        $pwd    = md5($this->input->post('password'));
        $auth   = $this->modelUser->auth($email, $pwd);

        if ($auth == TRUE) {
            if ($this->input->post('remember-me') != '') {
                // $sesi = $this->modelUser->get_detailu($email);
                $key    = random_string('alnum', 64);
                set_cookie('tigaserangkai', $key, 3600 * 24 * 30);
                $this->modelUser->update_cookie($key, $email);
            }
            $sesi = $this->modelUser->get_detailu($email);
            $this->session->set_userdata($sesi);
            redirect(base_url('dashboard'));
        } else {
            $this->session->set_flashdata('pesan', 'Username atau password salah !');
            $sesi   = array('flag' => '1');
            $this->session->set_userdata($sesi);
            redirect(base_url('login'));
        }
    }

    public function logout()
    {
        delete_cookie('tigaserangkai');
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
