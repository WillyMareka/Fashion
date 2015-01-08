<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends MY_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    

    public function validate(){
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('logs');

        if($query->num_rows == 1){
          return TRUE;
        }
    }


    public function enter_member(){
      $firstname = $this->input->post('firstname');
      $middlename = $this->input->post('middlename');
      $lastname = $this->input->post('lastname');
      $pnumber = $this->input->post('phonenumber');
      $gender = $this->input->post('gender');
      $nationality = $this->input->post('nationality');
      $age = $this->input->post('age');
      $religion = $this->input->post('religion');
      $residence = $this->input->post('residence');
      $username = $this->input->post('username');
      $passw1 = md5($this->input->post('pass1'));
      
      $email = $this->input->post('email');

      $member_details_data = array();
      $member_details = array(
          'f_name' => $firstname,
          'm_name' => $middlename,
          'l_name' => $lastname,
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

    public function insert_into_db($table_name = null,$data = null){
        
        $this->db->insert_batch('$table_name',$data);
        return "SUCCESS";
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


    function email_antiexists($email_entered){
         $this->db->where('email', $email);
         $result->db->get('accounts');

         if($result->num_rows() > 0){
          return FALSE;
         }else{
          return TRUE;
         }
    }

   
}