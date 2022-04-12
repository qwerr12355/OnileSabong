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
  public function getInfoByID($id)
  {
    $where = array('UserID' => $id );
    $this->db->where($where);
		$query=$this->db->get('operator');
    if(isset($query)){
  		return $query->row();
    }
  }
  public function GetAllOperator()
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('operator', 'operator.UserID = users.UserID',"right");
    $query = $this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }else{
      return false;
    }
  }
  public function updateOperator($where,$data)
  {
    $this->db->where($where);
    $query=$this->db->update('operator',$data);
    if($this->db->affected_rows()>0){
      return true;
    }else{
      return false;
    }
  }
}
