<?php 
	 class Users extends CI_Controller {
	 	public function register(){
	 		$data['title'] = 'Sign Up';
	 		  $this->load->library('form_validation');

	 		$this->form_validation->set_rules('name', 'Name', 'required');
	 		$this->form_validation->set_rules('username', 'User Name', 'required|callback_check_username_exists');
	 		$this->form_validation->set_rules('email', 'Email', 'required');
	 		$this->form_validation->set_rules('password', 'Password', 'required');
	 		$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else{

				#Encrept password
				$enc_password = md5($this->input->post('password'));
				$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $enc_password
				
			);

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

	 		
	 		$this->form_validation->set_rules('username', 'User Name', 'required');
	 		$this->form_validation->set_rules('password', 'Password', 'required');
	 		
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('templates/header1');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else{


					//Get username
				$username = $this->input->post('username');
				//Get and encript the password
				$password = md5($this->input->post('password'));

				//login user
				$user_id = $this->user_model->login($username, $password);

				if($user_id){
					//create session
					$user_data = array(
						 'user_id' => $user_id,
						 'username' => $username,
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

	 	public function failed(){
	 			$data['title'] = 'Sign in';
	 			$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');	
	 	}
	 	//logout function
	 	public function logout(){
	 		//Unset user data
	 		$this->session->unset_userdata('logged_in');
	 		$this->session->unset_userdata('user_id');
	 		$this->session->unset_userdata('username');

	 		$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');

						redirect('index.php/users/login');
	 	}
	 	// check if username exists
	 	public function check_username_exists($username){
	 		$this->form_validation->set_message('check_username_exists', 'That username is taken. Choose another one');
	 		if($this->user_model->check_username_exists($username)){
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


	//emmmmmmm