<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class appointment extends CI_Controller {

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
		$this->load->view('appointment');
		$this->load->view('footer');
	}
	 
	public function insert_data()
{
    print_r($_POST);  // Print form data for debugging purposes

    $this->load->model('home');
    $data['FirstName'] = $this->input->post('fname');
    $data['LastName'] = $this->input->post('lname');
    $data['Gender'] = $this->input->post('gender');
    $data['PhoneNo'] = $this->input->post('phone');
    $data['Email'] = $this->input->post('email');
    $data['Date'] = $this->input->post('appointmentDate');
    $data['Query'] = $this->input->post('msg');
//    print_r($_FILES['img']);
	// die();
    // Handle file upload
    if (!empty($_FILES['img']['name'])) {
        $config['upload_path'] = 'Upload';  // Change this to the actual path on your server
        $config['allowed_types'] = 'gif|jpg|png|pdf';  // Specify allowed file types
        $config['max_size'] = 2048;  // Specify max file size in KB
	
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img')) {
            $data['File'] = $this->upload->data('file_name');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);  // Print any upload errors for debugging
        }
    } else {
        $data['File'] = '';  // Set a default value if no file is uploaded
    }
	print_r($data['File']);
    $this->home->insert_data($data);

	echo "<img src='" . base_url('Upload/' . $data['File']) . "' height='100px' width='100px'>";

}
}