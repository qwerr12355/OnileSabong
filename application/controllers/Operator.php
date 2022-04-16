<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Operator extends CI_Controller {
	public function index()
	{

	}
  public function AddNewOperator()
  {
		$response['error']="";
		if($this->input->post('Firstname')==""||$this->input->post('Lastname')==""||$this->input->post('GcashNumber')==""||$this->input->post('GcashName')==""||$this->input->post('Username')==""){
			$response['error']="Please fill out all required fields!";
		}else{
			if($this->input->post('Password')==$this->input->post('Cpass')){
				$IsUsernameExisted=$this->UserModel->CheckUsernameExistince($this->input->post('Username'),$this->input->post('UserID'));
	      if($IsUsernameExisted){
	        $response['error']="Username already existed";
	      }else{
					$userdata = array(
						'Username' => $this->input->post('Username'),
						'Password' => $this->input->post('Password'),
						'UserTypeID'=> 2
					);

					$lastid=$this->UserModel->AddUser($userdata);

					$operatordata = array(
						'Firstname' => $this->input->post('Firstname'),
						'Lastname' => $this->input->post('Lastname'),
						'GcashNumber' => $this->input->post('GcashNumber'),
						'GcashName' => $this->input->post('GcashName'),
						'FacebookLink' => $this->input->post('FacebookLink'),
						'UserID'=>$lastid
					);
					$insertoperator=$this->OperatorModel->AddOperator($operatordata);
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
	public function GetAllOperator()
	{
		$data=$this->OperatorModel->GetAllOperator();
		if($data){
			echo json_encode($data);
		}
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
	public function Dashboard()
	{

	}
}
