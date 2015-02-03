<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends MY_Controller {

	public $logged_in;

	function __construct()
    {
        parent::__construct();

        $this->load->model('m_manager');

        if ($this->session->userdata('logged_in')) {
         	$this->logged_in = TRUE;
         } else {
         	//$this->logged_in = FASLE;
         }

         $this->load->library('form_validation');
         $this->load->library('upload');
        
        $this->pic_path = realpath(APPPATH . '../uploads/');
          
    }


   function home()
   {
   		$this->load->view('header', array('logged_in' => $this->logged_in));
   	$this->load->view('manager');
   		$this->load->view('footer');
   } 


















}