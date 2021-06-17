<?php

class Mypage_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function fetch_userdata($user_id){
    return $this->db->where('users_id',$user_id)
                    ->where('users_deleted_at',null)
                    ->get('users')
                    ->row_array();
  }
}
