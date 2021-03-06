<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        //CI_Model constructorの呼び出し
        parent::__construct();
        $this->load->model('register_model');
        date_default_timezone_set('Asia/Tokyo');
    }

    public function index()
    {    // ログインチェックを後でここに書く
        $this->load->view('register_view');
    }


}


?>