<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlayerModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function AddNewPlayer($data)
  {
    $this->db->insert('player',$data);
    if($this->db->affected_rows()>0){
      return $this->db->insert_id();
    }else{
      return false;
    }
  }
  public function getAllPlayer()
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('player', 'player.UserID = users.UserID',"inner");
    $query = $this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }else{
      return false;
    }
  }
}
