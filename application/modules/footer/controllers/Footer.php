<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends MY_frontend {
    public function __construct(){
        parent::__construct();
        $this->load->model("footer_model");
        $this->load->library(['ion_auth', 'form_validation']);

        if(!$this->ion_auth->logged_in()){
            redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()){
            show_error('You must be an administrator');
        }
    }

    public function index(){
        $data["footer"] = $this->footer_model->getById();
        $data["content"] = 'info';
        $this->admin($data, true);
    }

    public function edit($id = null){
        $footer = $this->footer_model;
        $validation = $this->form_validation;
        $validation->set_rules($footer->rules());

        if($validation->run()){
            $footer->update();
            $this->session->set_flashdata('success', 'Berhasil diperbaharui');
        }

        $data["footer"] = $footer->getById();
        if(!$data["footer"]) show_404();

        $data["content"] = 'edit_info';
        $this->admin($data, true);
    }
}