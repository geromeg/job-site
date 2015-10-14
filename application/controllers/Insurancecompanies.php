<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurancecompanies extends CI_Controller {

	public function home()
	{
		$this->load->view('header');
		$this->load->view('loggedinmenu');
		$this->load->view('insurancecompanies/home');
		$this->load->view('footer');
	}
	
}
