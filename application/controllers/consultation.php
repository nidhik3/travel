<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class consultation extends CI_Controller {

	public function index()
	{
		$this->load->model('home');
		$this->load->model('Home1');
	
		// Call the method to get the doctor's profile data for the specified doctor_id
		$data['doctor'] = $this->Home1->alldata();

		$this->load->helper('url');
		$this->load->view('Header',$data);
		$this->load->view('consultation');
		$this->load->view('footer');
	}
}