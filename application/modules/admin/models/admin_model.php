<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

   public function usernumber(){
    $sql = "SELECT COUNT(`ac_id`) as users FROM accounts";

        $result = $this->db->query($sql);
        $data = $result->row();
        //echo $data->users;die();

        return $data->users;
   }

   public function get_all_users()
  {
    $users = array();
    $query = $this->db->get_where('accounts', array('is_deleted' => 0));
    $result = $query->result_array();

    if ($result) {
      foreach ($result as $key => $value) {
        $users[$value['ac_id']] = $value;
      }

      return $users;
    }
    
    return $users;
  }

  public function updateuser($type, $ac_id)
  {
    $data = array();
    switch ($type) {
      case 'delete':
        $data['is_deleted'] = 1; 
        
        break;
      
      case 'update':
        $data = $this->input->post();
        break;
      default:
        # code...
        break;
    }
    $this->db->where('ac_id', $ac_id);
    $update = $this->db->update('accounts', $data);

    if ($update) {
      return true;
    }
    else
    {
      return false;
    }
  }
    

   
}