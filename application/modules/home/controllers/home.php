<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

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
		 // $details = $this->session->all_userdata();
   //       echo "<pre>";print_r($details);die();

		$this->load->view('header', array('logged_in' => $this->logged_in));
		$this->load->view('v_home');
		$this->load->view('home_footer');
	}

	public function about()
	{
		$this->load->view('header', array('logged_in' => $this->logged_in));
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function contact()
	{
		$this->load->view('header', array('logged_in' => $this->logged_in));
		$this->load->view('contact');
		$this->load->view('footer');
	}

	 public function add_to_cart_check(){
      if($this->session->userdata('logged_in')){
			redirect('cart/index');
      }
      else{
        redirect('user/log');

      }
    }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */