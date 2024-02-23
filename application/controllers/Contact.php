<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('contact');
		$this->load->view('footer');
	}


}