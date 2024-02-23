<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {

	
	public function insert_data($data)
	{
       
        $this->db->insert('conect',$data);
		// redirect(current_url());
	}

	// public function getrecord()
	// {
        
    //     $this->db->select('*');
    //     $this->db->from('list');
    //     $query = $this->db->get()->result();
	// 	return $query;
	// 	// redirect(current_url());
	// }
		
	// public function listrecord()
	// {
        
    //     $this->db->select('*');
    //     $this->db->from('list');
	// 	$this->db->where('id', '3');
    //     $query = $this->db->get()->result();
	// 	return $query;
	// 	// redirect(current_url());
	// }
}
