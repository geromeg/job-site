<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function home()
	{
		$this->load->view('header');
		$this->load->view('loggedinmenu');
		$this->load->view('inventory/home');
		$this->load->view('footer');
	}
	
}
