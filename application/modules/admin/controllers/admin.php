<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $logged_in;

	function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('logged_in')) {
         	$this->logged_in = TRUE;
         } else {
         	//$this->logged_in = FASLE;
         }
          
    }

	public function view()
	{
		$this->load->view('header', array('logged_in' => $this->logged_in));
		$this->load->view('v_admin');
		$this->load->view('footer');
	}

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */