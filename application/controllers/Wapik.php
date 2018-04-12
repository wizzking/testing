<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wapik extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Wapiks");
	}

	public function index()
	{
		$this->load->view('Home');
	}
	public function AboutUs()
	{
		$this->load->view('AboutUs');
	}
	public function ContactUs()
	{
		$this->load->view('ContactUs');
	}

	public function LoadDataGeneral()
	{
		$Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Wapiks->LoadDataGenerals($Stat);
	    echo json_encode($Resul);
	}
}
