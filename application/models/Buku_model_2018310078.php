<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model_2018310078 extends CI_Model {

    public function liat(){
        $data = $this->db->get('buku_2018310078');
        return $data->result_array();
    }
    public function tambah($data){
        $this->db->insert('buku_2018310078', $data);
        return $this->db->affected_rows();
    }
    public function hapus($id){
        $this->db->where(array('kode_buku' => $id));
        $this->db->delete('buku_2018310078');
        return $this->db->affected_rows();
    }

    public function cari_id($id){
        $cari = $this->db->get_where('buku_2018310078', $id);
        return $cari->result_array();
    }
    public function ubah($id,$data){
        $this->db->where('kode_buku', $id);
        $this->db->update('buku_2018310078', $data);
        return $this->db->affected_rows();
    }

}

/* End of file Buku_model_2018310078.php */
