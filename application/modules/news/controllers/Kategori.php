<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_frontend
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kategori_model");
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
        $data["category"] = $this->kategori_model->getAll();
        $data["content"] = 'list_kategori';
        $this->admin($data, true);
    }

    public function add()
    {
        $category = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($category->rules());

        if ($validation->run()) {
            $category->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["content"] = 'new_kategori';
        $this->admin($data, true);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('kategori');
       
        $category = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($category->rules());

        if ($validation->run()) {
            $category->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["category"] = $category->getById($id);
        if (!$data["category"]) show_404();
        
        $data["content"] = 'edit_kategori';
        $this->admin($data, true);
    }
    
    public function show($id = null)
    {
        if (!isset($id)) redirect('kategori');
       
        $category = $this->kategori_model;
        

        $data["category"] = $category->getById($id);
        if (!$data["category"]) show_404();
        
        $data["content"] = 'kategori';
        $this->view($data, true);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kategori_model->delete($id)) {
            redirect(site_url('news/kategori'));
        }
    }
}
