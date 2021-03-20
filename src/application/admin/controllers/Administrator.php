<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//コントローラーの名前
class Administrator extends CI_Controller {
	public function __construct()
    {   
        parent::__construct();
        //ログインチェック
        if (empty($_SESSION["id"])) {
            return redirect("/login");
        }
        date_default_timezone_set('Asia/Tokyo');
    }
	public function index()
	{   
        $this->load->view('administrator_view');
    }

    public function logout()
    { 
        session_destroy();
        redirect("/login/index");
    }

}