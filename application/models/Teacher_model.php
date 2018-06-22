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
			$data = array(
				
				'gender' => $this->input->post('gender'),
				'dob' => $this->input->post('dob'),
				'email' => $this->input->post('email'),
				'phoneno' => $this->input->post('phoneno'),
				'office_no' => $this->input->post('office_no'),
				'user_id' =>$this->session->userdata('user_id'),
				
				'dept_id' => $this->input->post('dept_id')
				
			
			);
			
			return $this->db->insert('teacher', $data);
			
		}
	public function attendance(){
		
		}
		
#function should insert data to the table teacher course
	public function create_course(){
			$data = array(
				'course_id' => $this->input->post('course_id'),
			
				);
			return $this->db->insert('teacher_course', $data);
	}
	public function get_profile(){
		#$this->db->select('reg_no, CONCAT( firstname, '.', lname, '.', lastname) as name ', 'email, phoneno, officeno, dob, gender');
		$this->db->select('reg_no, CONCAT( firstname, '.', mname, '.', lastname) as name' );
		$this->db->from( 'users u');
		$this->db->join('teacher t', 't.user_id = u.id', 'left');
		$this->db->join('department d', 'd.id = t.dept_id', 'left');
		$this->db->where('u.role_id= 1');
		#$this->db->where('id', $this->session->userdata('user_id'));
		$this->session->userdata('user_id');
		$query = $this->db->get();
		return $query->result_array();
	}

}