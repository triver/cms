<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Public_Controller {

	
	public function index()
	{
		$data = array();
		$this->load->model('board_members_model');
		
		
		$data['board_members'] = $this->board_members_model->get_members();
		
		$this->render('contact',$data); 
		
	}
	
}
