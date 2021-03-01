<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//コントローラーの名前をAdmin
class Admin extends CI_Controller {


     //コンストラクト未設定
	// public function __construct()
    // {   
    //     // CI_Model constructor の呼び出し
    //     parent::__construct();
    //     $this->load->library('session');
    //     $this->load->model('Bbs_model');
    //     date_default_timezone_set('Asia/Tokyo');
    // }
	public function index()
	{   // ここにセッション書く
		$this->load->view('login_view');
	}

    public function login()
    {
       
    
    }
}


