<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact1 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('contact1');
		$this->load->view('footer');
	}
}