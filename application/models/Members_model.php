<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");

class Members_model extends CI_Model
 
{

  public function get_members()
  {
        $query = $this->db->order_by('last_name','asc')->get('members');
    
        return $query->result_array();
  }
   public function member($id)
  {
        $query = $this->db->where('id',$id)->get('members');
    
        return $query->row_array();
  }
  public function insert($data){
    
    $this->db->insert('members', $data);  
  }
  public function update(){
    
  }
  public function delete($id){
    
    $this->db->where('id', $id)->delete('members');
  }
}