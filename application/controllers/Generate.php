<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}
    
	public function index()
	{
		//$data['hitung'] = $this->model->count();
		//$data['posts'] = $this->model->index();
		$this->session->set_flashdata('activemenu','generate');
 	   	$this->load->view('generate');
	}

	public function generated(){
		$this->session->set_flashdata('activemenu','generate');
 	   	$this->load->view('generated');
	}
	
}