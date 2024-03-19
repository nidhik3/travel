<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class feedback extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('feedback');
		$this->load->view('footer');
	}
	public function insert()
{
    print_r($_POST);  // Print form data for debugging purposes

    $this->load->model('home');
    $data['Name'] = $this->input->post('Name');
    $data['Profession'] = $this->input->post('Profession');
    $data['City'] = $this->input->post('City');
    $data['Feedback'] = $this->input->post('Feedback');
 

    $this->home->insert($data); 
	redirect(base_url(''));

}


}

