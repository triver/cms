<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users extends Admin_Controller
{
    public function __construct(){
        
        parent::__construct();
        
        $this->data['title'] = 'Users';
        $this->lang->load('users','swedish');
        
        
        $this->data['groups_all'] = $this->ion_auth->where('id >','1')->groups()->result_array();
       
    }
    
    public function index()
    {
      
        $users = $this->ion_auth->users()->result_array();
        
        //Filter admin
        $arr =array();
        
        foreach($users as $user)
        {
            if(!$this->ion_auth->is_admin($user['id']))
            {
               
               $arr[] = $this->_profile($user['id']); 
            }
        }
        
        $this->render('users',array('users'=>$arr));
    }
  
  public function create()
  {
    
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
        {
            redirect('admin/auth/login', 'refresh');
        }
        
        
        $message_type='info';
        $message='Alla fält är obligatoriska';
        
        if($this->input->post())
        {
            $post = $this->input->post();
            
            // validate form input
            $this->form_validation->set_rules('first_name', 'Förnamn', 'required');
            $this->form_validation->set_rules('last_name', 'Efternamn', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Lösenord', 'required|min_length[8]|max_length[20]');
            $this->form_validation->set_rules('phone', 'Telefon', 'trim');
        
            if ($this->form_validation->run() == true)
            {
                $email    = strtolower($this->input->post('email')); 
                $identity = $email;
                $password = $this->input->post('password');
        
                $additional_data = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name'  => $this->input->post('last_name'),
                    'phone'      => $this->input->post('phone')
                );
                
                $groups = $this->input->post('groups');
            }
            if ($this->form_validation->run() == true && $this->ion_auth->register($identity, $password, $email, $additional_data, $groups))
            {
                
                $message = $this->ion_auth->messages().' Remember password: '.$password;
                $message_type='success';
                
            }
            else
            {
                $message = explode('.', validation_errors())[0].'.';
                $message_type='danger';
               
            }   
        
        }
        
        $post['message_type'] = $message_type;
        $this->session->set_flashdata('message', $message);
        $this->render('users_create',$post);
    }
    
    
    public function edit($id)
    {
        if($this->input->post('update_groups'))
        {
            
            $this->ion_auth->remove_from_group(NULL,$id);
            
            if(!empty($this->input->post('groups')))
            {
                if( $this->ion_auth->add_to_group( $this->input->post('groups'), $id ) )
                {
                    
                    $this->session->set_flashdata('message', 'success' );
                }
                else {
                    
                    $this->session->set_flashdata('message', 'error');
                      
                }
            }
            else{
                $this->session->set_flashdata('message', 'No group for YOU!' );
            }
            
            
        }   
       
        $user_profile = $this->_profile($id);
        
        $this->render('users_edit', array('user_profile'=>$user_profile)  );
    }
    
   
    public function delete($id){
        
        if(!$this->ion_auth->is_admin($id))
        {
            $this->ion_auth->delete_user($id);
        }
        redirect('admin/users','refresh');
    }
    
    protected function _profile($id,$lang='swedish'){
        
        $user = $this->ion_auth->user($id)->row_array();
        $user['groups_'.$lang]  = array();
        $user['groups']  = array();
        $groups = $this->ion_auth->get_users_groups( $user['id'])->result_array();
        
        if(!empty($groups))
        {
            foreach( $groups as $group)
            {
               
                $translation = $this->lang->line($group['name']);
                $user['groups_'.$lang][] = !empty($translation) ? $translation : $group['name'];
                $user['groups'][] = $group['name'];
                
            }
        }
        
        return $user; 
    }
    
}