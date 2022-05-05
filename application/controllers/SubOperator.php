<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubOperator extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  public function Dashboard()
  {
    if($_SESSION['UserTypeID']==3){
			$this->load->view('sub-operator/template/header_template_view.php');
			$this->load->view('sub-operator/sub-operator_dashboard_view');
			$this->load->view('sub-operator/template/footer_template_view.php');
		}else{
			header("Location:".site_url()."/Welcome");

		}
  }
}
