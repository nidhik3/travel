<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class send_email extends CI_Controller {

public function index(){

	
	if (empty($_POST)) {
		redirect(base_url());
	}
 
	// Storing google recaptcha response
	// in $recaptcha variable

   $this->load->library('email');

	$config['protocol']    = 'smtp';
	$config['smtp_host']    = 'ssl://smtp.gmail.com';
	$config['smtp_port']    = '465';
	$config['smtp_timeout'] = '7';
	$config['smtp_user']    = 'theodinjaipur@gmail.com';
	$config['smtp_pass']    = 'yjehyfcyrtqvbpsq';
	$config['charset']    = 'utf-8';
	$config['newline']    = "\r\n";
	$config['mailtype'] = 'html'; // or html
	$config['validation'] = TRUE; // bool whether to validate email or not

	$this->email->initialize($config);
	
	$from = 'theodinjaipur@gmail.com';
	$to = 'team@intercharge.in';
//    $to = 'purplepeoplelabsquery@gmail.com';


	$message = 'Hello Team, <br /> You have a contact request on ChargeSol Portal. <br />
	<table>
  <tr>
    <th style="width:20%;">Heading</th>
    <th style="width:70%;">text</th>
    
  </tr>
  <tr>
    <td></td>
    <td></td>
   
  </tr>
  
</table>
	
	
	';
	unset($_POST['g-recaptcha-response']);

	


	$this->email->set_newline("\r\n");
	$this->email->from($from);
	$this->email->to($to);
	$this->email->subject('New Contact Message');
	$this->email->message($message);
	print_r($message);
	die;
	$this->email->send();
}

}