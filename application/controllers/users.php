<?php 
	 class Users extends CI_Controller {
	 	public function register(){
			 $data['title'] = 'Sign Up';
			 
			$data['roles'] = $this->user_model->register('role_id');
	 		  $this->load->library('form_validation');

			  $this->form_validation->set_rules('firstname', 'First Name', 'required');
			  $this->form_validation->set_rules('mname', 'Middle Name', 'required');
			  $this->form_validation->set_rules('lastname', 'Last Name', 'required');
	 		  $this->form_validation->set_rules('reg_no', 'User Name', 'required|callback_check_reg_no_exists');
	 		//   $this->form_validation->set_rules('password', 'Password', 'required');
	 		//   $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else{

				#Encrept password
				$enc_password = md5($this->input->post('BACATS@2018'));
				$data = array(
				'firstname' => $this->input->post('firstname'),
				'mname' => $this->input->post('mname'),
				'lastname' => $this->input->post('lastname'),
				'reg_no' => $this->input->post('reg_no'),
				'password' => $enc_password,
				'role_id' => 'role_id'			
			);
			var_dump($data);
			//insert user

				$this->user_model->register($data);
			
				//set messege
				$this->session->set_flashdata('user_register', 'You are now registered and can login');

				redirect('index.php/users/login');
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

						redirect('index.php/users/register');
				}

			
			
			}	 	
	 	}

	 	// public function failed(){
		// 		 $data['title'] = 'Sign in';
				 
	 	// 		$this->load->view('templates/header');
		// 		$this->load->view('users/login', $data);
		// 		$this->load->view('templates/footer');	
	 	// }
	 	//logout function
	 	public function logout(){
	 		//Unset user data
	 		$this->session->unset_userdata('logged_in');
	 		$this->session->unset_userdata('user_id');
	 		$this->session->unset_userdata('reg_no');

	 		$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');

						redirect('index.php/users/login');
	 	}
	 	// check if reg_no exists
	 	public function check_reg_no_exists($reg_no){
	 		$this->form_validation->set_message('check_reg_no_exists', 'That reg_no is taken. Choose another one');
	 		if($this->user_model->check_reg_no_exists($reg_no)){
	 			return true;
	 		} else{
	 			return false;
	 		}
	 	}

	 	// check if email exists
	 	public function check_email_exists($email){
	 		$this->form_validation->set_message('check_email_exists', 'That emmail is taken. Choose another one');
	 		if($this->user_model->check_email_exists($email)){
	 			return true;
	 		} else{
	 			return false;
	 		}
	 	}
	 
	}