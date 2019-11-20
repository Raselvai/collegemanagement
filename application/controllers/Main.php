<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		$data[]='NewsPaper | We provide News';
		$this->load->view('include/header', $data);
		$this->load->view('home');
		$this->load->view('include/footer');
	}
}
