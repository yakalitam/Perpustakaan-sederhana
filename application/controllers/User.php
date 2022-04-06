<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelUser');
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['list'] = $this->modelUser->get_user();

        $this->load->view('header');
        $this->load->view('users/user', $data);
        $this->load->view('footer');
    }

    public function detail($a = null)
    {
        $data['list'] = $this->modelUser->get_detail($a);

        $this->load->view('header');
        $this->load->view('users/detail', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $this->load->view('header');
        $this->load->view('users/add');
        $this->load->view('footer');
    }

    public function insert()
    {
        $profil = $_FILES['profil']['name'];
        $config = [
            'upload_path' => "./assets/images/profil/user/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('profil');
        if ($this->modelUser->insert($this->input->post(), $profil)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }
    }

    public function edit($a)
    {
        # code...
        $data['list'] = $this->modelUser->get_detail($a);
        $this->load->view('header');
        $this->load->view('users/edit', $data);
        $this->load->view('footer');
    }

    public function update($id)
    {
        # code...
        $profil = $_FILES['profil']['name'];
        $config = [
            'upload_path' => "./assets/images/profil/user/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('profil')) {
            $this->modelUser->update_cover($profil, $id);
        }
        if ($this->modelUser->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('user'));
        }
    }

    public function delete($id)
    {
        # code...
        if ($this->modelUser->delete($id)) {
            # code...
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
            redirect(base_url('user'));
        }
    }
}
