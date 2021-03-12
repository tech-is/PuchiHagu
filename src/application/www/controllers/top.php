<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// コントローラーの名前を"top"に設定
class top extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('top_model');
		date_default_timezone_set('Asia/Tokyo');
	}
	
	public function index()
	{
		$this->load->view('top_view');
	}
}
