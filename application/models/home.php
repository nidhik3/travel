<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {

	
	public function insert_data($data)
	{

       $this->db->insert('appointment',$data);
	
	}

	public function insert($data)
	{
       $this->db->insert('feedback',$data);
	}
		


	public function alldata()
	 {
        
        $this->db->select('*');
        $this->db->from('appointment');
       $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();  // Return an empty array if no records found
        }
		
	}
	public function sdata($data)
	 {
        
        $this->db->select('*');
        $this->db->from('appointment');

        $query = $this->db->get()->result();
		return $query;
	
	}
}
