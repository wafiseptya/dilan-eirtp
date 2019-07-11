<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_frontend {

  
  public function __construct()
  {
      parent::__construct();
      $this->load->model("news/news_model");
      $this->load->model("header/header_model");
      $this->load->model("agenda/agenda_model");
      $this->load->model("mitra/mitra_model");
      $this->load->model("advantage/advantage_model");
      $this->load->model("footer/footer_model");
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
		$data["mitra_marketplace"] = $this->mitra_model->getByCategoryMarketplace();
		$data["mitra_sertifikasi"] = $this->mitra_model->getByCategorySertifikasi();
		$data["advantages"] = $this->advantage_model->getAll();
		$data["footer"] = $this->footer_model->getById();
		
		$data["content"] = 'demo_medical';
		$this->view($data, true);
	}
	public function pojok()
	{
    $data["posts"] = $this->news_model->getTop();
    
		$data["content"] = 'pojok_dilan';
		$this->view($data, true);
	}
	public function agenda($id = null)
	{
			if (!isset($id)) redirect('agenda');
			
			$agenda = $this->agenda_model;
			
			$data["agenda"] = $agenda->getById($id);
			if (!$data["agenda"]) show_404();
			
			
			$data['content'] = 'agenda';
			$this->view($data, true);
	}
	public function news($id = null)
    {
        if (!isset($id)) redirect('news');
       
        $news = $this->news_model;
        

        $data["news"] = $news->getById($id);
        if (!$data["news"]) show_404();
        
        $data["content"] = 'news';
        $this->view($data, true);
    }
}
