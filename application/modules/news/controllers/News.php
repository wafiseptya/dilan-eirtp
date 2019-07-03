<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_frontend
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("news_model");
        $this->load->library('form_validation');
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
        $validation = $this->form_validation;
        $validation->set_rules($news->rules());

        if ($validation->run()) {
            $news->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("news/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('news');
       
        $news = $this->news_model;
        $validation = $this->form_validation;
        $validation->set_rules($news->rules());

        if ($validation->run()) {
            $news->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["news"] = $news->getById($id);
        if (!$data["news"]) show_404();
        
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
