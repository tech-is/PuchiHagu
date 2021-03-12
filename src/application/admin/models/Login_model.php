<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    public function login_check($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $query = $this->db->get_where('admins',array(
            'admins_mail'=>$email
        ));
        $result=$query->row_array();

        //ユーザーが存在しなかった場合falseを返す
        if($query->num_rows() !== 1){
            return false;
        }
        if(!password_verify($password,$result['admins_pass'])){
            //異なる場合はfalseを返す
            return false;
        }
        //取ってきたパスワードと照合させてtrueならlogin.phpのlogincheckコントローラーに配列を返す
        return $result;
    }
}

?>