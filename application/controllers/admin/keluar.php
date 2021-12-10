<?php defined('BASEPATH') OR exit('No direct script access allowed');

class keluar extends CI_Controller{
    public function __construct(){

        parent::__construct();
        $this->load->model("keluar_model");
        $this->load->library('form_validation');
        $this->load->model("User_model");

        if ($this->User_model->isNotLogin()) redirect(site_url('admin/Login'));

    }

    public function index(){
        $data["surat_keluar"] = $this->keluar_model->getAll();
        $this->load->view("admin/keluar/list", $data);
    }

    public function add(){
        $keluar = $this->keluar_model;
        $validation = $this->form_validation;
        $validation->set_rules($keluar->rules());

        if($validation->run()) {
            $keluar->save(); //apabila validasi dijalankan, simpan data ke database
            $this->session->set_flashdata('succes', 'Data Berhasil Tersimpan'); //tampilan pesan berhasil

            redirect('admin/keluar');
        }

        $this->load->view("admin/keluar/new_form"); //menampilkan form add
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/keluar'); //redirect apabila tidak ada id
        $keluar = $this->keluar_model;
        $validation = $this->form_validation;
        $validation->set_rules($keluar->rules());

        if ($validation->run()){
            $keluar->update(); //menyimpan data
            $this->session->set_flashdata('success', 'Data Berhasil Tersimpan');
            redirect('admin/keluar');
        }

        $data["keluar"] = $keluar->getById($id); //mengambil data untuk ditampilkan pada form
        if (!$data ["keluar"]) show_404(); //jika tidak ada data, tampilan 404

        $this->load->view("admin/keluar/editform", $data); //menampilkan form edit
    }

    public function delete($id = null){
        if (!isset($id)) show_404();

        if ($this->keluar_model->delete($id)){
            $this->session->set_flashdata('succes', 'Data Berhasil Terhapus');
            redirect(site_url('admin/masuk'));
        }
    }
    
        
    }

    
        
    
