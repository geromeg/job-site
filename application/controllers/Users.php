<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function login() {
		$this->load->view('header');
		$this->load->view('loggedinmenu');
		$this->load->view('login');
		$this->load->view('footer');
		
	}
}
