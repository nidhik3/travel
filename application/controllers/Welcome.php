<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('home');
		$this->load->model('Home1');
	
		// Call the method to get the doctor's profile data for the specified doctor_id
		$data['doctor'] = $this->Home1->alldata();
		// echo "<pre>";
		// echo "test";
		//   print_r($data['doctor']);
		//   echo "</pre>";
		  
		// $data['all'] = $this->home->alldata();
		$this->load->helper('url');
		$this->load->view('Header',$data);
		$this->load->view('main');
		$this->load->view('footer');
	}
	
}

