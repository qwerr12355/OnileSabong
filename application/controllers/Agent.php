<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  public function GetAllAgents()
  {
    $result=$this->AgentModel->GetAllAgents();
    echo json_encode($result);
  }
  public function AddAgent()
  {
    $userdata = array(
      'Username' => $this->input->post('Username'),
      'Password' => $this->input->post('Password'),
      'UserTypeID' => 3
    );
    $lastuserid=$this->UserModel->AddUser($userdata);
    $agentdata = array(
      'Firstname' => $this->input->post('Firstname'),
      'Lastname' => $this->input->post('Lastname'),
      'Gcashnumber' => $this->input->post('GcashNumber'),
      'GcashName' => $this->input->post('GcashName'),
      'FacebookLink' => $this->input->post('FacebookLink'),
      'UserID' => $lastuserid
    );

    if($this->AgentModel->AddAgent($agentdata)){
      $response["success"]=true;
      echo json_encode($response);
    }
  }
  public function UpdateAgent()
  {
    $where = array('AgentID' => $this->input->post('AgentID') );
    $data = array(
      'Firstname' => $this->input->post('Firstname'),
      'Lastname' => $this->input->post('Lastname'),
      'Gcashnumber' => $this->input->post('GcashNumber'),
      'GcashName' => $this->input->post('GcashName'),
      'FacebookLink' => $this->input->post('FacebookLink')
    );
    if($this->AgentModel->UpdateAgent($where,$data)){
      $response['success']=true;
      echo json_encode($response);
    }
  }
  public function Players()
  {
    if($_SESSION['UserTypeID']==3){
			$this->load->view('agent/template/header_template_view.php');
			$this->load->view('agent/player_view.php');
			$this->load->view('agent/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
  }
  public function Dashboard()
  {
    if($_SESSION['UserTypeID']==3){
			$this->load->view('agent/template/header_template_view.php');
			$this->load->view('agent/dashboard_view.php');
			$this->load->view('agent/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
  }
  public function PlayerInfo($playerid,$userid)
  {
    $info["info"]=$this->PlayerModel->getInfoByID($playerid);
		$info["accountinfo"]=$this->UserModel->getUser($userid);
		if($_SESSION['UserTypeID']==3){
			$this->load->view('agent/template/header_template_view.php',$info);
			$this->load->view('agent/player_info_view.php');
			$this->load->view('agent/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
  }
  public function GcashToWallet()
  {
    if($_SESSION['UserTypeID']==3){
			$this->load->view('agent/template/header_template_view.php');
			$this->load->view('agent/gcash_to_wallet_view.php');
			$this->load->view('agent/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
  }
  public function GetMyPlayers()
  {
    $data=$this->PlayerModel->getPlayerByUserRecruit($_SESSION['UserID']);
    echo json_encode($data);
  }
}
