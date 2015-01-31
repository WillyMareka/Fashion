<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

	public $logged_in;

	function __construct()
    {
        parent::__construct();

        $this->load->model('admin_model');

        if ($this->session->userdata('logged_in')) {
         	$this->logged_in = TRUE;
         } else {
         	//$this->logged_in = FASLE;
         }
          
    }

	public function home()
	{

		$data['error'] = '';
		
		$data['users_table'] = $this->createusersview('table');
		$data['usernumber']  = $this->getusernumber();
		

		$this->load->view('v_admin', $data);
	}

	function createusersview($type)
    {
        $users = $this->admin_model->get_all_users();
        $user_style = '';
        if ($users) {
            switch ($type) {
            case 'table':
                $counter = 1;
                foreach ($users as $key => $user_details) {
                    $user_style .= '<tr>';
                    // $user_style .= '<td>'.$counter.'</td>';
                    $user_style .= '<td>'.$user_details['ac_id'].'</td>';
                    $user_style .= '<td>'.$user_details['f_name'].'</td>';
                    $user_style .= '<td>'.$user_details['l_name'].'</td>';
                    $user_style .= '<td>'.$user_details['age'].'</td>';
                    $user_style .= '<td>'.$user_details['nationality'].'</td>';
                    $user_style .= '<td>'.$user_details['phone_no'].'</td>';
                    $user_style .= '<td>'.$user_details['email'].'</td>';
                    $user_style .= '<td>'.$user_details['residence'].'</td>';
                    $user_style .= '<td>'.$user_details['religion'].'</td>';
                    $user_style .= '<td>'.$user_details['gender'].'</td>';
                    $user_style .= '<td><a data-toggle="tooltip" data-placement="bottom" title="View Profile" href = "'.base_url().'admin/userprofile/'.$user_details['ac_id'].'"><i class="ion-eye icon black"></i></a></td>';
                    $user_style .= '<td><a data-toggle="tooltip" data-placement="bottom" title="Delete Profile" href = "'.base_url().'admin/updateuser/delete/'.$user_details['ac_id'].'"><i class="ion-trash-a icon black"></i></td>';
                    $user_style .= '</tr>';
                    $counter++;
                }
                break;
            
            default:
                # code...
                break;
            }
        }

        return $user_style;
    }

    function updateuser($type, $ac_id)
	{
		$update = $this->admin_model->updateuser($type, $ac_id);
		if($update)
		{
			switch ($type) {
				case 'delete':
					redirect(base_url() .'admin/home');
					break;
				
				default:
					# code...
					break;
			}
		}
	}

  

	public function tables()
	{
		$data['error'] = '';
		$data['usernumber']  = $this->getusernumber();
		$data['users_table'] = $this->createusersview('table');
		

		$this->load->view('admin_tables', $data);
	}

	public function references()
	{
		$data['error'] = '';
		
		// $data['content_page'] = 'admin/admin_tables';
		// $this->template->get_admin_template($data);
		//$this->load->view('admin_tables', array('logged_in' => $this->logged_in));

		$this->load->view('reference');
	}

	public function statistics()
	{
		$data['error'] = '';
		$data['usernumber']  = $this->getusernumber();
		// $data['content_page'] = 'admin/admin_stats';
		// $this->template->get_admin_template($data);
		//$this->load->view('admin_stats', array('logged_in' => $this->logged_in));

		$this->load->view('admin_stats', $data);
	}

	public function forms()
	{
		$data['error'] = '';
		$data['usernumber']  = $this->getusernumber();
		// $data['content_page'] = 'admin/admin_form';
		// $this->template->get_admin_template($data);
		//$this->load->view('admin_form', array('logged_in' => $this->logged_in));

		$this->load->view('admin_form', $data);
	}

	public function users()
	{
		$data['error'] = '';
		$data['usernumber']  = $this->getusernumber();
		// $data['content_page'] = 'admin/admin_user';
		// $this->template->get_admin_template($data);
		//$this->load->view('admin_user', array('logged_in' => $this->logged_in));

		$this->load->view('admin_users', $data);
	}

	public function company()
	{
		$data['error'] = '';
		$data['usernumber']  = $this->getusernumber();
		// $data['content_page'] = 'admin/admin_user';
		// $this->template->get_admin_template($data);
		//$this->load->view('admin_user', array('logged_in' => $this->logged_in));

		$this->load->view('admin_company', $data);
	}

	public function messages()
	{
		$data['error'] = '';
		$data['usernumber']  = $this->getusernumber();
		// $data['content_page'] = 'admin/admin_user';
		// $this->template->get_admin_template($data);
		//$this->load->view('admin_user', array('logged_in' => $this->logged_in));

		$this->load->view('admin_messages', $data);
	}

	public function getusernumber()
	{
          $results = $this->admin_model->usernumber();

          return $results;

          //echo '<pre>'; print_r($results); echo '</pre>';die;
	}

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */