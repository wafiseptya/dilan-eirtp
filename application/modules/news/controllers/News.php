<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_frontend
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("news_model");
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
        $data["news"] = $this->news_model->getAll();
        $data["content"] = 'list';
        $this->admin($data, true);
    }

    public function add()
    {
        $news = $this->news_model;
        $user = $this->ion_auth->user()->row();
        $user_name = $user->first_name;
        $validation = $this->form_validation;
        $validation->set_rules($news->rules());

        if ($validation->run()) {
            $news->save($user_name);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["category"] = $this->kategori_model->getAll();
        $data["content"] = 'new_form';
        $this->admin($data, true);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('news');
       
        $news = $this->news_model;
        $user = $this->ion_auth->user()->row();
        $user_name = $user->first_name;
        $validation = $this->form_validation;
        $validation->set_rules($news->rules());

        if ($validation->run()) {
            $news->update($user_name);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["news"] = $news->getById($id);
        if (!$data["news"]) show_404();
        $data["category"] = $this->kategori_model->getAll();

        $data["content"] = 'edit_form';
        $this->admin($data, true);
    }
    
    public function show($id = null)
    {
        if (!isset($id)) redirect('news');
       
        $news = $this->news_model;
        

        $data["news"] = $news->getById($id);
        if (!$data["news"]) show_404();
        
        $data["content"] = 'news';
        $this->view($data, true);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->news_model->delete($id)) {
            redirect(site_url('news'));
        }
    }
}
