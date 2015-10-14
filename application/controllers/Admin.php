<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function home()
	{
		$this->load->view('header');
		$this->load->view('loggedinmenu');
		$this->load->view('admin/rightmenu');
		$this->load->view('admin/home');
		$this->load->view('footer');
	}
	
}
