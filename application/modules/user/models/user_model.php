<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    // public function validate(){
    //     $this->db->where('username', $this->input->post('username'));
    //     $this->db->where('password', md5($this->input->post('password')));
    //     $query = $this->db->get('logs');

    //     if($query->num_rows == 1){
    //       return TRUE;
    //     }
    // }


    public function enter_member($data){
      $username = $this->input->post('username');
      $email = $this->input->post('email');

      $new_member_details = array(
          'f_name' => $this->input->post('firstname'),
          'm_name' => $this->input->post('middlename'),
          'l_name' => $this->input->post('lastname'),
          'age' => $this->input->post('age'),
          'nationality' => $this->input->post('nationality'),
          'phone_no' => $this->input->post('phonenumber'),
          'email' => $this->input->post('email'),
          'residence' => $this->input->post('residence'),
          'religion' => $this->input->post('religion'),
          'gender' => $this->input->post('gender'),
      );

      $new_member_credentials = array(
          'username' => $this->input->post('username'),
          'password' => md5($this->input->post('password'))

      );

      $insert1 = $this->db->insert('accounts', $new_member_details);
      $insert2 = $this->db->insert('logs', $new_member_credentials);

      echo $insert1;
    }


    // function user_antiexists($user_entered){
    //      $this->db->where('username', $username);
    //      $result->db->get('logs');

    //      if($result->num_rows() > 0){
    //       return FALSE;
    //      }else{
    //       return TRUE;
    //      }
    // }


    // function email_antiexists($email_entered){
    //      $this->db->where('email', $email);
    //      $result->db->get('accounts');

    //      if($result->num_rows() > 0){
    //       return FALSE;
    //      }else{
    //       return TRUE;
    //      }
    // }

   
}