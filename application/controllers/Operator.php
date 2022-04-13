<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Operator extends CI_Controller {
	public function index()
	{

	}
  public function AddNewOperator()
  {
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
			echo "Success";
		}else{
			echo "Failed";
		}
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
		$datas = array(
			'Firstname' => $this->input->post('Firstname'),
			'Lastname' => $this->input->post('Lastname'),
			'GcashNumber' => $this->input->post('GcashNumber'),
			'FacebookLink' => $this->input->post('FacebookLink'),
			'GcashName' => $this->input->post('GcashName')
		);
		$where = array('OperatorID' => $this->input->post('OperatorID') );
		if($this->OperatorModel->updateOperator($where,$datas)){
			$return['success']=true;
			echo json_encode($return);
		}
	}
	public function Dashboard()
	{
		
	}
}
