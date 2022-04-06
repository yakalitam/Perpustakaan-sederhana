<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koleksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelKoleksi');
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['koleksi_buku'] = $this->modelKoleksi->get_koleksi();

        $this->load->view('header');
        $this->load->view('koleksi/koleksi', $data);
        $this->load->view('footer');
    }

    public function detail($a = null)
    {
        $data['detail'] = $this->modelKoleksi->get_detail($a);

        $this->load->view('header');
        $this->load->view('koleksi/detail', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $this->load->view('header');
        $this->load->view('koleksi/add');
        $this->load->view('footer');
    }

    public function insert()
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->modelKoleksi->insert($this->input->post(), $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('koleksi'));
        }
    }

    public function edit($a)
    {
        # code...
        $data['detail'] = $this->modelKoleksi->get_detail($a);
        $this->load->view('header');
        $this->load->view('koleksi/edit', $data);
        $this->load->view('footer');
    }

    public function update($id)
    {
        # code...
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cover')) {
            $this->modelKoleksi->update_cover($cover, $id);
        }
        if ($this->modelKoleksi->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect('koleksi');
        }
    }

    public function delete($id)
    {
        # code...
        if ($this->modelKoleksi->delete($id)) {
            # code...
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
            redirect('/koleksi');
        }
    }
}
