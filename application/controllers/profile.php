
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function index($id)
    {
        $this->load->helper('url');
        $this->load->model('Home1');
        
        $data['doctor1'] = $this->Home1->getDoctorProfile($id);
        $data['doctor'] = $this->Home1->alldata();
	// echo "<pre>";
	// 	echo "test";
	// 	  print_r($data['doctor']);
	// 	  echo "</pre>";
          $this->load->view('Header',$data);
        $this->load->view('profile', $data);
        $this->load->view('footer');
    }

    public function profileData($id)
    {
		$this->load->helper('url');
        $this->load->model('Home1');
        
        $data['doctor1'] = $this->Home1->getDoctorProfile($id);
        $data['doctor'] = $this->Home1->alldata();
	// echo "<pre>";
	// 	echo "test";
	// 	  print_r($data['doctor']);
	// 	  echo "</pre>";
          $this->load->view('Header',$data);
        $this->load->view('profile', $data);
        $this->load->view('footer');
    }
}