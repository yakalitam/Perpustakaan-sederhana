<?php

class modelUser extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    function get_user()
    {
        // $list = $this->db->query('SELECT * FROM users');
        return $this->db->get('users')->result();
    }

    function auth($email, $pwd)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        if ($this->db->get('users')->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function get_detail($a)
    {
        // return $this->db->get('koleksi_buku')->result();
        $this->db->where('id', $a);
        return $this->db->get('users')->row_array();
    }

    function get_detailu($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('users')->row_array();
    }

    function get_detail_by_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get('users')->row_array();
    }

    function update_cookie($cookie, $id)
    {
        $data   = [
            'cookie'    =>  $cookie
        ];
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    function insert($a, $profil)
    {
        $data = [
            'nama'      =>  $a['nama'],
            'email'     =>  $a['email'],
            'password'  =>  md5($a['password']),
            'alamat'    =>  $a['alamat'],
            'telepon'   =>  $a['telepon'],
            'profil'    =>  $profil
        ];
        return $this->db->insert('users', $data);
    }

    function update($a, $id)
    {
        # code...
        /* if ($cover == 1) {
             $data = [
                 'cover' => $a
             ];
        }else{
            $data = [
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit'],
            'kategori' => $a['kategori']
            ];
        }
        $this->db->where('id_buku', $id);
        return $this->db->update('koleksi_buku', $data);
        */

        $data = [
            'nama'      =>  $a['nama'],
            'email'     =>  $a['email'],
            'password'  =>  md5($a['password']),
            'alamat'    =>  $a['alamat'],
            'telepon'   =>  $a['telepon']
        ];
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    function update_cover($a, $id)
    {
        $data = [
            'profil' => $a
        ];
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}
