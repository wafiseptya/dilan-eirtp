<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model
{
    private $_table = "posts";

    public $id;
    public $user_id;
    public $title;
    public $content;
    public $banner;
    public $created_at;
    public $updated_at;

    public function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'Title',
            'rules' => 'required'],

            ['field' => 'content',
            'label' => 'Content',
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
        $post = $this->input->post();
        $this->title = $post["title"];
        $this->content = $post["content"];
        $this->banner = $this->_uploadImage();
        date_default_timezone_set('Asia/Jakarta');
        $this->created_at = date('Y-m-d H:i:s');
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->title = $post["title"];
        $this->content = $post["content"];
        // banner
        if (!empty($_FILES["banner"]["name"])) {
           $this->banner = $this->_uploadImage();
        } else {
            $this->banner = $post["old_image"];
        }

        date_default_timezone_set('Asia/Jakarta');
        $this->updated_at = date('Y-m-d H:i:s');
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $uniqid = uniqid();
        $config['upload_path']          = './upload/post/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = 'posts'.$uniqid;
        $config['overwrite']			      = true;
        $config['max_size']             = 2048; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('banner')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
      $post = $this->getById($id);
      if ($post->banner != "default.jpg") {
        $filename = explode(".", $post->banner)[0];
        return array_map('unlink', glob(FCPATH."upload/post/$filename.*"));
      }
    }

}