<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administradors extends CI_Model 
{

	public function SaveIncludes($SaveData)
	{
		$this->db->insert("data_include", $SaveData);		
		if ($this->db->affected_rows() > 0) 
			return true;
		else
			return false;
	}
	public function SavePlans($SaveData)
	{
		$this->db->insert("data_plan", $SaveData);		
		if ($this->db->affected_rows() > 0) 
			return true;
		else
			return false;
	}
	public function SaveListOfMenus($SaveData)
	{
		$this->db->insert("data_home_cont", $SaveData);		
		if ($this->db->affected_rows() > 0) 
			return true;
		else
			return false;
	}
	public function SaveGenerals($SaveData)
	{
		$Stat = array('id' => 1);
		$this->db->where($Stat);
        $this->db->set($SaveData);
        $this->db->update('data_general');  
        if ($this->db->affected_rows() > 0)
        	return true;
		else
			return false;
	}
	public function SaveMeetOurTeams($SaveData)
	{
		$this->db->insert("data_team", $SaveData);		
		if ($this->db->affected_rows() > 0) 
			return true;
		else
			return false;
	}
	public function SaveBestofourfeatures($SaveData)
	{
		$this->db->insert("data_cont", $SaveData);		
		if ($this->db->affected_rows() > 0) 
			return true;
		else
			return false;
	}
}
