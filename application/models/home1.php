<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home1 extends CI_Model {
	public function insert_data($data)
    {
        return $this->db->insert('profile', $data);
    }
    

	
	public function getDoctorProfile($doctor_id)
	{
		// Connect to the 'database2' database
		$this->db->db_select('database2');
		
		// Assuming the 'Profile' table has fields Dname, Expertise, Experience, and Education
		$this->db->select('Dname, Expertise, Experience, Education');
		$this->db->from('profile');
		// $this->db->where('doctor_id', 1); // Use the provided $doctor_id parameter
	
		$query = $this->db->get();
	
		if ($query->num_rows() > 0) {
			return $query->row_array(); // Use row_array() to return a single row as an associative array
		} else {
			return array(); // Return an empty array if no records found
		}
	}


    public function alldata()
    {
        // Connect to the 'database2' database
        $this->db->db_select('database2');
        
        $this->db->select('*');
        $this->db->from('profile');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array(); // Return an empty array if no records found
        }
    }

    public function sdata($data)
    {
        // Connect to the 'database2' database
        $this->db->db_select('database2');
        
        $this->db->select('*');
        $this->db->from('profile');

        $query = $this->db->get();
        return $query->result_array();
    }
}