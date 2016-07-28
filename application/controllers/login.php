<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */



public function __construct() {
parent::__construct();
// Load form helper library
$this->load->helper('form');

// Load form validation library
$this->load->library('form_validation');
 $this->load->model('model_user','',TRUE);

}

/*
// Load database
$this->load->model('login_database');
}*/

// Check for user login process
/*public function user_login_process() {

$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

if ($this->form_validation->run() == FALSE) {
if(isset($this->session->userdata['logged_in'])){
$this->load->view('admin_page');
}else{
$this->load->view('login_form');
}
} else {
$data = array(
'username' => $this->input->post('username'),
'password' => $this->input->post('password')
);
$result = $this->login_database->login($data);
if ($result == TRUE) {

$username = $this->input->post('username');
$result = $this->login_database->read_user_information($username);
if ($result != false) {
$session_data = array(
'username' => $result[0]->user_name,
'email' => $result[0]->user_email,
);
// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
$this->load->view('admin_page');
}
} else {
$data = array(
'error_message' => 'Invalid Username or Password'
);
$this->load->view('login_form', $data);
}
}
}*/

// Logout from admin page
/**public function logout() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Successfully Logout';
$this->load->view('login_form', $data);
}

}*/

	public function index()
	{
		$this->load->view('view_login');
	}

	public function veriflogin(){
		   
 
 echo "veriflogin start";
   //$this->form_validation->set_rules('nip', 'Username', 'trim|required|xss_clean');
  // $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
  $username = $this->input->post('NIP');
  $password = $this->input->post('password');

 
   //query the database
   $result = $this->model_user->login($username, $password);
 
//echo "<br> result= ";
if ($result) {
	 $sess_array = array();
foreach($result as $row)
     {
     	$sess_array = array(
                'ID_PEG' => $row->ID_PEG,
         'NAMA_PEG' => $row->NAMA_PEG,
         'KET' => $row->KET
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
if( $row->KET == 'User'){
	//go to user page
	redirect('arsip/view','refresh');
}
else{
	//go to admin page
}



}

else{
	echo "0";
}

/*
     if ($row->KET == 'user') {
     	//redirect('arsip/view','refresh');
     	echo "ke halaman user";
     }
     else{
     	//redirect('arsip/view_admin','refresh');
     	echo "kehalaman admin";
     }
   }
   else
   {
     //$this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
     
   }*/
 

   /*if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('view_login');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }*/

   
	}

}
