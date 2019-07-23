<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_table = "news_category";

    public $id;
    public $title;
    public $description;

    public function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'Title',
            'rules' => 'required'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required'],
        
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $category = $this->input->post();
        $this->title = $category["title"];
        $this->description = $category["description"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $category = $this->input->post();
        $this->id = $category["id"];
        $this->title = $category["title"];
        $this->description = $category["description"];
        $this->db->update($this->_table, $this, array('id' => $category['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

}