<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('Home Page');
		$this->load->view('layout/footer');
	}
}
