<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");

class Board_members_model extends CI_Model
 
{

  function get_members()
  {
        $query = $this->db->get('board_members');
    
        return $query->result_array();
  }
}