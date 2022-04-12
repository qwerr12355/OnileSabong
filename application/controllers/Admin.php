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
	public function OperatorInfo($id)
	{
		$info["info"]=$this->OperatorModel->getInfoByID($id);
		$info["accountinfo"]=$this->UserModel->getUser($id);
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
}
