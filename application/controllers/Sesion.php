<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesion extends CI_Controller 
{
	public function index()
	{
		$this->load->view('Administrador');
	}
}
