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
			 $this->load->view('admin/homep', $data); //>>it will be changed/removed
			$this->load->view('teacher/footer');
		}

		public function profile(){
			$data['title'] = 'Update Profile';

			 $data['Depertment'] = $this->register_model->get_dept();
			$this->load->library('form_validation');

	 		$this->form_validation->set_rules('gender', 'Gender', 'required');
	 		$this->form_validation->set_rules('t_dob', 'Date of Birth', 'required');
	 		$this->form_validation->set_rules('skill', 'Skill', 'required');
	 		$this->form_validation->set_rules('phoneno', 'Phone number', 'required');
	 		$this->form_validation->set_rules('dept_name', 'Depertment', 'required');
	 		$this->form_validation->set_rules('position', 'Position', 'required');
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('teacher/header2');
				$this->load->view('teacher/profile', $data);
				$this->load->view('teacher/footer');
			} else{

				
				$data = array(
				'gender' => $this->input->post('gender'),
				't_dob' => $this->input->post('t_dob'),
				'skill' => $this->input->post('skill'),
				'phoneno' => $this->input->post('phoneno'),
				'dept_name' => $this->input->post('dept_name'),
				'position' => $this->input->post('position')
			);

			//insert user

				$this->teacher_model->register($data);

				//set messege
				$this->session->set_flashdata('teacher_register', 'Your profile has been updated');

				redirect('index.php/Teacher/homep');
			}	 	
	 	}
	 	public function attendance(){
	 		$data['title'] = 'Attendance Table';


			$data['attendances'] = $this->teacher_model->attendance();

	 		$this->load->view('teacher/header2');
			$this->load->view('teacher/attendance', $data);
			$this->load->view('teacher/footer');
	 	}
		

	}