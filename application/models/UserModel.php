<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function AddUser($data)
  {
    $query=$this->db->insert('users', $data);
    if($this->db->affected_rows()>0){
      return $this->db->insert_id();
    }else{
      return false;
    }
  }
}
