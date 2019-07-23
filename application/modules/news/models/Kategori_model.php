<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_table = "news_category";

    public $id;
    public $cat_title;
    public $cat_description;

    public function rules()
    {
        return [
            ['field' => 'cat_title',
            'label' => 'Title',
            'rules' => 'required'],

            ['field' => 'cat_description',
            'label' => 'Description',
            'rules' => 'required'],
        
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $category = $this->input->post();
        $this->cat_title = $category["cat_title"];
        $this->cat_description = $category["cat_description"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $category = $this->input->post();
        $this->id = $category["id"];
        $this->cat_title = $category["cat_title"];
        $this->cat_description = $category["cat_description"];
        $this->db->update($this->_table, $this, array('id' => $category['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

}