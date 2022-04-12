<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->model('UserModel');
  }
  public function AddUser($data)
  {
    $data = array(
      'Username' => $this->input->post('Username'),
      'Password' => $this->input->post('Password'),
    );
    return $query;
  }
  public function UpdateUser()
  {
    $where = array('UserID' => $this->input->post('UserID'));
    $data = array(
      'Username' => $this->input->post('Username'),
      'Password' => $this->input->post('Password')
    );
    $datas["UsernameExist"]=false;
    $datas["OldPasswordIncorrect"]=false;
    $IsUsernameExisted=$this->UserModel->CheckUsernameExistince($this->input->post('Username'));
    if($IsUsernameExisted){
      $datas["UsernameExist"]=true;
    }

    $whereoldpass = array('Password' => $this->input->post('OldPass'), 'UserID'=>$this->input->post('UserID') );
    if($this->UserModel->getOldPassword($whereoldpass)==false){
      $datas["OldPasswordIncorrect"]=true;
    }
    if($IsUsernameExisted||$datas["OldPasswordIncorrect"]){

    }else{
      $updatequery=$this->UserModel->UpdateUser($where,$data);
      if($updatequery){
        $datas["success"]=true;
      }
    }
    echo json_encode($datas);
  }
  public function Authenticate()
  {
    $where = array(
      'Username' => $this->input->post('Username'),
      'Password' => $this->input->post('Password')
    );
    $result['error']="";
    $users=$this->UserModel->authentication($where);
    if($users){
      if($users->Username==$this->input->post('Username')&&$users->Password==$this->input->post('Password')){
        $result['UserTypeID']=$users->UserTypeID;
        $sessiondata = array(
          'UserID' => $users->UserID,
          'Username' => $users->Username,
          'UserTypeID' => $users->UserTypeID
        );
        $this->session->set_userdata($sessiondata);
      }else{
        $result['error']="Invalid Username. Check capslock.";
      }
    }else{
      $result['error']="Invalid Username";
    }
    echo json_encode($result);
  }
  public function Logout()
  {
    $this->session->sess_destroy();
    header("Location:".site_url()."/Welcome");
  }

}
