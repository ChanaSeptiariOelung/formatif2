<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_2018310078 extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Buku_model_2018310078','model');        
    }
    public function index(){
        $this->load->view('lihat');
    }
    public function tambah(){
        $content['status'] = "Tambah";
        $this->load->view('tambah',$content);
    }
    public function edit($id){
        $content['status'] = "Edit";
        $content['data'] = array("kode_buku" => $id);
        $this->load->view('tambah',$content);
    }
    public function hapus($id){
        $this->model->hapus($id);
        redirect(base_url(),'refresh');
    }

    public function p_tambah(){
        $data = [
            'kode_buku' => $kode,
            'judul' => $judul,
            'penulis' => $pengarang,
            'penerbit' => $pengarang,
            'tahun_terbit' => $tahun
        ];
        $this->model->tambah($data);
        redirect(base_url(),'refresh');
    }
    public function p_ubah(){
        $id = [
            'kode_buku' => $kode
        ];
        $data = [
            'judul' => $judul,
            'penulis' => $pengarang,
            'penerbit' => $pengarang,
            'tahun_terbit' => $tahun
        ];
        $this->model->ubah($id,$data);
        redirect(base_url(),'refresh');
    }

}

/* End of file Buku_2018310078.php */
