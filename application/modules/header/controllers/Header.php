<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends MY_frontend
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("header_model");
        $this->load->library(['ion_auth', 'form_validation']);
        if (!$this->ion_auth->logged_in())
        {
          // redirect them to the login page
          redirect('auth/login', 'refresh');
        }
        else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
          // redirect them to the home page because they must be an administrator to view this
          show_error('You must be an administrator to view this page.');
        }
    }

    public function index()
    {
        $data["header"] = $this->header_model->getAll();
        $data["content"] = 'list';
        $this->admin($data, true);
    }

    public function add()
    {
        $header = $this->header_model;
        $validation = $this->form_validation;
        $validation->set_rules($header->rules());

        if ($validation->run()) {
            $header->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["content"] = 'new_form';
        $this->admin($data, true);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('header');
       
        $header = $this->header_model;
        $validation = $this->form_validation;
        $validation->set_rules($header->rules());

        if ($validation->run()) {
            $header->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["header"] = $header->getById($id);
        if (!$data["header"]) show_404();
        
        $data["content"] = 'edit_form';
        $this->admin($data, true);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->header_model->delete($id)) {
            redirect(site_url('header'));
        }
    }
}
