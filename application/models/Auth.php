<?php
    date_default_timezone_set('Asia/Jakarta');

    class Auth extends CI_Model {        
    

        function __construct(){
            parent::__construct();
        
        }

        
        function getUser($user_id){
            
            $sql = "SELECT * FROM _users WHERE user_id='$user_id'";
            $result = $this->db->query($sql)->row_array();

            return $result;
        }        


        function login($email, $password){

            $password = md5($password);

            $sql = "SELECT * FROM _users WHERE ( email='$email' OR phone='$email' ) AND password='$password'";
            $result = $this->db->query($sql)->row_array();
            
            return $result;
            
        }
        
        
        function logout($user_id){

            $data = [
                'is_online' => 0
            ];

            $role = $this->session->userdata('lms_role');

            if($role == 'student'){

                $this->db->where('student_id', $user_id);
                $this->db->update('us_student', $data);

            }else if($role == 'parent'){

                $this->db->where('parent_id', $user_id);
                $this->db->update('us_parent', $data);

            }else if($role == 'teacher'){

                $this->db->where('teacher_id', $user_id);
                $this->db->update('us_teacher', $data);

            }else if($role == 'school_admin'){
                
                $this->db->where('admin_id', $user_id);
                $this->db->update('us_school_admin', $data);

            }


            $data = [
                'logout_time' => date('Y-m-d H:i:s'),
                'role' => $role
            ];

            $this->db->where('user_id', $user_id);
            $this->db->update('us_user_log', $data);
            
            return true;

        }

        
    }
?>