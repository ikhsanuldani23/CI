<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$this->load->view('web/head');
		$this->load->view('web/slide');
		$this->load->view('web/body');
		$this->load->view('web/footer');
	}

	public function fitur()
	{
		$this->load->view('web/head');
		$this->load->view('web/body');
		$this->load->view('web/footer');
	}
}
