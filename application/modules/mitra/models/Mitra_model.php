<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra_model extends CI_Model {
    private $_table = "mitra";

    public $id;
    public $name;
    public $image;
    public $category;
    public $url;
    public $created_at;
    public $updated_at;

    public function rules(){
        return[
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
                        
            ['field' => 'category',
            'label' => 'Category',
            'rules' => 'required'],
            
            ['field' => 'url',
            'label' => 'Url',
            'rules' => 'required'],
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id){
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getByCategoryMarketplace(){
        return $this->db->get_where($this->_table, array('category' => "Marketplace"))->result();
    }

    public function getByCategorySertifikasi(){
        return $this->db->get_where($this->_table, array('category' => "Sertifikasi"))->result();
    }

    public function save(){
        $mitra = $this->input->post();
        $this->name = $mitra["name"];
        $this->image = $this->_uploadImage();
        $this->category = $mitra["category"];
        $this->url = $mitra["url"];
        date_default_timezone_set('Asia/Jakarta');
        $this->created_at = date('Y-m-d H:i:s');
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $mitra = $this->input->post();
        $this->id = $mitra["id"];
        $this->name = $mitra["name"];

        if(!empty($_FILES["image"]["name"])){
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $mitra["old_image"];
        }

        $this->category = $mitra["category"];
        $this->url = $mitra["url"];

        date_default_timezone_set('Asia/Jakarta');
        $this->updated_at = date('Y-m-d H:i:s');
        $this->db->update($this->_table, $this, array('id' => $mitra['id']));
    }

    public function delete($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage(){
        $uniqid = uniqid();
        $config['upload_path']          = './upload/mitra/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = 'mitra'.$uniqid;
        $config['overwrite']			= true;
        $config['max_size']             = 1024;
        

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id){
      $mitra = $this->getById($id);
      if ($mitra->image != "default.jpg") {
        $filename = explode(".", $mitra->image)[0];
        return array_map('unlink', glob(FCPATH."upload/news/$filename.*"));
      }
    }
}

?>