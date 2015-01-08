<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->model('user_model');
        
        //this is some random change
    }


	public function log()
	{
		$this->load->view('log_header');
		$this->load->view('v_log');
		$this->load->view('home/footer');
	}

	public function sign()
	{
		$this->load->view('sign_header');
		$this->load->view('v_sign');
		$this->load->view('home/footer');
	}

	public function failure()
	{
		$this->load->view('v_fail');
	}

	// function validation()
	// {
	// 	$this->load->model('user_model');
	// 	$query = $this->user_model->validate();

	// 	if($query){
	// 		$data = array(
 //              'username' => $this->input->post('username'),
 //              'is_logged_in' => true
	// 		);
	// 		$this->session->set_userdata($data);
	// 		redirect('products/v_products');
	// 	}else{
	// 		$data['new_user'] = 'Incorrect Username or Password<br/><br/>Please try again...';
	// 	}
	// }

	function create_member()
	{
		$this->load->library('form_validation');
        
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|min_length[3]|required|xss_clean');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|min_length[3]|required|xss_clean');
        $this->form_validation->set_rules('phonenumber', 'Phone Number', 'trim|min_length[3]');
        $this->form_validation->set_rules('age', 'Age', 'trim|min_length[2]');
        $this->form_validation->set_rules('residence', 'Residence', 'trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules('nationality', 'Nationality', 'trim|min_length[3]|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|xss_clean|is_unique[accounts.email]');
        $this->form_validation->set_rules('pass1', 'Password', 'trim|min_length[3]|max_length[15]|required|xss_clean');
        $this->form_validation->set_rules('username', 'User Name', 'trim|min_length[3]|required|xss_clean');
        $this->form_validation->set_rules('pass2', 'Re-Entered Password', 'trim|required|matches[pass1]|xss_clean');

		if($this->form_validation->run() == FALSE){
			$this->load->view('sign_header');
		    $this->load->view('v_sign');
		    $this->load->view('home/footer');
		    //echo 'Not working';
		}else{
			$this->load->model('user_model');
			$result = $this->user_model->enter_member();
               //print_r($result);

			if($result){
              $this->load->view('products/p_header');
		      $this->load->view('products/v_products');
		      $this->load->view('products/p_footer');		
            }else{
               echo 'There was a problem with the website.<br/>Please contact the administrator';
			}
		}
	}
	

	// function user_antiexists($user_entered)
	// {
 //        $this->load->model('user_model');

 //        $user_available = $this->user_model->user_antiexists($user_entered);

 //        if($user_available){
 //           return TRUE;
 //        }else{
 //           return FALSE;
 //        }
	// }

	// function email_antiexists($email_entered)
	// {
 //        $this->load->model('user_model');

 //        $email_available = $this->user_model->email_antiexists($email_entered);

 //        if($email_available){
 //           return TRUE;
 //        }else{
 //           return FALSE;
 //        }
	// }










}

/* End of file user.php */
/* Location: ./application/modules/user/user.php */