<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller{
    public function __construct(){

        parent::__construct();
        $this->load->model("masuk_model");
        $this->load->library('form_validation');
        $this->load->model("User_model");

        if ($this->User_model->isNotLogin()) redirect(site_url('admin/Login'));
    }

    public function index(){
        $data["surat_masuk"] = $this->masuk_model->getAll(); //mengambil data dari model
        $this->load->view("admin/masuk/list", $data); //kirim data ke view
    }

    public function add(){
        $masuk = $this->masuk_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($masuk->rules()); //tetapkan rules

        if($validation->run()) {
            $masuk->save(); //apabila validasi dijalankan, simpan data ke database
            $this->session->set_flashdata('succes', 'Data Berhasil Tersimpan'); //tampilan pesan berhasil

            redirect('admin/masuk');
        }

        $this->load->view("admin/masuk/new_form"); //menampilkan form add
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/masuk'); //redirect apabila tidak ada id
        $masuk = $this->masuk_model;
        $validation = $this->form_validation;
        $validation->set_rules($masuk->rules());

        if ($validation->run()){
            $masuk->update(); //menyimpan data
            $this->session->set_flashdata('success', 'Data Berhasil Tersimpan');
            redirect('admin/masuk');
        }

        $data["masuk"] = $masuk->getById($id); //mengambil data untuk ditampilkan pada form
        if (!$data ["masuk"]) show_404(); //jika tidak ada data, tampilan 404

        $this->load->view("admin/masuk/edit_form", $data); //menampilkan form edit
    }

    public function delete($id = null){
        if (!isset($id)) show_404();

        if ($this->masuk_model->delete($id)){
            $this->session->set_flashdata('succes', 'Data Berhasil Terhapus');
            redirect(site_url('admin/masuk'));
        }
    }
    
        
    }




