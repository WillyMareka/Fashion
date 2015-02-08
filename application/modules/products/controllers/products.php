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
		
		$this->load->model('m_products');
		$data['products'] = $this->m_products->get_all_products();
		//echo "<pre>";print_r($data['products']);
		
		$this->load->view('v_products', $data);
	}


    public function view()
	{
		$this->load->model('m_products');
		$data['products'] = $this->m_products->get_all_products();
		
		$this->load->view('p_header', array('logged_in' => $this->logged_in));
		$this->load->view('v_products', $data);
		$this->load->view('p_footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */