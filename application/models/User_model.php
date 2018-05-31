<?php
	class User_model extends CI_Model{

		public function register($data){
			//User data array
			
			return $this->db->insert('users', $data);
			
		}

		//login user
		public function login($username, $password){

			//validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$return = $this->db->get('users');

			if($return->num_rows() ==1){
				return $return->row(0)->id;

			} else {
				return false;
			}
		}

		//check the username exist
		public function check_username_exists($username){


			$query = $this->db->get_where('users', array('username'=> $username));

			if(empty($query->row_array())){
				
				return true;
			} else{
				false;
			} 
		}

		//check the email exist
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('users'=> $email));
			if(empty($query->row_array())){
				return true;
			} else{
				false;
			} 
		}
	}