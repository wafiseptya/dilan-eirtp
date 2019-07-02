<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_frontend extends MX_Controller {
  
    public function __construct()
    {
        parent::__construct();
    }

    public function view($data)
    {
        $this->load->view("view", $data);
    }

    public function admin($data)
    {
        $this->load->view("admin", $data);
    }

}