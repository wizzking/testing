<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Administradors");
	}

	public function index()
	{
		$this->load->view('Admin/Administrador');
	}
	public function General()
	{
		$this->load->view('Admin/General');
	}
	public function MeetOurTeam()
	{
		$this->load->view('Admin/MeetOurTeam');
	}
	public function Bestofourfeatures()
	{
		$this->load->view('Admin/Bestofourfeatures');
	}
	public function ListOfMenu()
	{
		$this->load->view('Admin/ListOfMenu');
	}
	public function Plan()
	{
		$this->load->view('Admin/Plan');
	}
	public function Include()
	{
		$this->load->view('Admin/Include');
	}
	/*Funciones del administrador para registrar*/
	public function SavePlan()
	{
		$txtNombre = $this->input->post("txtNombre");
		$txtPrecio = $this->input->post("txtPrecio");
		$txtCada = $this->input->post("txtCada");
		$txtDescripcion = $this->input->post("txtDescripcion");
	    $SaveData = [
	      "nombre" => $txtNombre,
	      "precio" => $txtPrecio,
	      "date" => $txtCada,
	      "descripcion" => $txtDescripcion,
	      "status" => 1,
	    ];
	    if ($this->Administradors->SavePlans($SaveData) == true) 
	      echo "Exito";
	    else
	      echo "Error segundo";
	}
	public function SaveInclude()
	{
        $txtNombre = $this->input->post("txtNombre");
	    $SaveData = [
	      "name" => $txtNombre,
	      "status" => 1,
	    ];
	    if ($this->Administradors->SaveIncludes($SaveData) == true) 
	      echo "Exito";
	    else
	      echo "Error segundo";
	}
}
