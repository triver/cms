<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    
    
    $this->load->library('ion_auth');
    
    //Get swedish error messages
    $this->lang->load('ion_auth','swedish');
  }
 
  public function index()
  {
    
  }
 
  public function login()
  {
    $this->data['title'] = 'Login';
    $this->load->helper('form');
    
    if($this->input->post())
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('identity', 'Användarnamn', 'required');
      $this->form_validation->set_rules('password', 'Lösenord', 'required');
     
      
      if($this->form_validation->run()===TRUE)
      {
        
        if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password')))
        {
          redirect('admin', 'refresh');
        }
        else
        {
          
          $this->session->set_flashdata('message',$this->ion_auth->errors() );
          redirect('admin/auth/login', 'refresh');
        }
        
      }
      else
      {
        
        $this->session->set_flashdata('message','Ange både användarnamn och lösenord.');
        redirect('admin/auth/login', 'refresh');
      }
    }
    
  
    $this->render_dir('admin','login');
    
  }
  
  public function logout()
  {
    $this->ion_auth->logout();
    redirect('admin/auth/login', 'refresh'); 
  }
}