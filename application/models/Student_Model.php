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
            
        }
    }