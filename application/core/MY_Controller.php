<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class MY_Controller extends CI_Controller
{
  protected $data = array();
 
  
  function __construct()
  {
    parent::__construct();
  
    
  }
 
  protected function render_dir( $dir='public', $view ='home', $vars = array(), $return = FALSE )
  {
    $data = array_merge( $this->data , $vars ); 
    
    if($return)
		{
			$content  = $this->load->view($dir.'/header', $data, $return);
			$content .= $this->load->view($dir.'/'.$view, $data, $return);
			$content .= $this->load->view($dir.'/footer', $data, $return);

			return $content;
		}
		else
		{
			$this->load->view($dir.'/header', $data);
			$this->load->view($dir.'/'.$view, $data);
			$this->load->view($dir.'/footer', $data);
		}
  }
  
}

/*
/
/ PUBLIC CONTROLLER
/
*/

class Public_Controller extends MY_Controller 
{
  
  function __construct()
  {
    parent::__construct();
    
    //Get site info
    
    $this->load->model('site_info_model');
    
    $this->data['info'] = $this->site_info_model->get_info();
    
    //Get page name
    $title = $this->data['page_name'] = strtolower($this->uri->segment(1));
    
    $this->data['title'] = (!empty($title) ? ucfirst($title).' | ' : '').$this->data['info']['name'];
    
  }
  
  protected function render($view = 'home', $vars = array(), $return = FALSE)
  {
    
    $this->render_dir('public', $view, $vars, $return);
  }
  
}


/*
/
/ ADMIN CONTROLLER
/
*/

class Admin_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    
    $this->load->library('ion_auth');
    $this->lang->load('ion_auth','swedish');
    
    if (!$this->ion_auth->logged_in())
    {
       redirect('admin/auth/login', 'refresh');
    }
    
    // WE passed!
    $this->load->helper('form');
    $this->load->helper('language');
    $this->load->library('form_validation');
    $this->lang->load('form_validation','swedish');
    
    $user = $this->ion_auth->user()->row_array();
    
    $groups = array();
    
    foreach( $this->ion_auth->get_users_groups( $user['id'])->result_array() as $group)
    {
      
        $groups[] = $group['name'];
    };
    
    $user['groups'] = $groups;
    
    $user['is_admin'] = $this->ion_auth->is_admin();
    
    $this->data['user']= $user;
    
  }
  
  protected function render($view = 'dashboard', $vars = array(), $return = FALSE)
  {
    
    $this->render_dir('admin', $view, $vars, $return);
  }
}


