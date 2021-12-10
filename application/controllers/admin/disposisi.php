<?php defined('BASEPATH') OR exit('No direct script access allowed');

class disposisi extends CI_Controller{
    public function __construct(){

        parent::__construct();
        $this->load->model("disposisi_model");
        $this->load->library('form_validation');
        $this->load->model("User_model");

        if ($this->User_model->isNotLogin()) redirect(site_url('admin/Login'));
    }

    public function index(){
        $data["disposisi"] = $this->disposisi_model->getAll(); //mengambil data dari model
        $this->load->view("admin/disposisi/dis_list", $data); //kirim data ke view
    }

    public function add(){
        $disposisi = $this->disposisi_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($disposisi->rules()); //tetapkan rules

        if($validation->run()) {
            $disposisi->save(); //apabila validasi dijalankan, simpan data ke database
            $this->session->set_flashdata('succes', 'Data Berhasil Tersimpan'); //tampilan pesan berhasil

            redirect('admin/disposisi');
        }

        $this->load->view("admin/disposisi/dis_form"); //menampilkan form add
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/disposisi'); //redirect apabila tidak ada id
        $disposisi = $this->disposisi_model;
        $validation = $this->form_validation;
        $validation->set_rules($disposisi->rules());

        if ($validation->run()){
            $disposisi->update(); //menyimpan data
            $this->session->set_flashdata('success', 'Data Berhasil Tersimpan');
            redirect('admin/disposisi');
        }

        $data["disposisi"] = $disposisi->getById($id); //mengambil data untuk ditampilkan pada form
        if (!$data ["disposisi"]) show_404(); //jika tidak ada data, tampilan 404

        $this->load->view("admin/disposisi/dis_edit", $data); //menampilkan form edit
    }

    public function delete($id = null){
        if (!isset($id)) show_404();

        if ($this->disposisi_model->delete($id)){
            $this->session->set_flashdata('succes', 'Data Berhasil Terhapus');
            redirect(site_url('admin/disposisi'));
        }
    }
    
        
    }




