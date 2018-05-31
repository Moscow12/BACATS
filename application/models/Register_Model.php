<?php 
	class Register_model extends CI_Model{

		public function __Construct(){
			$this->load->database();
		}

		public function get_regestered(){ 
			
			$this->db->order_by('id');
			$query = $this->db->get('users');
			return $query->result_array();
		}
		public function get_details(){
			
			$this->db->select('*');
			$this->db->from('student');
			$this->db->inner join('student', on 'program.id = student.program_id' on 'course.id = student.course_id');
			$query = $this->db->get('student');
			return $query->result_array();
		}

		//add students to database
		// public function register_student(){

		// 	  $data = array(
		// 	  	'name' => $this->input->post('name'),
    	// 		'reg_no' => $this->input->post('reg_no'),
    	// 		'password' => $this->input->post('password')    		
    	// 	);

   		// 	 #$this->db->set($data);
  		// 	 #$this->db->insert($this->db->dbprefix . 'ST_ITM');

		// 	$this->db->insert('registered', $data);
		// }

		// public function register_teacher(){

		// 	  $data = array(
		// 	  	'name' => $this->input->post('name'),
    	// 		'reg_no' => $this->input->post('reg_no'),
    	// 		'password' => $this->input->post('password')    		
    	// 	);
		// 	  #var_dump($data);

   		// 	 #$this->db->set($data);
  		// 	 #$this->db->insert($this->db->dbprefix . 'ST_ITM');

		// 	$this->db->insert('teachers', $data);
			
		// }

		//function for collage in model
 		public function get_collage(){
			$this->db->order_by('name');
			$query = $this->db->get('collage');
			return $query->result_array();
		}

		public function create_collage(){
 			$data = array(
 				'name' => $this->input->post('name')
 				);
 			return $this->db->insert('collage', $data);
 		}


 		//function for depertment in model

 		public function get_dept(){
			$this->db->order_by('dept_name');
			$query = $this->db->get('department');
			return $query->result_array();
		}

		public function create_dept(){
 			$data = array(
 				'collage_id' => $this->input->post('collage_id'),
 				'dept_name' => $this->input->post('dept_name')
 				);
 			return $this->db->insert('department', $data);
 		}
 		//function for program in model

 		public function get_program(){
			$this->db->order_by('program_name');
			$query = $this->db->get('program');
			return $query->result_array();
		}

		public function create_program(){
 			$data = array(
 				'dept_id' => $this->input->post('dept_id'),
 				'program_name' => $this->input->post('program_name')
 				);
 			return $this->db->insert('program', $data);
 		}

 		//function for program in model

 		public function get_course(){
			$this->db->order_by('course_code');
			$query = $this->db->get('course');
			return $query->result_array();
		}

		public function create_course(){
 			$data = array(
 				'course_code' => $this->input->post('course_code'),
 				'course_name' => $this->input->post('course_name'),
 				'dept_id' => $this->input->post('dept_id')
 				);
 			return $this->db->insert('course', $data);
 		}
	}