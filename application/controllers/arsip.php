<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

	public function view()
	{
		$this->load->view('header');	
		$this->load->view('view_arsip');
		// $this->load->view('view_arsip_admin');
	}

	public function plain()
	{
		$this->load->view('view_plain');

	}

	public function tambah_arsip()
	{		
		$this->load->view('form_header');
		$data['h'] = $this->arsip_model->jenis_arsip();
		// print_r($data['h']);
		// echo $data['h'][0]['id_jenis_arsip'];
		$this->load->view('tambah_arsip', $data);
		$this->load->view('form_footer');
	}

	public function jenis_detail(){
		$this->load->view('header');	
		$this->load->view('view_jenis_detail');
	}

	public function view_admin()
	{
		$this->load->view('header');	
		$this->load->view('view_arsip_admin');
	}

	public function edit_arsip(){
		$this->load->view('form_header');
		$this->load->view('edit_arsip');
		$this->load->view('form_footer');
	}

	public function insert_arsip(){
		$NO_SURAT=$this->input->post('NO_SURAT');
        $JUDUL= $this->input->post('JUDUL');
        $TANGGAL= $this->input->post('TANGGAL');
        $ID_JENIS_ARSIP= $this->input->post('JENIS_ARSIP');
        $ISI= $this->input->post('ISI');

        $this->arsip_model->insert_arsip($NO_SURAT,$JUDUL,$TANGGAL,$ID_JENIS_ARSIP,$ISI);

        // $data['h'] = $this->arsip_model->insert_arsip($NO_SURAT,$JUDUL,$TANGGAL,$ID_JENIS_ARSIP,$ISI);
        // print_r($data['h']);
	}

}
