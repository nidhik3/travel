<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class consultation extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('consultation');
		$this->load->view('footer');
	}
}