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
      $this->load->model("about/about_model");
      $this->load->model("statistik/statistik_model");
      $this->load->model("statistik/statistik_jumlah_model");
      $this->load->model("news/kategori_model");
      // $this->load->model("statistik/statistik_model");
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
    $data["header_top"] = $this->header_model->getHeader();
    $data["header_main"] = $this->header_model->getMain();
    $data["header_petunjuk"] = $this->header_model->getPetunjuk();
		$data["mitra_marketplace"] = $this->mitra_model->getByCategoryMarketplace();
		$data["mitra_sertifikasi"] = $this->mitra_model->getByCategorySertifikasi();
		$data["advantages"] = $this->advantage_model->getAll();
		$data["footer"] = $this->footer_model->getById();
		$data["about"] = $this->about_model->getById();
		$data["statistik"] = $this->statistik_model->getStat();
		$data["irtp"] = $this->statistik_jumlah_model->getStatFrontIRTP();
		$data["pirt"] = $this->statistik_jumlah_model->getStatFrontPIRT();
		// $data["statistik"] = $this->statistik_model->getStat();
		
		$data["content"] = 'demo_medical';
		$this->view($data, true);
	}
	public function pojok()
	{
    $data["posts"] = $this->news_model->getSix();
    // id berita = 1
		$data["berita"] = $this->news_model->getSixBerita(1);
		$data["other"] = $this->news_model->getSixOther(1);
		$data["footer"] = $this->footer_model->getById();
    
		$data["content"] = 'pojok_dilan';
		$this->view($data, true);
	}

	public function faq()
	{
		$data["footer"] = $this->footer_model->getById();
		$data["content"] = 'faq';
		$this->view($data, true);
	}
	public function agenda($id = null)
	{
			if (!isset($id)) redirect('welcome');
			
			$agenda = $this->agenda_model;
			
			$data["agenda"] = $agenda->getById($id);
			if (!$data["agenda"]) show_404();
			$data["footer"] = $this->footer_model->getById();
			
			$data['content'] = 'agenda';
			$this->view($data, true);
	}
	public function news($id = null)
    {
        if (!isset($id)) redirect('welcome');
       
        $news = $this->news_model;
        

        $data["news"] = $news->getById($id);
		if (!$data["news"]) show_404();
		$data["footer"] = $this->footer_model->getById();
        
        $data["content"] = 'news';
        $this->view($data, true);
    }
}
