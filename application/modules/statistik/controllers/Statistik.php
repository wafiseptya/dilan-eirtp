<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends MY_frontend {
    public function __construct(){
        parent::__construct();
        $this->load->model("statistik_model");
        $this->load->model("statistik_jumlah_model");
        $this->load->library(['ion_auth', 'form_validation']);
    }

    public function index(){
        if(!$this->ion_auth->logged_in()){
          redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()){
          show_error('You must be an administrator');
        }
        $data["statistik"] = $this->statistik_model->getStat();
        $data["statistik_irtp"] = $this->statistik_jumlah_model->getIRTP();
        $data["statistik_pirt"] = $this->statistik_jumlah_model->getPIRT();
        $data["content"] = 'info';
        $this->admin($data, true);
    }

    public function edit($id = null){
        if(!$this->ion_auth->logged_in()){
          redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()){
          show_error('You must be an administrator');
        }
        $statistik = $this->statistik_model;
        $validation = $this->form_validation;
        $validation->set_rules($statistik->rules());

        if($validation->run()){
            $statistik->update();
            $this->session->set_flashdata('success', 'Berhasil diperbaharui');
        }

        $data["statistik"] = $statistik->getById();
        if(!$data["statistik"]) show_404();

        $data["content"] = 'edit_info';
        $this->admin($data, true);
    }

    public function addPIRT()
    {
        if(!$this->ion_auth->logged_in()){
          redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()){
          show_error('You must be an administrator');
        }
        $stat = $this->statistik_jumlah_model;
        $validation = $this->form_validation;
        $validation->set_rules($stat->rules());

        if ($validation->run()) {
            $stat->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["content"] = 'new_pirt';
        $this->admin($data, true);
    }

    public function editPIRT($id = null)
    {
        if(!$this->ion_auth->logged_in()){
          redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()){
          show_error('You must be an administrator');
        }
        if (!isset($id)) redirect('news');
       
        $stat = $this->statistik_jumlah_model;
        $validation = $this->form_validation;
        $validation->set_rules($stat->rules());

        if ($validation->run()) {
            $stat->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["stat"] = $stat->getById($id);
        if (!$data["stat"]) show_404();
        
        $data["content"] = 'edit_pirt';
        $this->admin($data, true);
    }

    public function addIRTP()
    {
        if(!$this->ion_auth->logged_in()){
          redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()){
          show_error('You must be an administrator');
        }
        $stat = $this->statistik_jumlah_model;
        $validation = $this->form_validation;
        $validation->set_rules($stat->rules());

        if ($validation->run()) {
            $stat->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["content"] = 'new_irtp';
        $this->admin($data, true);
    }

    public function editIRTP($id = null)
    {
        if(!$this->ion_auth->logged_in()){
          redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()){
          show_error('You must be an administrator');
        }
        if (!isset($id)) redirect('news');
       
        $stat = $this->statistik_jumlah_model;
        $validation = $this->form_validation;
        $validation->set_rules($stat->rules());

        if ($validation->run()) {
            $stat->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["stat"] = $stat->getById($id);
        if (!$data["stat"]) show_404();
        
        $data["content"] = 'edit_irtp';
        $this->admin($data, true);
    }
    public function delete($id=null)
    {
        if(!$this->ion_auth->logged_in()){
          redirect('auth/login', 'refresh');
        } else if(!$this->ion_auth->is_admin()){
          show_error('You must be an administrator');
        }
        if (!isset($id)) show_404();
        
        if ($this->statistik_jumlah_model->delete($id)) {
            redirect(site_url('statistik'));
        }
    }

    public function ajax_front_irtp(){
      $list = $this->statistik_jumlah_model->getStatFrontIRTP();
      $data = array();
      $row = array();
      $rowDate = array();
      foreach (array_reverse($list) as $stat) {
        $datefull = date("M-Y", strtotime($stat->date));
        $rowDate[] .= $datefull;
        $row[] += $stat->value;
      }
      $data['value'] = $row;
      $data['date'] = $rowDate;

      $output = array(
              "data" => $data,
          );
      echo json_encode($output);
    }

    public function ajax_front_pirt(){
      $list = $this->statistik_jumlah_model->getStatFrontPIRT();
      $data = array();
      $row = array();
      $rowDate = array();
      foreach (array_reverse($list) as $stat) {
        $datefull = date("M-Y", strtotime($stat->date));
        $rowDate[] .= $datefull;
        $row[] += $stat->value;
      }
      $data['value'] = $row;
      $data['date'] = $rowDate;

      $output = array(
              "data" => $data,
          );
      echo json_encode($output);
    }

}