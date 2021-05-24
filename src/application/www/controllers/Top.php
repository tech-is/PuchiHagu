<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

	public function index()
	{
		$this->load->view('view_index');
	}

	public function print()
	{
		$this->load->view('print_view');
	}
}
