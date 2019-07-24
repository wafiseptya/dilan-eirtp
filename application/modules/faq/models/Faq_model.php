<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_model extends CI_Model {
    private $_table = "faq";

    public $id;
    public $title;
    public $content;

    public function rules(){
        return[
            ['field' => 'title',
            'label' => 'Judul FAQ',
            'rules' => 'required'],
                        
            ['field' => 'content',
            'label' => 'Isi',
            'rules' => 'required'],
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id){
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save(){
        $faq = $this->input->post();
        $this->title = $faq["title"];
        $this->content = $faq["content"];
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $faq = $this->input->post();
        $this->id = $faq["id"];
        $this->title = $faq["title"];
        $this->content = $faq["content"];
        
        $this->db->update($this->_table, $this, array('id' => $faq['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("id" => $id));
    }

}

?>