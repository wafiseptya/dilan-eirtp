<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik_jumlah_model extends CI_Model {
    private $_table = "statistik_jumlah";

    public $id;
    public $value;
    public $date;
    public $category;

    public function rules(){
        return[
            ['field' => 'value',
            'label' => 'Value',
            'rules' => 'required'],

        ];
    }

    public function getPIRT(){
        $this->db->select('*');
        $this->db->where('category', '1');
        $this->db->order_by('date', 'DESC');

        return $this->db->get($this->_table)->result();
    }

    public function getIRTP(){
        $this->db->select('*');
        $this->db->where('category', '2');
        $this->db->order_by('date', 'DESC');

        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getStatFrontPIRT(){
        $this->db->select('*');
        $this->db->where('category', '1');
        $this->db->order_by('date', 'DESC');
        $this->db->limit('5');

        return $this->db->get($this->_table)->result();
    }
    public function getStatFrontIRTP(){
        $this->db->select('*');
        $this->db->where('category', '2');
        $this->db->order_by('date', 'DESC');
        $this->db->limit('5');

        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $stat = $this->input->post();
        $datefull = $stat["date"]."-00";
        $this->date = $datefull;
        $this->value = $stat["value"];
        $this->category = $stat["category"];

        $this->db->insert($this->_table, $this);
    }

    public function update(){

      $stat = $this->input->post();
      $this->id = $stat["id"];
      $this->category = $stat["category"];
      $datefull = $stat["date"]."-00";
      $this->date = $datefull;
      $this->value = $stat["value"];
      
      $this->db->update($this->_table, $this, array('id'=> $stat['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

}

?>

