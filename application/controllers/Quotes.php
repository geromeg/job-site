<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotes extends CI_Controller {

	public function home()
	{
		$this->load->view('header');
		$this->load->view('loggedinmenu');
		$this->load->view('quotes/home');
		$this->load->view('footer');
	}
	
}
