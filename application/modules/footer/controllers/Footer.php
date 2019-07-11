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

    public function edit($id='1'){
        $footer = $this->footer_model;
        $validation = $this->form_validation;

        if($validation->run()){
            $footer->update();
            $footer->update->set_flashdata('success', 'Berhasil diperbaharui');
        }

        $data["footer"] = $footer->getById();
        if(!$data["footer"]) show_404();

        $data["content"] = 'edit_info';
        $this->admin($data, true);
    }
}