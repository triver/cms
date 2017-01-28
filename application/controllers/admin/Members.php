<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Members extends Admin_Controller
{
    public function __construct(){
        
        parent::__construct();
        
        $this->load->model('members_model');
        $this->data['title'] = 'Users';
    }
    public function index()
    {
     
        if (!$this->ion_auth->logged_in() )
        {
        	redirect('admin/auth/login', 'refresh');
        } 
        
        
        $this->data['members'] = $this->members_model->get_members();
        $this->render('members');
    
    }
    public function create()
    {
        if (!$this->ion_auth->logged_in() )
        {
        	redirect('admin/auth/login', 'refresh');
        } 
        
        $message_type='info';
        $message='Alla fält är obligatoriska';
        $post=array();
        
        if($this->input->post())
        {
            $post = $this->input->post();
            
            // validate form input
            $this->form_validation->set_rules('first_name', 'Förnamn', 'required');
            $this->form_validation->set_rules('last_name', 'Efternamn', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('description', 'Pesentation', 'required');
            
            if(empty($_FILES['file']['name'])){// ???
                $this->form_validation->set_rules('file', 'Bild', 'required');
            }
            
            if ($this->form_validation->run() == TRUE)
            {
                $config['upload_path']          = 'assets/images';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 40;
                $config['max_width']            = 300;
                $config['max_height']           = 300;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                    $message = $this->upload->display_errors();
                    $message_type='danger';
                }
                else
                {
                    
                    $file_data = $this->upload->data();
                    
                    $data = array(
                        'first_name'=>$post['first_name'],
                        'last_name'=>$post['last_name'],
                        'email'=>$post['email'],
                        'description'=>$post['description'],
                        'image'=>$file_data['file_name']
                        );
                    
                    $this->members_model->insert($data);
                    
                    
                    $message = 'Success';
                    $message_type='success';
                    
                }
                
            }
            else
            {
                $message = explode('.', validation_errors())[0].'.';
                $message_type='danger';
            }
        }
        
        $post['message_type'] = $message_type;
        $this->session->set_flashdata('message', $message);
        $this->render('members_create',$post);
    }
    public function edit($id)
    {
        $member = $this->members_model->member($id);
        $this->render('members_create',$member);
    }
    public function delete($id)
    {
        if (!$this->ion_auth->logged_in() )
        {
        	redirect('admin/auth/login', 'refresh');
        } 
        
        $this->members_model->delete($id);
        
        redirect('admin/members','refresh');
    }
   
    
}