<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Header_model extends CI_Model
{
    private $_table = "headers";

    public $id;
    public $description;
    public $image;
    public $created_at;
    public $updated_at;

    public function rules()
    {
        return [
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required'],        
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getTop()
    {
        $this->db->select('*');
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit('4');

        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $header = $this->input->post();
        $this->description = $header["description"];
        $this->category = $this->$header["category"];
        $this->image = $this->_uploadImage();
        date_default_timezone_set('Asia/Jakarta');
        $this->created_at = date('Y-m-d H:i:s');
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $header = $this->input->post();
        $this->id = $header["id"];
        $this->description = $header["description"];
        
        // banner
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $header["old_image"];
        }

        date_default_timezone_set('Asia/Jakarta');
        $this->updated_at = date('Y-m-d H:i:s');
        $this->db->update($this->_table, $this, array('id' => $header['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $uniqid = uniqid();
        $config['upload_path']          = './upload/header/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = 'header'.$uniqid;
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
        return array_map('unlink', glob(FCPATH."upload/header/$filename.*"));
      }
    }

}