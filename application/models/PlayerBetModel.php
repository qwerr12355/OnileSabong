<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlayerBetModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function GetCockFightTotalMeronBet($id)
  {
    $this->db->select("(SELECT SUM(BetAmount) FROM playerbet WHERE CockFightID='$id') AS total", FALSE);
    $query = $this->db->get('playerbet');
    if($query->num_rows()>0){
      return $query->row();
    }else{
      return false;
    }
  }
}
