<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model{

    public function register($data){
        $email = $data['email'];
        //ハッシュ化して暗号化して入れる
        $password = password_hash($data['password'],PASSWORD_DEFAULT);
        //失敗値はFALSE,成功したらTRUE
        $result = $this->db->insert('admins',array(
            'admins_mail' =>$email,
            'admins_pass' =>$password
        ));
        if($result === 1){
            return true;
        } else{
            return false;
        }
        // 上記を省略すると
        //     return ($this->db->insert('admins',array(
        //     'admins_mail' =>$email,
        //     'admins_pass' =>$password)) === 1)
        //     ? true : false;
    }
}
?>