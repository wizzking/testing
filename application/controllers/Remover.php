<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Remover extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Removers");
	}

	public function RemoverInclude()
	{
		$data = $this->input->post();
		$Stat = array(
        		'id'	=> 	$data['id'],
        );
		if ($this->Removers->RemoverIncludes($Stat) == true)
            echo "Removido";
        else
            echo "No Removido";
	}
	public function RemoverPlan()
	{
		$data = $this->input->post();
		$Stat = array(
        		'id'	=> 	$data['id'],
        );
		if ($this->Removers->RemoverPlans($Stat) == true)
            echo "Removido";
        else
            echo "No Removido";
	}
	public function RemoverTeam()
	{
		$data = $this->input->post();
		$Stat = array(
        		'id'	=> 	$data['id'],
        );
		if ($this->Removers->RemoverTeams($Stat) == true)
            echo "Removido";
        else
            echo "No Removido";
	}
	public function RemoverBest()
	{
		$data = $this->input->post();
		$Stat = array(
        		'id'	=> 	$data['id'],
        );
		if ($this->Removers->RemoverBests($Stat) == true)
            echo "Removido";
        else
            echo "No Removido";
	}
}
