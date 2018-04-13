<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Removers extends CI_Model 
{

	public function RemoverIncludes($Stat)
  	{
  		$UpdateArray = array('status' => 0);
		$this->db->where($Stat);
        $this->db->set($UpdateArray);
        $this->db->update('data_include');  
        if ($this->db->affected_rows() > 0)
        	return true;
		else
			return false;
  	}

  	public function RemoverPlans($Stat)
  	{
  		$UpdateArray = array('status' => 0);
		$this->db->where($Stat);
        $this->db->set($UpdateArray);
        $this->db->update('data_plan');  
        if ($this->db->affected_rows() > 0)
        	return true;
		else
			return false;
  	}
    public function RemoverTeams($Stat)
    {
        $UpdateArray = array('status' => 0);
        $this->db->where($Stat);
        $this->db->set($UpdateArray);
        $this->db->update('data_team');  
        if ($this->db->affected_rows() > 0)
          return true;
    else
      return false;
    }
    public function RemoverBests($Stat)
    {
        $UpdateArray = array('status' => 0);
        $this->db->where($Stat);
        $this->db->set($UpdateArray);
        $this->db->update('data_cont');  
        if ($this->db->affected_rows() > 0)
          return true;
    else
      return false;
    }
    public function RemoverLists($Stat)
    {
      $UpdateArray = array('status' => 0);
        $this->db->where($Stat);
        $this->db->set($UpdateArray);
        $this->db->update('data_home_cont');  
        if ($this->db->affected_rows() > 0)
          return true;
    else
      return false;
    }
}
