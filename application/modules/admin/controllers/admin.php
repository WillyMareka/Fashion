<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $logged_in;

	function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('logged_in')) {
         	$this->logged_in = TRUE;
         } else {
         	//$this->logged_in = FASLE;
         }
          
    }

	public function home()
	{
		$this->load->view('header', array('logged_in' => $this->logged_in));
		$this->load->view('v_admin');
		$this->load->view('footer');
	}

	public function tables()
	{
		$this->load->view('admin_tables', array('logged_in' => $this->logged_in));
	}

	public function statistics()
	{
		$this->load->view('admin_stats', array('logged_in' => $this->logged_in));
	}

	public function forms()
	{
		$this->load->view('admin_form', array('logged_in' => $this->logged_in));
	}

	public function users()
	{
		$this->load->view('admin_user', array('logged_in' => $this->logged_in));
	}

	public function company()
	{
		$this->load->view('admin_company', array('logged_in' => $this->logged_in));
	}

	public function messages()
	{
		$this->load->view('admin_message', array('logged_in' => $this->logged_in));
	}

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */