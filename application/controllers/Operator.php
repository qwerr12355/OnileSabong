<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Operator extends CI_Controller {
	public function index()
	{
		parent::__construct();

	}
	public function MoreInfo($id)
	{
		$info["info"]=$this->OperatorModel->getInfoByID($id);
		$info["accountinfo"]=$this->UserModel->getUser($id);
		$this->load->view('admin/operator_more_info_view.php',$info);
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
}
