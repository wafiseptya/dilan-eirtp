<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{
    private $_table = "news";

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
        $news = $this->input->post();
        $this->title = $news["title"];
        $this->content = $news["content"];
        $this->banner = $this->_uploadImage();
        date_default_timezone_set('Asia/Jakarta');
        $this->created_at = date('Y-m-d H:i:s');
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $news = $this->input->post();
        $this->id = $news["id"];
        $this->title = $news["title"];
        $this->content = $news["content"];
        // banner
        if (!empty($_FILES["banner"]["name"])) {
           $this->banner = $this->_uploadImage();
        } else {
            $this->banner = $news["old_image"];
        }

        date_default_timezone_set('Asia/Jakarta');
        $this->updated_at = date('Y-m-d H:i:s');
        $this->db->update($this->_table, $this, array('id' => $news['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $uniqid = uniqid();
        $config['upload_path']          = './upload/news/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = 'news-'.$uniqid;
        $config['overwrite']			      = true;
        $config['max_size']             = 5048; // 1MB
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
      $news = $this->getById($id);
      if ($news->banner != "default.jpg") {
        $filename = explode(".", $news->banner)[0];
        return array_map('unlink', glob(FCPATH."upload/news/$filename.*"));
      }
    }

}