<?php 
	class Student_model extends CI_Model{

		public function __Construct(){
			$this->load->database();
        }
        
        // public function get_content($id = null){
        //     $this->db->select('*');
        //     $this->db->from('users');
        //     $this->db->join('role', "role.id = '2', ");
        //     $this->db->join('users', "users.reg_no = '2015-04-08524', ");
        //     $this->db->join('users', "users.password = 'BACATS@2018'");
        //     $query = $this->db->get();
        //     return $query->result_array();

        //     // if (!is_null($id)) $this->db->where('id', $id);
        //     // $this->db->order_by('id', 'desc');
        //     // return $this->db->get()->result();
       
            
        // }

        public function get_content($id = null){
            $this->db->select('*');
            $this->db->from('users, role');
            $this->db->where("'users.role_id' = role.id AND users.reg_no = '2015-04-00000' AND users.password = '00000000'");
            
            // return $this->db;
            $query = $this->db->get();
            return $query->result_array();

            // if (!is_null($id)) $this->db->where('id', $id);
            // $this->db->order_by('id', 'desc');
            // return $this->db->get()->result();
       
            
        }

        public function set_stprofile(){
            $data = array(
				
				'gender' => $this->input->post('gender'),
				'dob' => $this->input->post('dob'),
				'email' => $this->input->post('email'),
				'phoneno' => $this->input->post('phoneno'),
				'user_id' =>$this->session->userdata('user_id'),
                'location' => $this->input->post('location')
			
			);
			
			return $this->db->insert('student', $data);
            
        }
        public function content(){
            
        }

        public function enrolls(){

            $this->db->select('*');
            $this->db->from('course');
            $this->db->join('student', 'course.id=student.course_id');
            $this->db->join('student_course', 'course');
            $this->db->where('student.user_id = course.student_id');

        }

        public function getattendance(){

            $this->db->select('attendance_date, course_id, student_id');
            $this->db->from('attendance');
            $this->db->join('course', 'attendance.course_id = course.id', 'inner');
            $this->db->join('student', 'attendance.student_id = student.id', 'inner');
            $this->db->where('course_id = course_code');

            #return $this->db-get('attendance')->result();

        }
    }