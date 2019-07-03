<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends CI_Model
{
    private $_table = "agendas";

    public $id;
    public $title;
    public $start_time;
    public $end_time;
    public $category;
    public $venue;
    public $date;
    public $created_at;
    public $updated_at;

    public function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'Title',
            'rules' => 'required'],

            ['field' => 'category',
            'label' => 'Category',
            'rules' => 'required'],

            ['field' => 'date',
            'label' => 'Date',
            'rules' => 'required'],

            ['field' => 'start_time',
            'label' => 'Start Time',
            'rules' => 'required'],

            ['field' => 'end_time',
            'label' => 'End Time',
            'rules' => 'required'],

            ['field' => 'venue',
            'label' => 'Venue',
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
        $this->db->order_by('created_at', 'ASC');
        $this->db->limit('4');

        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $agenda = $this->input->post();
        $this->title = $agenda["title"];
        $this->start_time = $agenda["start_time"];
        $this->end_time = $agenda["end_time"];
        $this->category = $agenda["category"];
        $this->venue = $agenda["venue"];
        $this->date = $agenda["date"];
        date_default_timezone_set('Asia/Jakarta');
        $this->created_at = date('Y-m-d H:i:s');
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $agenda = $this->input->post();
        $this->id = $agenda["id"];
        $this->start_time = $agenda["start_time"];
        $this->end_time = $agenda["end_time"];
        $this->category = $agenda["category"];
        $this->venue = $agenda["venue"];
        $this->date = $agenda["date"];

        date_default_timezone_set('Asia/Jakarta');
        $this->updated_at = date('Y-m-d H:i:s');
        $this->db->update($this->_table, $this, array('id' => $agenda['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

}