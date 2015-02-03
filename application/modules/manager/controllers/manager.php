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
   		
   	$this->load->view('manager');
   		
   } 

   function productsview()
   {
      
    $this->load->view('products_view');
      
   }

   function statistics()
   {
      
    $this->load->view('statistics');
      
   }

   function category()
   {
      
    $this->load->view('category_view');
      
   }

   function type()
   {
      
    $this->load->view('type_form');
      
   }

   function company()
   {
      
    $this->load->view('company');
      
   }


















}