<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_frontend {

  
  public function __construct()
  {
      parent::__construct();
      $this->load->model("news/news_model");
      $this->load->model("header/header_model");
      $this->load->model("agenda/agenda_model");
  }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $data["posts"] = $this->news_model->getTop();
    $data["agendas"] = $this->agenda_model->getTop();
    $data["headers"] = $this->header_model->getAll();
    
		$data["content"] = 'demo_medical';
		$this->view($data, true);
	}
}
