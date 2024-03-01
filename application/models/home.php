<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {

	
	public function insert_data($data)
	{
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

       
        $this->db->insert('appointment',$data);
	
	}
		
	public function alldata()
	 {
        
        $this->db->select('*');
        $this->db->from('appointment');
        $query = $this->db->get()->result();
		return $query;
		
	}
	public function sdata($data)
	 {
        
        $this->db->select('*');
        $this->db->from('appointment');

        $query = $this->db->get()->result();
		return $query;
	
	}
}
