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
	public function Pricing()
	{
		$this->load->view('Pricing');
	}

	public function LoadDataGeneral()
	{
		$Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Wapiks->LoadDataGenerals($Stat);
	    echo json_encode($Resul);
	}
	public function LoadDataCont()
	{
		$Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Wapiks->LoadDataConts($Stat);
	    echo json_encode($Resul);
	}
	public function LoadDataHomeCont()
	{
		$Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Wapiks->LoadDataHomeConts($Stat);
	    echo json_encode($Resul);
	}
	public function LoadDataTeamHome()
	{
		$Stat = array(
        	'status'	=>	1,
        	'select'	=>	1
        );

	    $Resul = $this->Wapiks->LoadDataTeams($Stat);
	    echo json_encode($Resul);
	}
	public function LoadDataTeam()
	{
		$Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Wapiks->LoadDataTeams($Stat);
	    echo json_encode($Resul);
	}
	public function LoadDataInclude()
	{
		$Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Wapiks->LoadDataIncludes($Stat);
	    echo json_encode($Resul);
	}
	public function LoadDataPlan()
	{
		$Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Wapiks->LoadDataPlans($Stat);
	    echo json_encode($Resul);
	}
}
