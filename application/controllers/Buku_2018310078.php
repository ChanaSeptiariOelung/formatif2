<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';

use chriskacerguis\RestServer\RestController;

class Buku_2018310078 extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Buku_model_2018310078','model');
    }

    public function index_get(){
        $id = $this->get('kode_buku');
        if ($id == ''){
            $data = $this->model->liat();            
        } else {
            $data = $this->model->cari_id($id);
        }
        $this->response($data, 200);
        // echo "ini controller api";
    }

    public function tambah_post(){
        $data = [
            'kode_buku' => $this->post('kode'),
            'judul' => $this->post('judul'),
            'penulis' => $this->post('penulis'),
            'penerbit' => $this->post('penerbit'),
            'tahun_terbit' => $this->post('tahun')
        ];
        $hasil = $this->model->tambah($data);
        if ($hasil) {
            $this->response([
                'status' => 'Berhasil',
                'message' => $data
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data gagal ditambah'
            ], 502);
        }
    }

    public function update_put(){
        $id =  $this->put('kode');
        $data = [
            'judul' => $this->put('judul'),
            'penulis' => $this->put('penulis'),
            'penerbit' => $this->put('penerbit'),
            'tahun_terbit' => $this->put('tahun')
        ];
        $hasil = $this->model->ubah($id,$data);
        if ($hasil) {
            $this->response([
                'status' => 'Berhasil',
                'message' => $data
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data gagal diupdate'
            ], 502);
        }
    }

    public function hapus_delete(){
        $id =  $this->delete('kode');
        $hasil = $this->model->hapus($id);
        if($hasil){
            $this->response([
                'status' => 'Berhasil',
                'message' => 'ID '. $id . ' berhasil dihapus'
            ], 200);
        }else {
            $this->response([
                'status' => 'gagal',
                'message' => 'Data gagal dihapus'
            ], 502);
        }

    }

}



/* End of file Buku_2018310078.php */
