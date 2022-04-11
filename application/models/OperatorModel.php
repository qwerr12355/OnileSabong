<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperatorModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function AddOperator($data)
  {
    $this->db->insert('operator', $data);
    if($this->db->affected_rows()>0){
      return true;
    }else{
      return false;
    }
  }
  public function GetAllOperator()
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('operator', 'operator.UserID = users.UserID');
    $query = $this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }else{
      return false;
    }
  }
}
