<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet extends CI_Controller {  

  public function __construct(){
    parent::__construct();
    
    // load helper
    $this->load->helper('url','form');

    // load_model
    $this->load->model('outlet_model','',TRUE);
  }


  //show view form for insert new outlet
  function create(){
    $this->load->view('outlet_create');
  }


  //update call outlet_model for create outlet
  function save(){
    if($this->input->post('submit')){
      $this->outlet_model->create();
      redirect('home');
    }
  }


  //update call outlet_model for delete outlet
  function delete($id){
      $this->outlet_model->delete($id);
      redirect('home');
  }


  //update call outlet_model for choose update outlet
  function choose($id){
      $data['get_outlet'] = $this->outlet_model->choose($id);
      $this->load->view('outlet_choose_update', $data);
  }


  //update call outlet_model for update outlet
  function update(){
      if($this->input->post('submit')){
        $this->outlet_model->update();
      redirect('home');
    }
  }
  
}
