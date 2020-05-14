<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_2018310078 extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Buku_model_2018310078','model');        
    }
    public function index(){
        $content['data'] = $this->model->liat();
        $this->load->view('lihat',$content);
    }
    public function tambah(){
        $content['status'] = "Tambah";
        $this->load->view('tambah',$content);
    }
    public function edit($id){
        $cari = array("kode_buku" => $id);
        $data = $this->model->cari_id($cari);
        $content['status'] = "Edit";
        $content['data'] = $data;
        $this->load->view('tambah',$content);
    }
    public function hapus($id){
        $this->model->hapus($id);
        redirect(base_url(),'refresh');
    }

    public function p_tambah(){
        $data = [
            'kode_buku' => $this->input->post('kode'),
            'judul' => $this->input->post('judul'),
            'penulis' => $this->input->post('penulis'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun_terbit' => $this->input->post('tahun')
        ];
        $hasil = $this->model->tambah($data);
        if($hasil > 0 ){
            redirect(base_url(),'refresh');
        } else {
            echo '<script language="javascript">';
            echo 'alert("Data Gagal di Simpan")';
            echo '</script>';
        }

    }
    public function p_ubah(){
        $id = [
            'kode_buku' => $this->input->post('kode')
        ];
        $data = [
            'judul' => $this->input->post('judul'),
            'penulis' => $this->input->post('penulis'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun_terbit' => $this->input->post('tahun')
        ];
        $hasil = $this->model->ubah($id,$data);
        if($hasil > 0 ){
            redirect(base_url(),'refresh');
        } else {
            echo '<script language="javascript">';
            echo 'alert("Data Gagal di Simpan")';
            echo '</script>';
        }
    }

}

/* End of file Buku_2018310078.php */
