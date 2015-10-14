<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {

	public function home()
	{
		$this->load->view('header');
		$this->load->view('loggedinmenu');
		$this->load->view('suppliers/home');
		$this->load->view('footer');
	}
	
}
