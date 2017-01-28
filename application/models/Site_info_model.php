<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");

class Site_info_model extends CI_Model
 
{

  function get_info()
  {
      $data = array();
      
      $q = $this->db->select('key_name,key_value ')->get('site_info');
      
      foreach($q->result_array() as $item){
			  
				$data[$item['key_name']] = $item['key_value'];
			}
			
      return $data;
  }
  function save($data)
  {
   
    foreach($data as $k=>$v){
      
		  if( !$this->db->where('key_name',$k)->update('site_info', array( 'key_value'=>$v)) )
		  {
		    
		    return FALSE;
		  }
			
		}
		
    return $data;
  }
}