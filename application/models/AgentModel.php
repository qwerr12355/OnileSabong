<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function GetAllAgents()
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('agent','agent.UserID=users.UserID');
    $query=$this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function AddAgent($data)
  {
    $this->db->insert('agent',$data);
    if($this->db->affected_rows()>0){
      return true;
    }else{
      return false;
    }
  }
  public function GetAgentInfo($userid)
  {
    $where = array('agent.UserID' => $userid );
    $this->db->select("*");
    $this->db->from("agent");
    $this->db->join("users","users.UserID=agent.UserID");
    $this->db->where($where);
    $query=$this->db->get();
    if($query->num_rows()>0){
      return  $query->row();
    }else{
      return false;
    }
  }
  public function UpdateAgent($where,$data)
  {
    $this->db->where($where);
    $this->db->update('agent',$data);
    if($this->db->affected_rows()>0){
      return true;
    }else{
      return false;
    }
  }
}
