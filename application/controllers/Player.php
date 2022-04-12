<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->model("PlayerModel");
    $this->load->model("PlayerUserRecruit");
  }
  public function Add()
  {
    $userdata = array(
			'Username' => $this->input->post('Username'),
			'Password' => $this->input->post('Password'),
			'UserTypeID'=> 4
		);
		$lastid=$this->UserModel->AddUser($userdata);
    $playerdata = array(
      'Firstname' => $this->input->post('Firstname'),
      'Lastname' => $this->input->post('Lastname'),
      'Gcashnumber' => $this->input->post('GcashNumber'),
      'GcashName' => $this->input->post('GcashName'),
      'FacebookLink	' => $this->input->post('FacebookLink'),
      'UserID	' =>  $lastid
    );
    $result['error']='';

    $addPlayer=$this->PlayerModel->AddNewPlayer($playerdata);
    if($addPlayer){
      $playerUserRecruitData = array('UserID' => $_SESSION['UserID'],'PlayerID'=>$addPlayer );
      $addPlayerUserRecruit=$this->PlayerUserRecruit->Add($playerUserRecruitData);
      if(!$addPlayerUserRecruit){
        $result['error']="Player Info Error";
      }
    }else{
      $result['error']="Player Info Error";
    }
    echo json_encode($result);
  }

}
