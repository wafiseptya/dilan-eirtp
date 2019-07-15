<?php defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_frontend {
    public function __construct(){
        parent::__construct();
        $this->load->model("about_model");
        $this->load->library(['ion_auth', 'form_validation']);

        if(!$this->ion_auth->logged_in()){
            redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()){
            show_error('You must be an administrator');
        }
    }

    public function index(){
        $data["about"] = $this->about_model->getById();
        $data["content"] = 'info';
        $this->admin($data, true);
    }

    public function edit($id = null){
        $about = $this->about_model;
        $validation = $this->form_validation;
        $validation->set_rules($about->rules());

        if($validation->run()){
            $about->update();
            $this->session->set_flashdata('success', 'Berhasil diperbaharui');
        }

        $data["about"] = $about->getById();
        if(!$data["about"]) show_404();

        $data["content"] = 'edit_info';
        $this->admin($data, true);
    }
}