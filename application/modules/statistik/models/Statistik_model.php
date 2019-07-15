<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik_model extends CI_Model {
    private $_table = "statistik";

    public $id;
    public $value;
    public $year;

    public function rules(){
        return[
            ['field' => 'value',
            'label' => 'Value',
            'rules' => 'required'],

            ['field' => 'year',
            'label' => 'year',
            'rules' => 'required'],
        ];
    }


    public function getStat(){
        $this->db->select('*');
        $this->db->order_by('id', 'ASC');
        $this->db->limit('3');

        return $this->db->get($this->_table)->result();
    }

    public function update(){

      $statistik = $this->input->post();
      $this->id = $statistik["id"];
      $this->value = $statistik["value"];
      $this->year = $statistik["year"];
      

      $this->db->update($this->_table, $this, array('id'=> $statistik['id']));
    }
}

?>

