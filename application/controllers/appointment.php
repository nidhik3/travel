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
		$this->load->model('home');
        $data['main']= $this->home->alldata();
		// print_r($data['main']);

		// $data['doctor'] = $this->home1->getDoctorProfile();
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('appointment',$data);
		$this->load->view('footer');
	}
	 
	public function insert_data()
{
    print_r($_POST);  // Print form data for debugging purposes

    $this->load->model('home');
    $data['FirstName'] = $this->input->post('FirstName');
    $data['LastName'] = $this->input->post('LastName');
    $data['Gender'] = $this->input->post('Gender');
    $data['PhoneNo'] = $this->input->post('Phone');
    $data['Email'] = $this->input->post('Email');
    $data['Date'] = $this->input->post('AppointmentDate');
    $data['Query'] = $this->input->post('Query');
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
	// print_r($data['File']);
    $this->home->insert_data($data); 
    $this->sendMail($data); 

	 

	// echo "<img src='" . base_url('Upload/' . $data['File']) . "' height='100px' width='100px'>";

// Prepare response data
$response = array(
	'success' => true,
	'message' => 'Appointment booked successfully!'
);

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
// redirect(base_url(''));
}


public function sendMail($data)
	{
		if (empty($_POST)) {
			redirect(base_url());
		}

		// Storing google recaptcha response
		// in $recaptcha variable

		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'theodinjaipur@gmail.com';
		$config['smtp_pass'] = 'ilhphiqmihlvezxk';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not

		$this->email->initialize($config);

		$from = 'theodinjaipur@gmail.com';
		 $to = 'nidhikatkani3@gmail.com';
		// $to = 'team@intercharge.in';

		$subject = 'Subscribe mailbox';
		// $message = "Dear " . $data['FirstName'] . " " . $data['LastName'] . ",\n\n The appointment is scheduled for " . $data['Date'] . ".\nSDMH";
		unset($_POST['g-recaptcha-response']);
		$message = "User " . $data['FirstName'] . " " . $data['LastName'] . ",<br>Booked an appointment scheduled for " . $data['Date'] . "<br>SDMH<br>";

		foreach ($_POST as $key => $value) {
			$message = $message . $key . '- ' . $value . '<br>';
		}



		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		$this->email->send();
		$this->sendMail_user($data); 
		redirect(base_url(''));

	}
public function sendMail_user($data)
	{
		if (empty($_POST)) {
			redirect(base_url());
		}

		
		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'theodinjaipur@gmail.com';
		$config['smtp_pass'] = 'ilhphiqmihlvezxk';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not

		$this->email->initialize($config);

		$from = 'theodinjaipur@gmail.com';
		 $to =$data['Email'];
		// $to = 'team@intercharge.in';

		$subject = 'Subscribe mailbox';
		$message = "Dear " . $data['FirstName'] . " " . $data['LastName'] . ",<br>Thank you for booking an appointment. Your appointment is scheduled for " . $data['Date'] . ". We look forward to seeing you.<br>Best regards,<br>SDMH<br>";


		unset($_POST['g-recaptcha-response']);

		foreach ($_POST as $key => $value) {
			$message = $message . $key . '- ' . $value . '<br>';
		}



		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		$this->email->send();
		

	}

}