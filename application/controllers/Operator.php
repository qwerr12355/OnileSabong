<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Operator extends CI_Controller {
	public function index()
	{

	}
	public function UpdateOperator()
	{
		$response['error']="";
		if($this->input->post('Firstname')==""||$this->input->post('Lastname')==""||$this->input->post('GcashNumber')==""||$this->input->post('GcashName')==""||$this->input->post('Username')=="")
		{
			$response['error']="Please fill out all fields.";

		}else{
			$IsUsernameExisted=$this->UserModel->CheckUsernameExistince($this->input->post('Username'),$this->input->post('UserID'));
      if($IsUsernameExisted){
        $response['error']="Username already existed";
      }else{
				$datas = array(
					'Firstname' => $this->input->post('Firstname'),
					'Lastname' => $this->input->post('Lastname'),
					'GcashNumber' => $this->input->post('GcashNumber'),
					'FacebookLink' => $this->input->post('FacebookLink'),
					'GcashName' => $this->input->post('GcashName')
				);
				$userwhere = array('UserID' => $this->input->post('UserID'));
        $userdata = array('Username' => $this->input->post('Username'));
				$where = array('OperatorID' => $this->input->post('OperatorID') );
				if($this->OperatorModel->updateOperator($where,$datas)||$this->UserModel->UpdateUser($userwhere,$userdata)){
					$response['success']=true;
				}
			}

		}
		echo json_encode($response);
	}
	public function GetSubOperatorUserRecruits()
	{
		$result['success']=false;
		$where = array(
			'UserTypeID' => 3,
			'RecruiterID' => $_SESSION['UserID']
		);
		$query=$this->UserModel->GetUserRecruits($where);
		if($query){
			$result['user']=$query;
			echo json_encode($query);
		}
	}
	public function GetMasterAgentUserRecruits()
	{
		$result['success']=false;
		$where = array(
			'UserTypeID' => 4,
			'RecruiterID' => $_SESSION['UserID']
		);
		$query=$this->UserModel->GetUserRecruits($where);
		if($query){
			$result['user']=$query;
			echo json_encode($query);
		}
	}
	public function GetSubAgentUserRecruits()
	{
		$result['success']=false;
		$where = array(
			'UserTypeID' => 5,
			'RecruiterID' => $_SESSION['UserID']
		);
		$query=$this->UserModel->GetUserRecruits($where);
		if($query){
			$result['user']=$query;
			echo json_encode($query);
		}
	}
	public function GetPlayerUserRecruits()
	{
		$result['success']=false;
		$where = array(
			'UserTypeID' => 6,
			'RecruiterID' => $_SESSION['UserID']
		);
		$query=$this->UserModel->GetUserRecruits($where);
		if($query){
			$result['user']=$query;
			echo json_encode($query);
		}
	}
	public function AddNewSubOperator()
	{
		$response['error']="";
		if($this->input->post('Firstname')==""||$this->input->post('Lastname')==""||$this->input->post('Username')==""){
			$response['error']="Please fill out all required fields!";
		}else{
			if($this->input->post('Password')==$this->input->post('ConfirmPassword')){
				$IsUsernameExisted=$this->UserModel->CheckUsernameExistince($this->input->post('Username'),$this->input->post('UserID'));
	      if($IsUsernameExisted){
	        $response['error']="Username already existed";
	      }else{
					$userdata = array(
						'Username' => $this->input->post('Username'),
						'Password' => $this->input->post('Password'),
						'UserTypeID'=> 3
					);

					$lastid=$this->UserModel->AddUser($userdata);

					$userinfodata = array(
						'Firstname' => $this->input->post('Firstname'),
						'Lastname' => $this->input->post('Lastname'),
						'GcashNumber' => $this->input->post('GcashNumber'),
						'GcashName' => $this->input->post('GcashName'),
						'FBLink' => $this->input->post('FacebookLink'),
						'UserID'=>$lastid
					);
					$userrecruitdata = array(
						'UserID' => $lastid,
						'RecruiterID' => $_SESSION['UserID']
					);
					$this->UserRecruiterModel->Add($userrecruitdata);
					$insertoperator=$this->UserInfoModel->Add($userinfodata);
					if($insertoperator){
						$response['success']=true;
					}
				}
			}else{
				$response['error']="Password and confirm password didn't match.";
			}
		}
		echo json_encode($response);
	}
	public function AddNewMasterAgent()
	{
		$response['error']="";
		if($this->input->post('Firstname')==""||$this->input->post('Lastname')==""||$this->input->post('Username')==""){
			$response['error']="Please fill out all required fields!";
		}else{
			if($this->input->post('Password')==$this->input->post('ConfirmPassword')){
				$IsUsernameExisted=$this->UserModel->CheckUsernameExistince($this->input->post('Username'),$this->input->post('UserID'));
	      if($IsUsernameExisted){
	        $response['error']="Username already existed";
	      }else{
					$userdata = array(
						'Username' => $this->input->post('Username'),
						'Password' => $this->input->post('Password'),
						'UserTypeID'=> 4
					);

					$lastid=$this->UserModel->AddUser($userdata);

					$userinfodata = array(
						'Firstname' => $this->input->post('Firstname'),
						'Lastname' => $this->input->post('Lastname'),
						'GcashNumber' => $this->input->post('GcashNumber'),
						'GcashName' => $this->input->post('GcashName'),
						'FBLink' => $this->input->post('FacebookLink'),
						'UserID'=>$lastid
					);
					$userrecruitdata = array(
						'UserID' => $lastid,
						'RecruiterID' => $_SESSION['UserID']
					);
					$this->UserRecruiterModel->Add($userrecruitdata);
					$insertoperator=$this->UserInfoModel->Add($userinfodata);
					if($insertoperator){
						$response['success']=true;
					}
				}
			}else{
				$response['error']="Password and confirm password didn't match.";
			}
		}
		echo json_encode($response);
	}
	public function AddNewSubAgent()
	{
		$response['error']="";
		if($this->input->post('Firstname')==""||$this->input->post('Lastname')==""||$this->input->post('Username')==""){
			$response['error']="Please fill out all required fields!";
		}else{
			if($this->input->post('Password')==$this->input->post('ConfirmPassword')){
				$IsUsernameExisted=$this->UserModel->CheckUsernameExistince($this->input->post('Username'),$this->input->post('UserID'));
	      if($IsUsernameExisted){
	        $response['error']="Username already existed";
	      }else{
					$userdata = array(
						'Username' => $this->input->post('Username'),
						'Password' => $this->input->post('Password'),
						'UserTypeID'=> 5
					);

					$lastid=$this->UserModel->AddUser($userdata);

					$userinfodata = array(
						'Firstname' => $this->input->post('Firstname'),
						'Lastname' => $this->input->post('Lastname'),
						'GcashNumber' => $this->input->post('GcashNumber'),
						'GcashName' => $this->input->post('GcashName'),
						'FBLink' => $this->input->post('FacebookLink'),
						'UserID'=>$lastid
					);
					$userrecruitdata = array(
						'UserID' => $lastid,
						'RecruiterID' => $_SESSION['UserID']
					);
					$this->UserRecruiterModel->Add($userrecruitdata);
					$insertoperator=$this->UserInfoModel->Add($userinfodata);
					if($insertoperator){
						$response['success']=true;
					}
				}
			}else{
				$response['error']="Password and confirm password didn't match.";
			}
		}
		echo json_encode($response);
	}
	public function AddNewPlayer()
	{
		$response['error']="";
		if($this->input->post('Firstname')==""||$this->input->post('Lastname')==""||$this->input->post('Username')==""){
			$response['error']="Please fill out all required fields!";
		}else{
			if($this->input->post('Password')==$this->input->post('ConfirmPassword')){
				$IsUsernameExisted=$this->UserModel->CheckUsernameExistince($this->input->post('Username'),$this->input->post('UserID'));
	      if($IsUsernameExisted){
	        $response['error']="Username already existed";
	      }else{
					$userdata = array(
						'Username' => $this->input->post('Username'),
						'Password' => $this->input->post('Password'),
						'UserTypeID'=> 6
					);

					$lastid=$this->UserModel->AddUser($userdata);

					$userinfodata = array(
						'Firstname' => $this->input->post('Firstname'),
						'Lastname' => $this->input->post('Lastname'),
						'GcashNumber' => $this->input->post('GcashNumber'),
						'GcashName' => $this->input->post('GcashName'),
						'FBLink' => $this->input->post('FacebookLink'),
						'UserID'=>$lastid
					);
					$userrecruitdata = array(
						'UserID' => $lastid,
						'RecruiterID' => $_SESSION['UserID']
					);
					$this->UserRecruiterModel->Add($userrecruitdata);
					$insertoperator=$this->UserInfoModel->Add($userinfodata);
					if($insertoperator){
						$response['success']=true;
					}
				}
			}else{
				$response['error']="Password and confirm password didn't match.";
			}
		}
		echo json_encode($response);
	}
	public function Dashboard()
	{
		if($_SESSION['UserTypeID']==2){
			$this->load->view('operator/template/header_template_view.php');
			$this->load->view('operator/operator_dashboard_view');
			$this->load->view('operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");

		}
	}
	public function WalletDeposit()
	{
		if($_SESSION['UserTypeID']==2){
			$this->load->view('operator/template/header_template_view.php');
			$this->load->view('operator/wallet_deposit_view');
			$this->load->view('operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
	}
	public function GetUserByUserTypeID($utype=NULL)
	{
		$result['success']=false;
		$where = array(
			'UserTypeID' => $this->input->post('UserTypeID'),
			'RecruiterID' => $_SESSION['UserID']
		);
		$query=$this->UserModel->GetUsersByUserType($where);
		if($query){
			$result['user']=$query;
			echo json_encode($query);
		}
	}
	public function DepositWallet()
	{
		$debitquery=$this->UserWalletTransactionModel->GetUserTotalDebit($this->input->post('UserID'));
		$creditquery=$this->UserWalletTransactionModel->GetUserTotalCredit($this->input->post('UserID'));
		$debit=0;
		$credit=0;
		if($debitquery){
			$debit=$debitquery->total;
		}
		if($creditquery){
			$credit=$creditquery->total;
		}
		$lastbalance=$debit-$credit;
		$newbalance=$lastbalance+$this->input->post('Amount');
		$data = array(
			'Amount' => $this->input->post('Amount'),
			'LastBalance' => $lastbalance,
			'NewBalance' => $newbalance,
			'Amount' => $this->input->post('Amount'),
			'UserID' => $this->input->post('UserID'),
			'ProccessedBy' => $_SESSION['UserID'],
			'Details' => $this->input->post('Details'),
			'Description' => "Operator deposit",
			'Type' => "Debit"
		);

		$result['success']=false;
		$result['lastbalance']=$lastbalance;
		$result['newbalance']=$newbalance;
		if($_SESSION['Password']==$this->input->post('Password')){
			if($this->UserWalletTransactionModel->Add($data)){
				$result['success']=true;
				$userdata = array('WalletBalance' => $newbalance );
				$whereuser = array('UserID' => $this->input->post('UserID') );
				$this->UserModel->UpdateUser($whereuser,$userdata);
			}
		}else{
			$result['error']="Password was incorrect!";
		}
		echo json_encode($result);
	}
	public function SubOperatorList()
	{
		if($_SESSION['UserTypeID']==2){
			$this->load->view('operator/template/header_template_view.php');
			$this->load->view('operator/sub-operator_list_view');
			$this->load->view('operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");

		}
	}
	public function SubOperatorInfo($id)
	{
		$info['masteragent']=$this->UserModel->GetUsersByUserType($where = array('UserTypeID' => 4,'RecruiterID' => $id));
		$info['subagent']=$this->UserModel->GetUsersByUserType($where = array('UserTypeID' => 5,'RecruiterID' => $id));
		$info['player']=$this->UserModel->GetUsersByUserType($where = array('UserTypeID' => 6,'RecruiterID' => $id));
		$info["info"]=$this->UserInfoModel->GetUserInfoByUserID($id);
		$info["walletlogs"]=$this->UserWalletTransactionModel->GetWalletLogs($id);

		if($_SESSION['UserTypeID']==2&&$info['info']->RecruiterID==$_SESSION['UserID']){
			$this->load->view('operator/template/header_template_view.php',$info);
			$this->load->view('operator/sub-operator_info_view.php');
			$this->load->view('operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
	}
	public function MasterAgentList()
	{
		if($_SESSION['UserTypeID']==2){
			$this->load->view('operator/template/header_template_view.php');
			$this->load->view('operator/master_agent_list_view');
			$this->load->view('operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");

		}
	}
	public function MasterAgentInfo($id)
	{
		$info['subagent']=$this->UserModel->GetUsersByUserType($where = array('UserTypeID' => 5,'RecruiterID' => $id));
		$info['player']=$this->UserModel->GetUsersByUserType($where = array('UserTypeID' => 6,'RecruiterID' => $id));
		$info["info"]=$this->UserInfoModel->GetUserInfoByUserID($id);
		$info["walletlogs"]=$this->UserWalletTransactionModel->GetWalletLogs($id);
		$where = array(
			'UserTypeID' => 4,
			'RecruiterID' => $id
		);
		$query=$this->UserModel->GetUsersByUserType($where);
		$info['masteragent']=$this->UserModel->GetUsersByUserType($where);
		if($_SESSION['UserTypeID']==2&&$info['info']->RecruiterID==$_SESSION['UserID']){
			$this->load->view('operator/template/header_template_view.php',$info);
			$this->load->view('operator/master_agent_info_view.php');
			$this->load->view('operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
	}
	public function SubAgentList()
	{
		if($_SESSION['UserTypeID']==2){
			$this->load->view('operator/template/header_template_view.php');
			$this->load->view('operator/sub-agent_list_view');
			$this->load->view('operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");

		}
	}
	public function SubAgentInfo($id)
	{
		$info['player']=$this->UserModel->GetUsersByUserType($where = array('UserTypeID' => 6,'RecruiterID' => $id));
		$info["info"]=$this->UserInfoModel->GetUserInfoByUserID($id);
		$info["walletlogs"]=$this->UserWalletTransactionModel->GetWalletLogs($id);

		if($_SESSION['UserTypeID']==2&&$info['info']->RecruiterID==$_SESSION['UserID']){
			$this->load->view('operator/template/header_template_view.php',$info);
			$this->load->view('operator/sub-agent_info_view.php');
			$this->load->view('operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
	}
	public function PlayerList()
	{
		if($_SESSION['UserTypeID']==2){
			$this->load->view('operator/template/header_template_view.php');
			$this->load->view('operator/player_list_view');
			$this->load->view('operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");

		}
	}
	public function PlayerInfo($id)
	{
		$info["info"]=$this->UserInfoModel->GetUserInfoByUserID($id);
		$info["walletlogs"]=$this->UserWalletTransactionModel->GetWalletLogs($id);

		if($_SESSION['UserTypeID']==2&&$info['info']->RecruiterID==$_SESSION['UserID']){
			$this->load->view('operator/template/header_template_view.php',$info);
			$this->load->view('operator/player_info_view.php');
			$this->load->view('operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");
		}
	}
}
