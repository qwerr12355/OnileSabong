<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  public function GetAllEvent()
  {
    $eventdata=$this->EventModel->getAllEvent();
    echo json_encode($eventdata);
  }
  public function AddEvent()
  {
    $data = array(
      'EventName' => $this->input->post('EventName'),
      'EventDescription' => $this->input->post('EventDescription'),
      'StartDate' => $this->input->post('StartDate'),
      'EndDate' => $this->input->post('EndDate')
    );
    if($this->EventModel->Add($data)){
      $response['success']=true;
      echo json_encode($response);
    }
  }
  public function OpenEvent()
  {
    $where = array('EventID' => $this->input->post('EventID') );
    $data = array('Status' => 'Open' );
    if($this->EventModel->Update($where,$data)){
      $response['success']=true;
      echo json_encode($response);
    }
  }
  public function CloseEvent()
  {
    $where = array('EventID' => $this->input->post('EventID') );
    $data = array('Status' => 'Closed' );
    if($this->EventModel->Update($where,$data)){
      $response['success']=true;
      echo json_encode($response);
    }
  }
  public function UpdateEventInfo()
  {
    $where = array('EventID' => $this->input->post('EventID') );
    $data = array(
      'EventName' => $this->input->post('EventName'),
      'EventDescription' => $this->input->post('EventDescription'),
      'iframe' =>  $this->input->post('Iframe')
    );
    if($this->EventModel->Update($where,$data)){
      $response['success']=true;
      echo json_encode($response);
    }
  }
}
