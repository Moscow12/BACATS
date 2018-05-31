<?php 
	class Registered extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('register_model');
		}
		public function homep(){
			$data['title'] = 'Registered students';

			$data['registers'] = $this->register_model->get_regestered();
			
			$this->load->view('templates/header1');
			$this->load->view('registered/homep', $data);
			$this->load->view('templates/footer');
		}

		public function details(){
			$data['title'] = 'Student details';

			$data['details'] = $this->register_model->get_details();

			$this->load->view('templates/header1');
			$this->load->view('registered/view', $data);
			$this->load->view('templates/footer');
		}

		public function addstudent(){
			
				$data['title'] = 'Add student to database';

				#$data['addstudent'] = $this->register_model->register_student();

				$this->load->library('form_validation');

	 			$this->form_validation->set_rules('name', 'Name', 'required');
	 			$this->form_validation->set_rules('reg_no', 'User Name', 'required');
	 		#$this->form_validation->set_rules('email', 'Email', 'required');
	 			$this->form_validation->set_rules('password', 'Password', 'required');
	 		
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('templates/header1');
				$this->load->view('registered/addstudent', $data);
				$this->load->view('templates/footer');
			} else{

				#Encrept password
				$enc_password = md5($this->input->post('password'));
				$data = array(
				'name' => $this->input->post('name'),
				
				'reg_no' => $this->input->post('reg_no'),
				'password' => $enc_password,
				);

			//insert user

				$this->register_model->register_student($data);

				//set messege
				#$this->session->set_flashdata('user_register', 'You are now registered and can login');

				#redirect('index.php/users/login');

				$this->load->view('templates/header1');
				$this->load->view('registered/view', $data);
				$this->load->view('templates/footer');
		}
	}
	public function addteacher(){
		$data['title'] = 'Add teacher to database';

				#$data['addstudent'] = $this->register_model->register_student();

				$this->load->library('form_validation');

	 			$this->form_validation->set_rules('name', 'Name', 'required');
	 			$this->form_validation->set_rules('reg_no', 'User Name', 'required');
	 		#$this->form_validation->set_rules('email', 'Email', 'required');
	 			// $this->form_validation->set_rules('password', 'Password', 'required');
	 		
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('templates/header1');
				$this->load->view('registered/addteachers', $data);
				$this->load->view('templates/footer');
			} else{

				#Encrept password
				$enc_password = md5($this->input->post('password'));
				$data = array(
				'name' => $this->input->post('name'),
				
				'reg_no' => $this->input->post('reg_no'),
				'password' => $enc_password,
				);

			//insert user

				$this->register_model->register_teacher($data);

				//set messege
				#$this->session->set_flashdata('user_register', 'You are now registered and can login');

				#redirect('index.php/users/login');

				$this->load->view('templates/header1');
				$this->load->view('registered/view', $data);
				$this->load->view('templates/footer');
		}
	}

	public function Collagies(){
				$data['title'] = 'Collagies registered';

				$data['Collagies'] = $this->register_model->get_collage();

				$this->load->view('templates/header1');
				$this->load->view('registered/Collagies', $data);
				$this->load->view('templates/footer');

			}

	public function collage(){
		 //check login
          		if(!$this->session->userdata('logged_in')){
          		  redirect('index.php/registered/collage');
         		 } 

				$data['title'] = 'Create collage';

				$this->load->library('form_validation');
				$this->form_validation->set_rules('name', 'collage name', 'required');

				if($this->form_validation->run() ===FALSE){
					//$this->category_model->create_category();
					$data['Collagies'] = $this->register_model->get_collage();
					$this->load->view('templates/header1');
					$this->load->view('registered/Collage', $data);
					$this->load->view('templates/footer');
				}else{
					$this->register_model->create_collage();

					//set message
					  $this->session->set_flashdata('collage_created', 'Your collage has been created');
					redirect('index.php/registered/homep');
				}
			}
		//login
	 	public function login(){
	 		$data['title'] = 'Sign in';
	 		  $this->load->library('form_validation');

	 		
	 		$this->form_validation->set_rules('reg_no', 'User Name', 'required');
	 		$this->form_validation->set_rules('password', 'Password', 'required');
	 		
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else{


					//Get reg_no
				$reg_no = $this->input->post('reg_no');
				//Get and encript the password
				$password = md5($this->input->post('password'));

				//login user
				$user_id = $this->user_model->login($reg_no, $password);

				if($user_id){
					//create session
					$user_data = array(
						 'user_id' => $user_id,
						 'reg_no' => $reg_no,
						 'logged_in' => true
					);

					$this->session->set_userdata($user_data);
						//set messege
						$this->session->set_flashdata('user_loggedin', 'You are now loged in view content');

						redirect('index.php/registered/homep');
				}else{
						//set messege
						$this->session->set_flashdata('login_failed', 'Invalid user login');

						redirect('index.php/users/failed');
				}

			
			
			}	 	
	 	}
//create controller for adding deprtment 

	 	public function depertment(){
				$data['title'] = 'depertment registered';

				$data['depertments'] = $this->register_model->get_dept();

				$this->load->view('templates/header1');
				$this->load->view('registered/depertment', $data);
				$this->load->view('templates/footer');

			}


	 	public function dept(){
		 //check login
          		if(!$this->session->userdata('logged_in')){
          		  redirect('index.php/registered/collage');
         		 } 

				$data['title'] = 'Create deprtment';

				$this->load->library('form_validation');
				$this->form_validation->set_rules('dept_name', 'Depertment Name', 'required');
				$this->form_validation->set_rules('collage_id', 'Name', 'required');

				if($this->form_validation->run() ===FALSE){
					//$this->category_model->create_category();
					$data['depertments'] = $this->register_model->get_dept();
					$this->load->view('templates/header1');
					$this->load->view('registered/depertment', $data);
					$this->load->view('templates/footer');
				}else{
					$this->register_model->create_dept();

					//set message
					  $this->session->set_flashdata('depertment_created', 'Your depertment has been created');
					redirect('index.php/registered/homep');
				}
			}

			//create controller for adding program 

	 	public function programe(){
				$data['title'] = 'Program registered';

				$data['programs'] = $this->register_model->get_program();

				$this->load->view('templates/header1');
				$this->load->view('registered/program', $data);
				$this->load->view('templates/footer');

			}


	 	public function program(){
		 //check login
          		if(!$this->session->userdata('logged_in')){
          		  redirect('index.php/registered/program');
         		 } 

				$data['title'] = 'Create Program';

				$this->load->library('form_validation');
				$this->form_validation->set_rules('program_name', 'Program Name', 'required');
				$this->form_validation->set_rules('dept_id', 'Depertment id', 'required');

				if($this->form_validation->run() ===FALSE){
					//$this->category_model->create_category();
					$data['programs'] = $this->register_model->get_program();
					$this->load->view('templates/header1');
					$this->load->view('registered/program', $data);
					$this->load->view('templates/footer');
				}else{
					$this->register_model->create_program();

					//set message
					  $this->session->set_flashdata('program_created', 'Your program has been created');
					redirect('index.php/registered/homep');
				}
			}

				public function Courses(){
				$data['title'] = 'Course registered';

				$data['courses'] = $this->register_model->get_course();

				$this->load->view('templates/header1');
				$this->load->view('registered/courses', $data);
				$this->load->view('templates/footer');

			}


	 	public function course(){
		 //check login
          		if(!$this->session->userdata('logged_in')){
          		  redirect('index.php/registered/course');
         		 } 

				$data['title'] = 'Create Course';

				$this->load->library('form_validation');
				$this->form_validation->set_rules('course_name', 'Course name', 'required');
				$this->form_validation->set_rules('dept_id', 'Depertment id', 'required');
				$this->form_validation->set_rules('course_code', 'Course code', 'required');

				if($this->form_validation->run() ===FALSE){
					//$this->category_model->create_category();
					$data['courses'] = $this->register_model->get_course();
					$this->load->view('templates/header1');
					$this->load->view('registered/course', $data);
					$this->load->view('templates/footer');
				}else{
					$this->register_model->create_course();

					//set message
					  $this->session->set_flashdata('course_created', 'Your Course has been created');
					redirect('index.php/registered/homep');
				}
			}


	
}