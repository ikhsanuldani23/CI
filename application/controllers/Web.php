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

	public function home()
	{
		$this->load->view('web/head');
		$this->load->view('web/slide');
		$this->load->view('web/body');
		$this->load->view('web/footer');
	}

	public function aboutt()
	{
		$this->load->view('web/head');
		$this->load->view('web/about');
		$this->load->view('web/footer');
	}

	public function kontak()
	{
		$this->load->view('web/head');
		$this->load->view('web/contact');
		$this->load->view('web/footer');
	}

	public function kartu()
	{
		$this->load->view('web/head');
		$this->load->view('web/card');
		$this->load->view('web/footer');
	}

	public function kartu1()
	{
		$this->load->view('web/head');
		$this->load->view('web/card1');
		$this->load->view('web/footer');
	}

	public function kartu2()
	{
		$this->load->view('web/head');
		$this->load->view('web/card2');
		$this->load->view('web/footer');
	}
}
