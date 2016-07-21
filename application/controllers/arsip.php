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
		$this->load->view('tambah_arsip');
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



}
