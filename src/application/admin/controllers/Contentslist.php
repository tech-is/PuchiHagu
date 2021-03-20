<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//コントローラーの名前をlogin
class Contentslist extends CI_Controller {
	public function __construct()
    {   
        parent::__construct();
        if (empty($_SESSION["id"])) {
            return redirect("/login");
        }
        $this->load->model('contentslist_model');
        date_default_timezone_set('Asia/Tokyo');
    }
	public function index()
	{   
        $this->load->view('contentslist_view');
    }

    public function add()
    {
        
    }
}