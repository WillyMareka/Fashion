<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {

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

    
	public function index()
	{
		
	}


    public function view()
	{
		$this->load->view('p_header', array('logged_in' => $this->logged_in));
		$this->load->view('v_products');
		$this->load->view('p_footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */