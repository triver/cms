<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

	
	public function index()
	{
		$this->load->model('news_model');
	
		$data = array();
		
		$data['last_news'] = $this->news_model->get_last();
		$data['scripts'] = array('main.js');
		$data['styles'] = array('home.css');
	
		$this->render('home',$data);  
		
	}
	
}
