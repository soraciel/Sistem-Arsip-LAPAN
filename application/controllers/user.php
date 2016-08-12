<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

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

 function __construct(){
		parent::__construct();
		$this->load->model("model_user"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models

	}

	public function tambah_user()
	{
		$this->load->view('form_header');
		$this->load->view('tambah_user');
		$this->load->view('form_footer');
	}

	public function view(){
		if($this->session->userdata('logged_in'))
   {


     $session_data = $this->session->userdata('logged_in');
    
    if($session_data['KET']=='Administrator')
    {
	//kalau ini user
     $data['NAMA_PEG'] = $session_data['NAMA_PEG'];
     //$this->load->view('home_view', $data);
   $this->load->view('header_admin',$data);
		$data['listUser'] = $this->model_user->getAllUser(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('view_user',$data);
	 }
	 else{
	 
	 	 show_error("Directory access is forbidden", 403, $heading = '403 Forbidden');
	 	
	 }
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}
	public function edit_user($nip)
	{
		$data['user'] = $this->model_user->getUser($nip); //Melakukan pemanggilan fungsi getProduct yang ada di dalam products_model untuk mendapatkan informasi / data mengenai produk berdasarkan productId yang dikirimkan

		$this->load->view('form_header');
		$this->load->view('edit_user',$data);
		$this->load->view('form_footer');
	}

	public function addUserDb()
	{
		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		$data = array(
			'ID_PEG' => $this->input->post('ID_PEG'),
			'NAMA_PEG' => $this->input->post('NAMA_PEG'),
			'PASSWORD' => $this->input->post('PASSWORD'),
			'KET' => $this->input->post('KET'),
			);
		$err=$this->model_user->addUser($data);

		echo $err;

	//if(	$this->model_user->addUser($data)) redirect('user/view');
	//else echo "Error";
	 //passing variable $data ke products_model
		
		// //redirect page ke halaman utama controller products

		
	}

	public function deleteUserDb($nip)
	{
		//Function yang dipanggil ketika ingin melakukan delete produk dari database
        $this->model_user->deleteUser($nip); //Memanggil fungsi deleteProduct yang ada pada model products_model dan mengirimkan parameter yaitu productId yang akan di delete
        
        redirect('user/view'); //redirect page ke halaman utama controller products
	}

	public function updateUserDb($id)
	{

		$data = array(
			'ID_PEG' => $this->input->post('ID_PEG'),
			'NAMA_PEG' => $this->input->post('NAMA_PEG'),
			'PASSWORD' => $this->input->post('PASSWORD'),
			'KET' => $this->input->post('KET'),
		);
      
		$this->model_user->updateUser($data, $id); //passing variable $data ke products_model

		redirect('user/view'); //redirect page ke halaman utama controller products
	}

	public function search()
	{	
     	$session_data = $this->session->userdata('logged_in');
     	$data['NAMA_PEG'] = $session_data['NAMA_PEG'];

		$search_input=$this->input->post('search_input');
		$this->load->view('header_admin',$data);
		$data['listUser'] = $this->model_user->search($search_input); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('view_user',$data);		
		//echo "berhasil";
	}
	


}
