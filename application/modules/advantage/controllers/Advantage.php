<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Advantage extends MY_frontend {
    public function __construct(){
        parent::__construct();
        $this->load->model("advantage_model");
        $this->load->library(['ion_auth', 'form_validation']);

        if(!$this->ion_auth->logged_in()){
            redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()){
            show_error('You must be an administrator');
        }
    }

    public function index(){
        $data["advantage"] = $this->advantage_model->getAll();
        $data["content"] = 'list';
        $this->admin($data, true);
    }

    public function add(){
        $advantage = $this->advantage_model;
        $validation = $this->form_validation;
        $validation->set_rules($advantage->rules());

        if($validation->run()){
            $advantage->save();
            $this->session->set_flashdata('success', 'Berhasil  disimpan');
        }

        $data['content'] = 'new_form';
        $this->admin($data, true);
    }

    public function edit($id = null){
        if (!isset($id)) redirect('advantage');
       
        $advantage = $this->advantage_model;
        $validation = $this->form_validation;
        $validation->set_rules($advantage->rules());

        if($validation->run()){
            $advantage->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["advantage"] = $advantage->getById($id);
        if(!$data["advantage"]) show_404();

        $data['content'] = 'edit_form';
        $this->admin($data, true);
    }

    public function delete($id=null){
        if (!isset($id)) show_404();
        
        if ($this->advantage_model->delete($id)) {
            redirect(site_url('advantage'));
        }
    }
}