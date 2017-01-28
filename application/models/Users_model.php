<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");

class Users_model extends CI_Model
{

  function get_users()
  {
    $query = $this->db->get('users');
    return $query->result_array();
  }
}