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


	public function index()
	{
		$data['pesan']="";
		if(isset($data)){ $this->load->view('view_login',$data); }
		else
		$this->load->view('view_login');
	}

	public function logout()
	 {
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('login', 'refresh');
	 }

	public function veriflogin(){
		   
  $username = $this->input->post('NIP');
  $password = $this->input->post('password');

 
   //query the database
   $result = $this->model_user->login($username, $password);
 

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
	redirect('arsip/view_admin','refresh');
}



}

else{
	//echo "0";
	$data['pesan'] = "NIP dan Password salah." ;
	//redirect('login',$pesan);

	$this->load->view('view_login',$data);

}
   
	}

}
