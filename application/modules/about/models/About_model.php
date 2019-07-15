<?php defined('BASEPATH') OR exit('No direct script access allowed');

class About_model extends CI_Model {
    private $_table = "about";

    public $id;
    public $content;
    public $image;

    public function rules(){
        return[
            ['field' => 'content',
            'label' => 'Content',
            'rules' => 'required'],

            ['field' => 'image',
            'label' => 'Image',
            'rules' => 'required'],
        ];
    }


    public function getById(){
        return $this->db->get_where($this->_table, array('id' => 1))->row();
    }

    public function update(){

      $about = $this->input->post();
      $this->id = $about["id"];
      $this->content = $about["image"];
      
        // banner
      if (!empty($_FILES["image"]["name"])) {
          $this->image = $this->_uploadImage();
      } else {
          $this->image = $header["old_image"];
      }

      $this->db->update($this->_table, $this, array('id'=> $about['id']));
    }

    private function _uploadImage()
    {
        $uniqid = uniqid();
        $config['upload_path']          = './upload/about/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = 'about'.$uniqid;
        $config['overwrite']			      = true;
        $config['max_size']             = 5048; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
      $heaader = $this->getById($id);
      if ($header->image != "default.jpg") {
        $filename = explode(".", $header->image)[0];
        return array_map('unlink', glob(FCPATH."upload/about/$filename.*"));
      }
    }
}

?>

