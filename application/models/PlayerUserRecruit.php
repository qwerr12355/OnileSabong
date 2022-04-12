<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlayerUserRecruit extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function Add($data)
  {
    $this->db->insert('userplayerrecruit',$data);
    if($this->db->affected_rows()){
      return true;
    }else{
      return false;
    }
  }
}
