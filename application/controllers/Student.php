<?php 
class Student extends CI_Controller{
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('student_model');
    }

    public function home(){
        $data['title'] = 'Registered students';

       // $data['$query'] = $this->student_model->get_content();
        // echo "<pre>";
        //  print_r($this->student_model->get_content());
        
        $this->load->view('student/header');
        $this->load->view('student/home', $data);
        $this->load->view('student/footer');
    }

    public function profile(){
        $data['title'] = 'Update you profile';
        $data['profiles'] = $this->student_model->set_stprofile();

        $this->load->view('student/header');
        $this->load->view('student/stprofile', $data);
        $this->load->view('student/footer');
    }

   
}