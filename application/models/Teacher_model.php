<?php 
	class Teacher_model extends CI_Model{
		public function __Construct(){
			$this->load->database();
	}

	public function get_regestered(){
			
		$this->db->select('role_name');
		$this->db->from('role');
		$this->db->join('users', 'users.role_id = role.id');
		$this->db->where('role_name=student');
		$query = $this->db->get('users');
		return $query->result_array();
		}
	public function register($data){
			//User data array
			
			return $this->db->insert('teacher', $data);
			
		}
	public function attendance(){
		
		}

	}