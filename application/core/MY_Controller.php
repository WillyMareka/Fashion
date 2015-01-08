<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
error_reporting(1);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', '-1');

class MY_Controller extends MX_Controller
{
    public $tables, $get_userdetails, $group_combo, $sub_group_combo;
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('admin/m_admin');
        $this->load->module('auth');
        $this->load->module('template');
        $this->load->module('export');
        $this->tables = $this->m_admin->getalltables();
        $this->group_combo = $this->creategroupcombo();
        $this->sub_group_combo = $this->createsubgroupscombo();

    }

   public function showbase()
   {
    echo base_url();
   }
    public function logout()
    {
        $this->session->sess_destroy();

        redirect(base_url().'home');
    }

   public function email($id, $recepient, $subject, $message)  
    {
        $time=date('Y-m-d');
        
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => "chrisrichrads@gmail.com",
            'smtp_pass' => "joshuaSUN"
            );
        
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('chrisrichrads@gmail.com', 'SOUTHERN CROSS INSTITUTE OF TROPICAL MEDICINE');
        $this->email->to($recepient);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype("html");
        // if(!is_null($attached_file)){
        //  $this->email->attach($attached_file);
        // }
        $this->m_admin->send_mail($id, $recepient, $subject, $message);
        if($this->email->send())
            {   

               $this->m_admin->send_mail();
            } else 
            {
                show_error($this->email->print_debugger());
            }
        
    }


    public function email_attachment($id, $recepient, $subject, $message, $attached_file=null)
    {
        $time=date('Y-m-d');
       
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => "chrisrichrads@gmail.com",
            'smtp_pass' => "joshuaSUN"
            );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('chrisrichrads@gmail.com', 'MAREWILL FASHION');
        $this->email->to($recepient);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype("html");
        if(!is_null($attached_file)){
            $this->email->attach($attached_file);
        }
        
        if($this->email->send())
            {   

              
            } else 
            {
                show_error($this->email->print_debugger());
            }
    }

    


   
    public function uploader($file)
    {
        $path = '';
        $upload_path = 'assets/images/users/';
        $config['upload_path'] = './' . $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($file))
        {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            foreach ($data as $key => $value) {
                $path = base_url().$upload_path.$value['file_name'];
            }
            return $path;
        }
    }


}