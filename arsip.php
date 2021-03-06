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

	 	$data['total_row'] = $this->arsip_model->total_arsip();
	 	$data['h'] = $this->arsip_model->view_arsip_user();
		$data['i'] = $this->arsip_model->jenis_arsip();
		 //print_r($data['total_row']);
		//echo $data['total_row'] ;
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
     

     $data['total_row'] = $this->arsip_model->total_arsip();         


     /*$this->load->library("pagination");
   
	//EDIT THIS:
	$config["base_url"] = site_url( "arsip/view_admin");
	//EDIT THIS (to get a count of number of rows. Might have to add in a criteria (category etc)
	$config['total_rows'] = $this->arsip_model->total_arsip();
	//EDIT THIS
	$config["uri_segment"] = 3;
	//EDIT THIS:
    $config["per_page"] = 5;




    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = round($choice);
	$config['use_page_numbers'] = true; // use page numbers, or use the current row number (limit offset)
	$page = ($this->uri->segment($config["uri_segment"] )) ? $this->uri->segment($config["uri_segment"] ) : 0;
	//EDIT THIS:
	//$this->data["results"] = $this->YourModel->get_posts($page,$config["per_page"]);
	 $data['h'] = $this->arsip_model->get_posts();

	// styling/html stuff
	$config['full_tag_open'] = '<ul class="pagination">';
	$config['full_tag_close'] = '</ul><!--pagination-->';
	$config['first_link'] = '&laquo; First';
	$config['first_tag_open'] = '<li class="prev page">';
	$config['first_tag_close'] = '</li>' . "\n";
	$config['last_link'] = 'Last &raquo;';
	$config['last_tag_open'] = '<li class="next page">';
	$config['last_tag_close'] = '</li>' . "\n";
	$config['next_link'] = 'Next &rarr;';
	$config['next_tag_open'] = '<li class="next page">';
	$config['next_tag_close'] = '</li>' . "\n";
	$config['prev_link'] = '&larr; Previous';
	$config['prev_tag_open'] = '<li class="prev page">';
	$config['prev_tag_close'] = '</li>' . "\n";
	$config['cur_tag_open'] = '<li class="active"><a href="">';
	$config['cur_tag_close'] = '</a></li>';
	$config['num_tag_open'] = '<li class="page">';
	$config['num_tag_close'] = '</li>' . "\n";
	$this->pagination->initialize($config);
	$data["pagination"] = $this->pagination->create_links();
*/

     $data['h'] = $this->arsip_model->view_arsip();
	 $data['i'] = $this->arsip_model->jenis_arsip();
     $this->load->view('header_admin',$data);	
	 $this->load->view('view_arsip_admin',$data);
	 //$this->load->view('view_plain',$data);
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

     $data['h'] = $this->arsip_model->view_arsip_user();
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

	public function liat_file($ID_ARSIP)
	{
		$data['h'] = $this->arsip_model->edit_arsip($ID_ARSIP);
		$this->load->view('lihat_file', $data);
	}

	public function view_by_date()
	{
		if($this->session->userdata('logged_in'))
   {

   	$data['total_row'] = $this->arsip_model->total_arsip(); 
     $session_data = $this->session->userdata('logged_in');
    
    if($session_data['KET']=='User' )
    {
    	     	$data['jenis_arsip'] = null;
 				$data['NAMA_PEG'] = $session_data['NAMA_PEG'];

		$this->load->view('header',$data);	
	 
	 	$data['h'] = $this->arsip_model->view_arsip_user();
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
        $Loker= $this->input->post('Loker');
      
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
			$this->arsip_model->insert_arsip($NO_SURAT,$JUDUL,$TANGGAL,$ID_JENIS_ARSIP,$ISI_NAME,$Keterangan,$Loker);
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
	}

	public function editing_arsip($ID_ARSIP)
	{
		$NO_SURAT=$this->input->post('NO_SURAT');
        $JUDUL= $this->input->post('JUDUL');
        $TANGGAL= $this->input->post('TANGGAL');
        $ID_JENIS_ARSIP= $this->input->post('JENIS_ARSIP');
        $Keterangan= $this->input->post('Keterangan');
        $Loker= $this->input->post('Loker');
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
			//hapus gambar yang lama 
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
		        $this->arsip_model->editing_arsip($ID_ARSIP,$NO_SURAT,$JUDUL,$TANGGAL,$ID_JENIS_ARSIP,$ISI_NAME,$Keterangan,$Loker);		        
		        redirect(base_url()."index.php/arsip/view_admin"); 
	    	}
    	}
    	else
    	{	
    		$ISI_NAME="kosong";
    		$this->arsip_model->editing_arsip($ID_ARSIP,$NO_SURAT,$JUDUL,$TANGGAL,$ID_JENIS_ARSIP,$ISI_NAME,$Keterangan,$Loker);
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
		$data['h']=$this->arsip_model->search_user($search_input);
		$data['i'] = $this->arsip_model->jenis_arsip();
		$this->load->view('view_arsip',$data);		


	 }
	 else if($session_data['KET']=='Administrator')
	 {
	 	$data['total_row'] = $this->arsip_model->total_arsip(); 
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
		$data['total_row'] = $this->arsip_model->total_arsip(); 

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
         	$data['h'] = $this->arsip_model->filter_date_user($date1,$date2);}
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
