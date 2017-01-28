<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Public_Controller {

	
	public function index()
	{
		$this->load->model('news_model');
		
		$data = array();
		$data['news'] = $this->news_model->get_news();
	
		$this->render('news',$data);
		
	}
	
}
