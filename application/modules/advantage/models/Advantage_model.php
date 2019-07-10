<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Advantage_model extends CI_Model {
    private $_table = "advantage";

    public $id;
    public $title;
    public $description;
    public $image ;

    public function rules(){
        return [
            ['field' => 'title',
            'label' => 'Title',
            'rules' => 'required'],
            
            ['field' => 'description',
            'label' => 'Description',
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
        $advantage = $this->input->post();
        $this->title = $advantage["title"];
        $this->image = $this->_uploadImage();
        $this->description = $advantage["description"];
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $advantage = $this->input->post();
        $this->id = $advantage["id"];
        $this->title = $advantage["title"];

        $this->description = $advantage["description"];

        $this->db->update($this->_table, $this, array('id' => $advantage['id']));
    }

    public function delete($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage(){
        $uniqid = uniqid();
        $config['upload_path']          = './upload/advantage/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = 'advantage'.$uniqid;
        $config['overwrite']			= true;
        $config['max_size']             = 1024;
        

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }    


    public function _deleteImage($id){
        $advantage = $this->getById($id);
            if($advantage->image != "default.jpg"){
                $filename = explode(".", $advantage->image)[0];
                return array_map('unlink', glob(FCPATH)."upload/advantage/$filename.*");
            }
    }
}