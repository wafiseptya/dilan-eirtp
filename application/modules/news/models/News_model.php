<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{
    private $_table = "news";

    public $id;
    public $cat_id;
    public $author;
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
        $this->db->select('news.*, news_category.cat_title, news_category.cat_description'); 
        $this->db->join('news_category', 'news_category.id = news.cat_id'); 
        return $this->db->get($this->_table)->result();
    }

    public function getTop()
    {
        $this->db->select('*');
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit('4');

        return $this->db->get($this->_table)->result();
    }

    public function getSix()
    {
        $this->db->select('*');
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit('6');

        return $this->db->get($this->_table)->result();
    }

    public function getSixBerita($id)
    {
        $this->db->select('*');
        $this->db->where('cat_id', $id);
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit('6');

        return $this->db->get($this->_table)->result();
    }

    public function getSixOther($id)
    {
        $this->db->select('*');
        $this->db->where('cat_id !=', $id);
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit('6');

        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save($user_name)
    {
        $news = $this->input->post();
        $this->author = $user_name;
        $this->title = $news["title"];
        $this->cat_id = $news["cat_id"];
        $this->content = $news["content"];
        $this->banner = $this->_uploadImage();
        date_default_timezone_set('Asia/Jakarta');
        $this->created_at = date('Y-m-d H:i:s');
        $this->db->insert($this->_table, $this);
    }

    public function update($user_name)
    {
        $news = $this->input->post();
        $id = $news["id"];
        $old = $this->db->get_where($this->_table, ["id" => $id])->row();
        $this->id = $id;
        $this->author = $user_name;
        $this->title = $news["title"];
        $this->cat_id = $news["cat_id"];
        $this->content = $news["content"];
        // banner
        if (!empty($_FILES["banner"]["name"])) {
           $this->banner = $this->_uploadImage();
        } else {
            $this->banner = $news["old_image"];
        }

        date_default_timezone_set('Asia/Jakarta');
        $this->created_at = $old->created_at;
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
        $config['allowed_types']        = 'jpg|png|jpeg|gif|svg';
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