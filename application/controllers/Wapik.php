<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wapik extends CI_Controller 
{
	public function index()
	{
		$this->load->view('Home');
	}
	public function AboutUs()
	{
		$this->load->view('AboutUs');
	}
}
