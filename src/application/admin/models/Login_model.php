<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
    
    public function login_check($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $query = $this->db->

    }
}