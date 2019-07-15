<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Footer_model extends CI_Model {
    private $_table = "footer";

    public $id;
    public $address;
    public $telp;
    public $fax;
    public $whatsapp;
    public $email;
    public $location;
    public $apps;

    public function rules(){
        return[
            ['field' => 'address',
            'label' => 'Address',
            'rules' => 'required'],
        ];
    }

    public function getFooter(){
        return $this->get($this->_table)->row();
    }

    public function getById(){
        return $this->db->get_where($this->_table, array('id' => 1))->row();
    }

    public function update(){

      $footer = $this->input->post();
      $this->id = $footer["id"];
      $this->address = $footer["address"];
      $this->telp = $footer["telp"];
      $this->fax = $footer["fax"];
      $this->email = $footer["email"];
      $this->whatsapp = $footer["whatsapp"];
      $this->location = $footer["location"];
      $this->apps = $footer["apps"];

      $this->db->update($this->_table, $this, array('id'=> $footer['id']));
    }
}

?>

