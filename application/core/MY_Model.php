<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function getCourses()
    {
    	$query = $this->db->query("SELECT * FROM courses ORDER BY course_no");
    	$result = $query->result_array();

    	return $result;
    }
}