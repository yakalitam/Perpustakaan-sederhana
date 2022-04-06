<?php
class modelKoleksi extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    function get_koleksi()
    {
        return $this->db->get('koleksi_buku')->result();
    }

    function get_detail($a)
    {
        // return $this->db->get('koleksi_buku')->result();
        $this->db->where('id_buku', $a);
        return $this->db->get('koleksi_buku')->row_array();
    }

    function insert($a, $cover)
    {
        $data = [
            'judul' =>  $a['judul'],
            'penulis' =>  $a['penulis'],
            'penerbit' =>  $a['penerbit'],
            'kategori' =>  $a['kategori'],
            'cover' =>  $cover
        ];
        return $this->db->insert('koleksi_buku', $data);
    }

    function update($a, $id)
    {
        # code...
        /* if ($cover == 1) {
             $data = [
                 'cover' => $a
             ];
        }*/
        $data = [
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit'],
            'kategori' => $a['kategori']
        ];
        $this->db->where('id_buku', $id);
        return $this->db->update('koleksi_buku', $data);
    }
    function update_cover($a, $id)
    {
        $data = [
            'cover' => $a
        ];
        $this->db->where('id_buku', $id);
        return $this->db->update('koleksi_buku', $data);
    }

    function delete($id)
    {
        $this->db->where('id_buku', $id);
        return $this->db->delete('koleksi_buku');
    }
}
