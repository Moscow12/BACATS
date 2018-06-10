<?php 
	class Teacher extends CI_Controller{
		
		public  function __construct()
		{
			parent::__construct();
			$this->load->model('teacher_model');
		}
		public function index(){
			
		}

		public function homep(){
			$data['title'] = 'Registered students';

			$data['registers'] = $this->register_model->get_regestered();
			
			$this->load->view('teacher/header2');
			 $this->load->view('admin/index', $data); //>>it will be changed/removed
			$this->load->view('teacher/footer');
		}

		public function profile(){
			$data['title'] = 'Update Profile';

			 $data['Depertment'] = $this->register_model->get_dept();
			$this->load->library('form_validation');

	 		$this->form_validation->set_rules('gender', 'Gender', 'required');
	 		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
	 		$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('phoneno', 'Phone number', 'required');
			$this->form_validation->set_rules('office_no', 'Office number', 'required');
	 		$this->form_validation->set_rules('dept_id', 'Depertment', 'required');
	 		#$this->form_validation->set_rules('position', 'Position', 'required');
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('teacher/header2');
				$this->load->view('teacher/profile', $data);
				$this->load->view('teacher/footer');
			} else{

				
				$data = array(
				'gender' => $this->input->post('gender'),
				'dob' => $this->input->post('dob'),
				'email' => $this->input->post('email'),
				'phoneno' => $this->input->post('phoneno'),
				'office_no' => $this->input->post('office_no'),
				'dept_id' => $this->input->post('dept_id')
				#'position' => $this->input->post('position')
			);

			//insert user

				$this->teacher_model->register($data);

				//set messege
				$this->session->set_flashdata('teacher_register', 'Your profile has been updated');

				redirect('index.php/Teacher/profile');
			}	 	
	 	}
	 	public function attendance(){
	 		$data['title'] = 'Attendance Table';


			$data['attendances'] = $this->teacher_model->attendance();

	 		$this->load->view('teacher/header2');
			$this->load->view('teacher/attendance', $data);
			$this->load->view('teacher/footer');
		 }
		 #teacher course registration
		public function course(){
			$data['title'] = 'Register Course You Instruct';
			$data['Courses'] = $this->register_model->get_course();

			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('course_name', 'Your Course', 'required');

			if($this->form_validation->run() ===FALSE){
				$this->load->view('teacher/header2');
				$this->load->view('teacher/course', $data);
				$this->load->view('teacher/footer');
			}else{
				$data = array(
				'course_name' => $this->input->post('couse_name'),
				);
			}
		}

		public function student(){
			$data['title'] = 'Enrolled Student';

			$data['students'] = $this->register_model->get_student();
			
			$data['programes'] = $this->register_model->get_students();
							
			$this->load->view('teacher/header2');
			$this->load->view('teacher/student', $data);
			$this->load->view('teacher/footer');
		}

	}