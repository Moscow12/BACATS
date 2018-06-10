<?php 
class Student extends CI_Controller{
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('student_model');
    }

    public function home(){
        $data['title'] = 'Read BACATS Terms';

        $data['rules'] = $this->student_model->content();
        $this->load->view('student/header');
        $this->load->view('student/home', $data);
        $this->load->view('student/footer');
    }

    public function profile(){
        $data['title'] = 'Update you profile';
        $data['profiles'] = $this->student_model->set_stprofile();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('mname', 'Middle Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
         $this->form_validation->set_rules('reg_no', 'User Name', 'required|callback_check_reg_no_exists');
       //   $this->form_validation->set_rules('password', 'Password', 'required');
       //   $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
      
      if($this->form_validation->run() ===FALSE){
          $this->load->view('student/header');
          $this->load->view('student/stprofile', $data);
          $this->load->view('student/footer');
      } else{
          #Encrept password
          // $enc_password = md5($this->input->post('BACATS@2018'));
          $data = array(
          'firstname' => $this->input->post('firstname'),
          'mname' => $this->input->post('mname'),
          'lastname' => $this->input->post('lastname'),
          'reg_no' => $this->input->post('reg_no'),
          // 'password' => $this->input->post('password'),
          'role_id' => $this->input->post('role_id')				
      
      );
      
      //insert user
          $this->user_model->register($data);
      
          //set messege
          $this->session->set_flashdata('user_register', 'registered');
          redirect('index.php/student/profile');
      }	 	
    }
    

    public function enroll(){

        $data['title'] = 'Enroll the Course';
        $data['courses'] = $this->register_model->get_course();

        $this->load->view('student/header');
        $this->load->view('student/regcourse', $data);
        $this->load->view('student/footer');

    }

    //function to view user logged in
    public function user_loggedin($page = 'student'){
        
        $data['view'] = $this->user_model->get_loggedin();

        $this->load->view('student/header', $data);
       # $this->load->view('student/'.$page, $data);
        $this->load->view('student/footer');
    }

    public function viewattendance(){
        $data['title'] = 'Attendances Record for all courses';
        
        $data['attended'] = $this->student_model->getattendance();

        $this->load->view('student/header');
        $this->load->view('student/attendance', $data);
        $this->load->view('student/footer');
    }

   
}