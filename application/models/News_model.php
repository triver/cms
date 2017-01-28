<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");

class News_model extends CI_Model
 
{

  function get_news()
  {
      $query = $this->db->get('news');
    
      return $query->result_array();
  }
  function get_last()
  {
      $query = $this->db->order_by('id','desc')->limit(1)->get('news');
      
      return $query->row_array();
  }
}