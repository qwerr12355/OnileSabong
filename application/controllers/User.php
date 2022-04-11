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

}
