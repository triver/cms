<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Site extends Admin_Controller
{
  public function __construct(){
        
        parent::__construct();
        
        $this->load->model('site_info_model');
        $this->data['title'] = 'Information';
    }
 
  public function info()
  {
    if (!$this->ion_auth->logged_in() )
	{
		redirect('admin/auth/login', 'refresh');
	}
    
    //Get site info
    
    $info = $this->site_info_model->get_info();
    
    if($this->input->post())
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      
      if ($this->form_validation->run() == TRUE)
      {
          
          $post = $this->input->post();
          
          //Filter changed fields
          
          $to_update = array(); 
          
          foreach($info as $k=>$v)
          {
              if( array_key_exists( $k, $post) && $post[$k] != $info[$k])
              {
                  $to_update[$k] = $post[$k];
              }
          }
          
          //Update if nessesary
          
          if(!empty($to_update))
          {
            $result = $this->site_info_model->save($to_update);
           
            if($result)
            {
                //Update info
                $info = array_merge( $info, $result);
                
                $this->session->set_flashdata('message','Success');
            }
            else
            {
                $this->session->set_flashdata('message','Database Failed!');
            }
                
          }
          else{
            
              $this->session->set_flashdata('message','Nothing to update!');
          }
      }
      else{
          
          $this->session->set_flashdata('message','Invalid values');
      }
     
    }
    
    
    
    $this->render('site_info', $info);
  }
}