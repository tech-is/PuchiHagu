<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//コントローラーの名前をlogin
class Login extends CI_Controller {


	public function __construct()
    {   
        parent::__construct();
        $this->load->model('login_model');
        date_default_timezone_set('Asia/Tokyo');
    }

	public function index()
	{   
        $login_error ='';
        if($this->input->post('login_submit')&& $this->form_validation->run('login'){
        $login_error =$this->login_check();
        }
		$this->load->view('login_view');

	}

    public function login_check()
    {   
        $data = $this->input->post();
        $result =

    }
}


