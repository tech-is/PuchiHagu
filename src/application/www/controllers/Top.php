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

	public function print_hiragana()
	{
		$this->load->view('hiragana');
	}

	public function print_suzi()
	{
		$this->load->view('suzi');
	}

	public function print_unpitu()
	{
		$this->load->view('unpitu');
	}

	public function print_tentunagi()
	{
		$this->load->view('tentunagi');
	}
}
