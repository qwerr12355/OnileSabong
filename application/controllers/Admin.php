<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{

	}
  public function OperatorList()
  {
		if($_SESSION['UserTypeID']==1){
			$this->load->view('admin/template/header_template_view.php');
			$this->load->view('admin/master_operator_page.php');
			$this->load->view('admin/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
  }
	public function OperatorInfo($operatorid)
	{
		$info["info"]=$this->OperatorModel->getInfoByID($operatorid);
		if($_SESSION['UserTypeID']==1){
			$this->load->view('admin/template/header_template_view.php',$info);
			$this->load->view('admin/operator_more_info_view.php');
			$this->load->view('admin/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
	}
	public function PlayerList()
	{
		$this->load->view('admin/template/header_template_view.php');
		$this->load->view('admin/player_list_view.php');
		$this->load->view('admin/template/footer_template_view.php');
	}
	public function PlayerInfo($playerid,$userid)
	{
		$info['pwallettransaction']=$this->PlayerWalletTransactionModel->getPlayerTransaction($playerid);
		$info["info"]=$this->PlayerModel->getInfoByID($playerid);
		$info["accountinfo"]=$this->UserModel->getUser($userid);
		if($_SESSION['UserTypeID']==1){
			$this->load->view('admin/template/header_template_view.php',$info);
			$this->load->view('admin/player_info_view.php');
			$this->load->view('admin/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
	}
	public function AgentList()
	{
		if($_SESSION['UserTypeID']==1){
			$this->load->view('admin/template/header_template_view.php');
			$this->load->view('admin/agent_list_view');
			$this->load->view('admin/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
	}
	public function AgentInfo($playerid)
	{
		if($_SESSION['UserTypeID']==1){
			$agentinfo['info']=$this->AgentModel->GetAgentInfo($playerid);
			$this->load->view('admin/template/header_template_view.php');
			$this->load->view('admin/agent_info_view',$agentinfo);
			$this->load->view('admin/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");

		}

	}
	public function Dashboard()
	{
		if($_SESSION['UserTypeID']==1){
			$this->load->view('admin/template/header_template_view.php');
			$this->load->view('admin/admin_dashboard_view');
			$this->load->view('admin/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");

		}

	}
	public function Events()
	{
		if($_SESSION['UserTypeID']==1){
			$this->load->view('admin/template/header_template_view.php');
			$this->load->view('admin/event_list_view');
			$this->load->view('admin/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");

		}

	}
	public function EventInfo($eventid)
	{
		$data['eventinfo']=$this->EventModel->GetEventByID($eventid);
		if($_SESSION['UserTypeID']==1){
			$this->load->view('admin/template/header_template_view.php');
			$this->load->view('admin/event_info_view',$data);
			$this->load->view('admin/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");

		}

	}
	public function EventControls($id)
	{
		$data['EventID']=$id;
		$data['eventinfo']=$this->EventModel->GetEventByID($id);
		if($_SESSION['UserTypeID']==1){
			$this->load->view('admin/template/header_template_view.php');
			$this->load->view('admin/event_controls_view',$data);
			$this->load->view('admin/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
	}
	public function WalletDeposit()
	{
		if($_SESSION['UserTypeID']==1){
			$this->load->view('admin/template/header_template_view.php');
			$this->load->view('admin/wallet_deposit_view');
			$this->load->view('admin/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
	}
}
