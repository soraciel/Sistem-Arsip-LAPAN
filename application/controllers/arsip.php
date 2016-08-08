<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start(); 

class arsip extends CI_Controller {

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
	function __construct() {
        parent::__construct();
        $this->load->model('arsip_model');            
       }


public function cek_ket()
{
		if($this->session->userdata('logged_in'))
   {


     $session_data = $this->session->userdata('logged_in');
    
    if($session_data['KET']=='User')
    {
	//kalau ini user
     /*$data['NAMA_PEG'] = $session_data['NAMA_PEG'];
     //$this->load->view('home_view', $data);
   $this->load->view('header_admin',$data);
		$data['listUser'] = $this->model_user->getAllUser(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('view_user',$data);*/
		return true;
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

	public function view(){		
	
	if($this->session->userdata('logged_in'))
   {

     $session_data = $this->session->userdata('logged_in');
    
    if($session_data['KET']=='User')
    {
	//kalau ini user
     $data['NAMA_PEG'] = $session_data['NAMA_PEG'];
    $data['jenis_arsip'] = "";

     //$this->load->view('home_view', $data);
     $this->load->view('header',$data);	
	 
	 	$data['h'] = $this->arsip_model->view_arsip();
		$data['i'] = $this->arsip_model->jenis_arsip();
		// print_r($data['h']);
		$this->load->view('view_arsip', $data);
		// $this->load->view('view_arsip_admin');

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

public function view_admin()
{
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
    
    if($session_data['KET']=='Administrator')
    {
	//kalau ini user
     $data['NAMA_PEG'] = $session_data['NAMA_PEG'];
     //$this->load->view('home_view', $data);
     $data['jenis_arsip'] = "";

     $data['h'] = $this->arsip_model->view_arsip();
	 $data['i'] = $this->arsip_model->jenis_arsip();
     $this->load->view('header_admin',$data);	
	 $this->load->view('view_arsip_admin',$data);
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

	public function home()
{
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
    
    if($session_data['KET']=='Administrator')
    {
	//kalau ini user
     $data['NAMA_PEG'] = $session_data['NAMA_PEG'];
     //$this->load->view('home_view', $data);
     $data['jenis_arsip'] = "";

     $data['h'] = $this->arsip_model->view_arsip();
	 $data['i'] = $this->arsip_model->jenis_arsip();
     $this->load->view('header_admin',$data);	
	 $this->load->view('view_arsip_admin',$data);
	 }

	 else if($session_data['KET']=='User')
	 {
	 	$data['NAMA_PEG'] = $session_data['NAMA_PEG'];
     //$this->load->view('home_view', $data);
     $data['jenis_arsip'] = "";

     $data['h'] = $this->arsip_model->view_arsip();
	 $data['i'] = $this->arsip_model->jenis_arsip();
     $this->load->view('header',$data);	
	 $this->load->view('view_arsip',$data);
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

	public function view_by_date()
	{
		if($this->session->userdata('logged_in'))
   {


     $session_data = $this->session->userdata('logged_in');
    
    if($session_data['KET']=='User' )
    {
    	     	$data['jenis_arsip'] = null;
 				$data['NAMA_PEG'] = $session_data['NAMA_PEG'];

		$this->load->view('header',$data);	
	 
	 	$data['h'] = $this->arsip_model->view_arsip();
		$data['i'] = $this->arsip_model->jenis_arsip();
		$this->load->view('arsip_by_date',$data);		
	 }

	 else if($session_data['KET']=='Administrator')
	 {
	 	$data['jenis_arsip'] = null;
 				$data['NAMA_PEG'] = $session_data['NAMA_PEG'];

		$this->load->view('header',$data);	
	 
	 	$data['h'] = $this->arsip_model->view_arsip();
		$data['i'] = $this->arsip_model->jenis_arsip();
		$this->load->view('header_admin',$data);	
	 	$this->load->view('arsip_by_date',$data);
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

	public function tambah_arsip()
	{		
		$this->load->view('form_header');
		$data['h'] = $this->arsip_model->jenis_arsip();
		$data['errormsg']="";
		// print_r($data['h']);
		// echo $data['h'][0]['id_jenis_arsip'];
		$this->load->view('tambah_arsip', $data);
		$this->load->view('form_footer');
	}

	public function jenis_detail(){
		$this->load->view('header');	
		$this->load->view('view_jenis_detail');
	}	

	public function edit_arsip($ID_ARSIP){
		$this->load->view('form_header');
		$data['h'] = $this->arsip_model->edit_arsip($ID_ARSIP);
		$data['i'] = $this->arsip_model->jenis_arsip();
		
		$data['errormsg']="";

		$this->load->view('edit_arsip', $data);
		$this->load->view('form_footer');
	}

	public function insert_arsip(){
		$NO_SURAT=$this->input->post('NO_SURAT');
        $JUDUL= $this->input->post('JUDUL');
        $TANGGAL= $this->input->post('TANGGAL');
        $ID_JENIS_ARSIP= $this->input->post('JENIS_ARSIP');
        $Keterangan= $this->input->post('Keterangan');

      
        $ISI = addslashes(file_get_contents($_FILES['ISI']['tmp_name']));                      

        //mencari tipe file
        $type=explode('.', $_FILES["ISI"]["name"]);
        $type=$type[count($type)-1];
        $ISI_NAME=uniqid(rand()).'.'.$type; //nama file random dimasukkan ke DB

        $config = array(
			'upload_path' => "./uploads/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'file_name' => $ISI_NAME
			// 'max_size' => "10048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			// 'max_height' => "768",
			// 'max_width' => "1024"
		);

		$this->load->library('upload', $config);
		$data['errormsg']="";
		
		if(!$this->upload->do_upload('ISI')) //upload ke directory CI
		{
			$this->load->view('form_header');
			$data['errormsg'] = "File tidak sesuai format";
			$this->load->view('tambah_arsip',$data);
			$this->load->view('form_footer');
			// echo $data['errormsg'];
			// redirect(base_url()."index.php/arsip/tambah_arsip"); 
		}
		else
		{	
			$this->arsip_model->insert_arsip($NO_SURAT,$JUDUL,$TANGGAL,$ID_JENIS_ARSIP,$ISI_NAME,$Keterangan);
			if($this->session->userdata('logged_in'))
		   {
		     $session_data = $this->session->userdata('logged_in');

				if($session_data['KET']=='User')
	        		redirect(base_url()."index.php/arsip/view"); 
	        	elseif($session_data['KET']=='Administrator')
	        		redirect(base_url()."index.php/arsip/view_admin");
	        } 
    	}
	}

	public function download($ID_ARSIP)
	{		
		$this->load->helper('download');   

        $ISI= $this->input->post('ISI');

		$data['h']= $this->arsip_model->download_arsip($ID_ARSIP);
		$filename= $data['h']['ISI'];
		$path=base_url().'uploads/'.$filename;
		$file=file_get_contents($path);

		force_download($filename, $file);

		 // make sure it's a file before doing anything!
		  // if(is_file($path))
		  // { 
		  //   // get the file mime type using the file extension
		  //   $this->load->helper('file');
		  //   $mime = get_mime_by_extension($path);
		  //   // Build the headers to push out the file properly.
		  //   header('Pragma: public');     // required
		  //   header('Expires: 0');         // no cache
		  //   header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		  //   header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($path)).' GMT');
		  //   header('Cache-Control: private',false);
		  //   header('Content-Type: '.$mime);  // Add the mime type from Code igniter.
		  //   header('Content-Disposition: attachment; filename="'.basename($name).'"');  // Add the file name
		  //   header('Content-Transfer-Encoding: binary');
		  //   header('Content-Length: '.filesize($path)); // provide file size
		  //   header('Connection: close');
		  //   readfile($path); // push it out
		  //   exit();
		  //  }
	}

	public function editing_arsip($ID_ARSIP)
	{
		$NO_SURAT=$this->input->post('NO_SURAT');
        $JUDUL= $this->input->post('JUDUL');
        $TANGGAL= $this->input->post('TANGGAL');
        $ID_JENIS_ARSIP= $this->input->post('JENIS_ARSIP');
        $Keterangan= $this->input->post('Keterangan');
		$ISI = addslashes(file_get_contents($_FILES['ISI']['tmp_name']));
		// echo $NO_SURAT." "; 
		// echo $JUDUL." ";
		// echo $TANGGAL." ";
		// echo $ID_JENIS_ARSIP." ";
		// echo $Keterangan." ";
        if(!empty($ISI))
        {	        	
        	$this->load->helper("file");
			$data['h']=$this->arsip_model->download_arsip($ID_ARSIP);
			$filename=$data['h']['ISI'];            
        	unlink(realpath("uploads").DIRECTORY_SEPARATOR.$filename);
        
	        //mencari tipe file
	        $type=explode('.', $_FILES["ISI"]["name"]);
	        $type=$type[count($type)-1];
	       	$ISI_NAME=uniqid(rand()).'.'.$type; //nama file random dimasukkan ke DB

	        while($ISI_NAME=="kosong")
	        {$ISI_NAME=uniqid(rand()).'.'.$type;} //nama file random dimasukkan ke DB

	        $config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'file_name' => $ISI_NAME
				// 'max_size' => "10048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				// 'max_height' => "768",
				// 'max_width' => "1024"
			);

			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('ISI')) //upload ke directory CI
			{
				$this->load->view('form_header');
				$data['errormsg'] = "File tidak sesuai format";
				$this->load->view('tambah_arsip',$data);
				$this->load->view('form_footer');
				redirect(base_url()."index.php/arsip/tambah_arsip"); 
			}
			else
			{
		        $this->arsip_model->editing_arsip($ID_ARSIP,$NO_SURAT,$JUDUL,$TANGGAL,$ID_JENIS_ARSIP,$ISI_NAME,$Keterangan);
		        redirect(base_url()."index.php/arsip/view_admin"); 
	    	}
    	}
    	else
    	{	
    		$ISI_NAME="kosong";
    		$this->arsip_model->editing_arsip($ID_ARSIP,$NO_SURAT,$JUDUL,$TANGGAL,$ID_JENIS_ARSIP,$ISI_NAME,$Keterangan);
	        // echo "gambar gakebaca";
	        redirect(base_url()."index.php/arsip/view_admin"); 
    	}
	}

	public function delete_arsip($ID_ARSIP)
	{		
		$this->load->helper("file");
		$data['h']=$this->arsip_model->download_arsip($ID_ARSIP);
		$filename=$data['h']['ISI'];            
        unlink(realpath("uploads").DIRECTORY_SEPARATOR.$filename);
            // echo realpath("uploads").DIRECTORY_SEPARATOR.$filename;
		$this->arsip_model->delete_arsip($ID_ARSIP);

		
		redirect(base_url()."index.php/arsip/view_admin"); 
	}


	public function search()
	{	

     	if($this->session->userdata('logged_in'))
   {

     $session_data = $this->session->userdata('logged_in');
    
    if($session_data['KET']=='User')
    {
    	    $data['jenis_arsip'] = null;
 			$data['NAMA_PEG'] = $session_data['NAMA_PEG'];

		$search_input=$this->input->post('search_input');
		$this->load->view('header',$data);	
		$data['h']=$this->arsip_model->search($search_input);
		$data['i'] = $this->arsip_model->jenis_arsip();
		$this->load->view('view_arsip',$data);		


	 }
	 else if($session_data['KET']=='Administrator')
	 {
	 		$data['jenis_arsip'] = null;
 			$data['NAMA_PEG'] = $session_data['NAMA_PEG'];

		$search_input=$this->input->post('search_input');
		$this->load->view('header',$data);	
		$data['h']=$this->arsip_model->search($search_input);
		$data['i'] = $this->arsip_model->jenis_arsip();
		$this->load->view('header_admin',$data);	
	 	$this->load->view('view_arsip_admin',$data);
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
	

	public function filter_arsip($jenis_arsip){

     	if($this->session->userdata('logged_in'))
   {


     $session_data = $this->session->userdata('logged_in');
    
    if($session_data['KET']=='User')
    {
                $data['NAMA_PEG'] = $session_data['NAMA_PEG'];
         $data['jenis_arsip'] = $jenis_arsip;
         if($jenis_arsip!= "tanggal") $data['h'] = $this->arsip_model->filter_arsip($jenis_arsip);
         else {
         	 $date1= $this->input->get('date1');
         	 $date2= $this->input->get('date2');
         	$data['h'] = $this->arsip_model->filter_date($date1,$date2);}
		$data['i'] = $this->arsip_model->jenis_arsip();
		// print_r($data['h']);
         	$this->load->view('header', $data);
		$this->load->view('view_arsip', $data);
	 }

	 else if($session_data['KET']=='Administrator')
	 {
	 	$data['NAMA_PEG'] = $session_data['NAMA_PEG'];
         $data['jenis_arsip'] = $jenis_arsip;
         if($jenis_arsip!= "tanggal") $data['h'] = $this->arsip_model->filter_arsip($jenis_arsip);
         else {
         	 $date1= $this->input->get('date1');
         	 $date2= $this->input->get('date2');
         	$data['h'] = $this->arsip_model->filter_date($date1,$date2);}
		$data['i'] = $this->arsip_model->jenis_arsip();
		// print_r($data['h']);
         	$this->load->view('header_admin', $data);
		$this->load->view('view_arsip_admin', $data);
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
}
