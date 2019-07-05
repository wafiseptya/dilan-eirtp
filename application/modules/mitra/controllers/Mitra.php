<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends MY_frontend {
    public function __construct(){
        parent::__construct();
        $this->load->model("mitra_model");
        $this->load->library(['ion_auth', 'form_validation']);

        if(!$this->ion_auth->logged_in()){
            redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()) {
            show_error('You must be an administrator');
        }
    }

    public function index(){
        $data["mitra"] = $this->mitra_model->getAll();
        $data["content"] = 'list';
        $this->admin($data, true);
    }

    public function add(){
        $mitra = $this->mitra_model;
        $validation = $this->form_validation;
        $validation->set_rules($mitra->rules());

        if($validation->run()){
            $mitra->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["content"] = 'new_form';
        $this->admin($data, true);
    }

    public function edit($id = null){
        if(!isset($id)) redirect('mitra');

        $mitra = $this->mitra_model;
        $validation = $this->form_validation;
        $validation->set_rules($mitra->rules());

        if($validation->run()){
            $mitra->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["mitra"] = $mitra->getById($id);
        if(!$data["mitra"]) show_404();

        $data["content"] = 'edit_form';
        $this->admin($data, true);
    }

    public function delete($id=null){
        if(!isset($id)) show_404();

        if($this->mitra_model->delete($id)){
            redirect(site_url('mitra'));
        }
    }
}

?>