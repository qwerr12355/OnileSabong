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
    if($_SESSION['UserTypeID']==4){
      $this->load->view('player/template/header_template_view');
      $this->load->view('player/player_dashboard_view');
      $this->load->view('player/template/footer_template_view');
		}else{
			header("Location:".site_url()."/Welcome");
		}

  }
  public function Event($id)
  {
    $data['EventID']=$id;
    $data['eventinfo']=$this->EventModel->GetEventByID($id);
    if($_SESSION['UserTypeID']==4){
      $this->load->view('player/template/header_template_view.php');
      $this->load->view('player/join_event_view',$data);
      $this->load->view('player/template/footer_template_view.php');
    }else{
      header("Location:".site_url()."/Welcome");
    }
  }
  public function Add()
  {
    $userdata = array(
			'Username' => $this->input->post('Username'),
			'Password' => $this->input->post('Password'),
			'UserTypeID'=> 4
		);


    $result['error']='';
    if($this->input->post('Firstname')==""||$this->input->post('Lastname')==""||$this->input->post('GcashNumber')==""||$this->input->post('GcashName')==""||$this->input->post('Username')==""||$this->input->post('Password')==""){
      $result['error']='Please input all the required information.';
    }else{
      if($this->input->post('Password')==$this->input->post('Cpass')){
        $IsUsernameExisted=$this->UserModel->CheckUsernameExistince($this->input->post('Username'),0);
        if($IsUsernameExisted){
          $result['error']="Username already existed";
        }else{
        	$lastid=$this->UserModel->AddUser($userdata);
          $playerdata = array(
            'Firstname' => $this->input->post('Firstname'),
            'Lastname' => $this->input->post('Lastname'),
            'Gcashnumber' => $this->input->post('GcashNumber'),
            'GcashName' => $this->input->post('GcashName'),
            'FacebookLink	' => $this->input->post('FacebookLink'),
            'UserID	' =>  $lastid
          );
          $addPlayer=$this->PlayerModel->AddNewPlayer($playerdata);
          if($addPlayer){
            $playerUserRecruitData = array('UserID' => $_SESSION['UserID'],'PlayerID'=>$addPlayer );
            $addPlayerUserRecruit=$this->PlayerUserRecruit->Add($playerUserRecruitData);
            if(!$addPlayerUserRecruit){
              $result['error']="Player Info Error";
            }
          }
        }
      }else{
        $result['error']='Password and Confirm Password did not match!';

      }
    }

    echo json_encode($result);
  }
  public function GetAllPlayer()
  {
    $players=$this->PlayerModel->getAllPlayer();
    echo json_encode($players);
  }
  public function UpdatePlayer()
  {
    $where = array('PlayerID' => $this->input->post('PlayerID') );
    $data = array(
			'Firstname' => $this->input->post('Firstname'),
			'Lastname' => $this->input->post('Lastname'),
			'Gcashnumber' => $this->input->post('Gcashnumber'),
			'GcashName' => $this->input->post('GcashName'),
      'FacebookLink' => $this->input->post('FacebookLink')
		);

    $response['success']=false;
    $response['error']="";

    if($this->input->post('Firstname')==""||$this->input->post('Lastname')==""||$this->input->post('Gcashnumber')==""||$this->input->post('GcashName')==""||$this->input->post('Username')==""){
      $response['error']="Please enter all required Information";
    }else{
      $IsUsernameExisted=$this->UserModel->CheckUsernameExistince($this->input->post('Username'),$this->input->post('UserID'));
      if($IsUsernameExisted){
        $response['error']="Username already existed";
      }else{
        $userwhere = array('UserID' => $this->input->post('UserID'));
        $userdata = array('Username' => $this->input->post('Username'));
        $updatePlayer=$this->PlayerModel->updatePlayer($where,$data);
        if($updatePlayer||$this->UserModel->UpdateUser($userwhere,$userdata)){
          $response['success']=true;
        }
      }
    }

    echo json_encode($response);
  }
  public function GetInfoByID()
  {
    $playerdata=$this->PlayerModel->getInfoByID($this->input->post('PlayerID'));
    echo json_encode($playerdata);
  }
  public function GetCockFightTotalMeronBet()
  {
    $query=$this->PlayerBetModel->GetCockFightTotalMeronBet($this->input->post('CockFightID'));
    $response['totalmeronbet']=0;
    if($query){
      $response['totalmeronbet']=$query;
    }
    echo json_encode($response);
  }
}
