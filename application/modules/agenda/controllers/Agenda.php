<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends MY_frontend
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("agenda_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["agenda"] = $this->agenda_model->getAll();
        $data["content"] = 'list';
        $this->admin($data, true);
    }

    public function add()
    {
        $agenda = $this->agenda_model;
        $validation = $this->form_validation;
        $validation->set_rules($agenda->rules());

        if ($validation->run()) {
            $agenda->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data['content'] = 'new_form';
        $this->admin($data, true);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('agenda');
       
        $agenda = $this->agenda_model;
        $validation = $this->form_validation;
        $validation->set_rules($agenda->rules());

        if ($validation->run()) {
            $agenda->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["agenda"] = $agenda->getById($id);
        if (!$data["agenda"]) show_404();
        
        
        $data['content'] = 'edit_form';
        $this->admin($data, true);
    }

    public function show($id = null)
    {
        if (!isset($id)) redirect('agenda');
       
        $agenda = $this->agenda_model;
        
        $data["agenda"] = $agenda->getById($id);
        if (!$data["agenda"]) show_404();
        
        
        $data['content'] = 'agenda';
        $this->view($data, true);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->agenda_model->delete($id)) {
            redirect(site_url('agenda'));
        }
    }
}
