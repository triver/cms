<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends Public_Controller {

	
	public function index()
	{
		$this->load->model('members_model');
		
		$data = array();
		$data['members'] = $this->members_model->get_members();
	
		$this->render('members',$data);
		
	}
	
}
