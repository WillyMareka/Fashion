<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function insert_comment(){
    	$name = $this->input->post('name');
    	$email = $this->input->post('email');
    	$mobile = $this->input->post('mobile');
    	$message = $this->input->post('message');

        $sql = "INSERT INTO comments (name,email,mobile,message) VALUES 
              ( " . $this->db->escape($name) . ",
              	" . $this->db->escape($email) . ",
              	" . $this->db->escape($mobile) . ",
              	" . $this->db->escape($message) . "
              	)";

        $result = $this->db->query($sql);


       // if($this->db->affected_rows()===1){
       // 	echo "Successfully commented. Thank you $name";
       	
       // }else{
       // 	echo "Unsuccessfully commented. No thanks to you $name";
       // }
    }

   
}