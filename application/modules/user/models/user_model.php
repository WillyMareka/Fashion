<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends MY_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');

        
    }

    public function uploader(){
       $config = array(
           'allowed_types' => 'jpg|jpeg|png',
           'upload_path'   => $this->pic_path
        );

       $this->load->library('upload', $config);
       $this->upload->uploader();

    }

    public function validate(){
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('logs');

        if($query->num_rows == 1){
          return TRUE;
        }
    }


    public function enter_member($path){
      $firstname = strtoupper($this->input->post('firstname'));
      $middlename = strtoupper($this->input->post('middlename'));
      $lastname = strtoupper($this->input->post('lastname'));
      $filename = $this->input->post('picture');
      $pnumber = $this->input->post('phonenumber');
      $gender = strtoupper($this->input->post('gender'));
      $nationality = strtoupper($this->input->post('nationality'));
      $age = $this->input->post('age');
      $religion = strtoupper($this->input->post('religion'));
      $residence = strtoupper($this->input->post('residence'));
      $username = $this->input->post('username');
      $passw1 = md5($this->input->post('pass1'));
      
      $email = $this->input->post('email');

      $member_details_data = array();
      $member_details = array(
          'f_name' => $firstname,
          'm_name' => $middlename,
          'l_name' => $lastname,
          'picture' => $path,
          'age' => $age,
          'nationality' => $nationality,
          'phone_no' => $pnumber,
          'email' => $email,
          'residence' => $residence,
          'religion' => $religion,
          'gender' => $gender,
      );

        

        array_push($member_details_data, $member_details);

        //echo '<pre>'; print_r($member_details_data); echo '<pre>'; die;

        $this->db->insert_batch('accounts',$member_details_data);

      $member_credentials_data = array();
      $member_credentials = array(
          'username' => $username,
          'password' => $passw1
      );

      array_push($member_credentials_data, $member_credentials);

      $this->db->insert_batch('logs',$member_credentials_data);
       

      if($this->db->affected_rows() === 1){

        return $username;

      }else{

        //echo 'Applicant is not able to be registered';
        $this->load->library('email');
        $this->email->from('marewillfashion@gmail.com','MareWill Fashion');
        $this->email->to('marekawill@gmail.com');
        $this->email->subject('Failed registeration of a user');

        if(isset($email)){
            $this->email->message('Unable to register and insert user with the email of '.$email.' to the database.');
        }else{
            $this->email->message('Unable to register and insert user to the database.');

        }

        $this->email->send();
        return FALSE;
     }
    }

    public function log_member()
    {
        $username = $this->input->post('l_username');
        $passw1 = md5($this->input->post('l_password'));

        $sql = "SELECT * FROM logs lg, accounts ac WHERE ac.ac_id = lg.log_id 
        AND lg.username = '". $username ."' AND lg.password = '". $passw1 ."' LIMIT 1"; 

        $result = $this->db->query($sql);
        $row = $result->row();

        $sql2 = "SELECT * FROM logs WHERE username = '". $username ."' AND activated = 0 ";

        $result2 = $this->db->query($sql2);
        $row2 = $result->row();

        if($result->num_rows() == 1){
           if($row2->activated){
             if ($row->password === $passw1) {
               $session_data = array(
                   'ac_id'       => $row ->ac_id , 
                   'username'    => $row ->username , 
                   'f_name'      => $row ->f_name ,
                   'm_name'      => $row ->m_name ,
                   'l_name'      => $row ->l_name ,
                   'email'       => $row ->email ,
                   'age'         => $row ->age , 
                   'nationality' => $row ->nationality , 
                   'residence'   => $row ->residence , 
                   'phone_no'    => $row ->phone_no ,  
                   'religion'    => $row ->religion , 
                   'gender'      => $row ->gender    
                );

                $this -> set_session($session_data);
                return 'logged_in';
             } else {
               return "incorrect_password";
             }
           }else{
             return "not_activated";
           }
         }
       
       //print_r($this->session->all_userdata());
    }

    private function set_session($session_data){
      $sql = "SELECT ac_id , username FROM accounts, logs WHERE username = '". $session_data['username'] ."' LIMIT 1";
      $result = $this->db->query($sql);
      $row = $result->row();
       //echo "<pre>";print_r($session_data);die();
       //echo $session_data['ac_id'];die();
      $setting_session = array(
                   'ac_id'     => $session_data['ac_id'] , 
                   'username'    => $session_data['username'] , 
                   'logged_in'   => 1
      ); 

      $this->session->set_userdata($setting_session);
      
      $details = $this->session->all_userdata();
       $sql = "INSERT INTO ci_sessions (`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`,`ac_id`,`username`,`logged_in`)
               VALUES ('".$details['session_id']."', '".$details['ip_address']."','".$details['user_agent']."', '".$details['last_activity']."', 
                       '1','".$details['ac_id']."', '".$details['username']."', '".$details['logged_in']."') ";

    $results = $this->db->query($sql);
      //$this->db->insert_batch('ci_sessions',$session_details);
       // $details = $this->session->all_userdata();
        
    }

    function user_antiexists($user_entered){
         $this->db->where('username', $username);
         $result->db->get('logs');

         if($result->num_rows() > 0){
          return FALSE;
         }else{
          return TRUE;
         }
    }

    
   
}