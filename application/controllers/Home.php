<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function profile() {

		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}
}
