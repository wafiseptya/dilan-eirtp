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
                        
            ['field' => 'telp',
            'label' => 'Telp',
            'rules' => 'required'],
            
            ['field' => 'fax',
            'label' => 'Fax',
            'rules' => 'required'],

            ['field' => 'whatsapp',
            'label' => 'Whatsapp',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'location',
            'label' => 'Location',
            'rules' => 'required'],

            ['field' => 'apps',
            'label' => 'Apps',
            'rules' => 'required'],

        ];
    }

    public function getAll(){
        return $this->get($this->_table)->result();
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
        $this->whatsapp = $footer["whataspp"];
        $this->location = $footer["location"];
        $this->apps = $footer["apps"];

        $this->db->update($this->_table, $this, array('id'=> $footer['id']));
    }
}

?>

