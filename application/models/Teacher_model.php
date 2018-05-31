<?php 
	class Teacher_model extends CI_Model{
		public function __Construct(){
			$this->load->database();
	}

	public function get_regestered(){
			
			$this->db->order_by('id');
			$query = $this->db->get('registered');
			return $query->result_array();
		}
	public function register($data){
			//User data array
			
			return $this->db->insert('teachers', $data);
			
		}
	public function attendance(){
		
		}

	}