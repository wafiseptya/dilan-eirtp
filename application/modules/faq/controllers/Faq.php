<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MY_frontend {
    public function __construct(){
        parent::__construct();
        $this->load->model("faq_model");
        $this->load->library(['ion_auth', 'form_validation']);

        if(!$this->ion_auth->logged_in()){
            redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()) {
            show_error('You must be an administrator');
        }
    }

    public function index(){
        $data["faq"] = $this->faq_model->getAll();
        $data["content"] = 'list';
        $this->admin($data, true);
    }

    public function add(){
        $faq = $this->faq_model;
        $validation = $this->form_validation;
        $validation->set_rules($faq->rules());

        if($validation->run()){
            $faq->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["content"] = 'new_form';
        $this->admin($data, true);
    }

    public function edit($id = null){
        if(!isset($id)) redirect('faqadmin');

        $faq = $this->faq_model;
        $validation = $this->form_validation;
        $validation->set_rules($faq->rules());

        if($validation->run()){
            $faq->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["faq"] = $faq->getById($id);
        if(!$data["faq"]) show_404();

        $data["content"] = 'edit_form';
        $this->admin($data, true);
    }

    public function delete($id=null){
        if(!isset($id)) show_404();

        if($this->faq_model->delete($id)){
            redirect(site_url('faqadmin'));
        }
    }
}

?>