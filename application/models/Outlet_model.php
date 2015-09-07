<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outlet_model extends CI_Model {

    // table name
    private $tbl_outlet= 'outlets';
 
    public function __construct()
    {
        parent::__construct();
    }    

    // create new outlets
    function create(){
        $name       =       $this->input->post('name');
        $email      =       $this->input->post('email');
        $address    =       $this->input->post('address');
        $password   =       $this->input->post('password');
        $device_id  =       $this->input->post('device_id');
        $auth_token =       $this->input->post('auth_token');

        $array_field=    array(
                            "name"=>$name,
                            "email"=>$email,
                            "address"=>$address,
                            "password"=>$password,
                            "device_id"=>$device_id,
                            "auth_token"=>$auth_token
                        );
        return $this->db->insert("outlets", $array_field);
    }

    // delete outlets
    function delete($id){
        $data = $this->db->where('id', $id);
        $data = $this->db->delete('outlets');
        return $data;
    }


    // choose outlets before update
    function choose($id){
        $this->db->from('outlets');
        $this->db->where('id', $id);
        return $this->db->get()->result();
    }



    // update outlets
    function update(){
        $id         =       $this->input->post('id');
        $name       =       $this->input->post('name');
        $email      =       $this->input->post('email');
        $address    =       $this->input->post('address');
        $password   =       $this->input->post('password');
        $device_id  =       $this->input->post('device_id');
        $auth_token =       $this->input->post('auth_token');

        $array_field=    array(
                            "name"=>$name,
                            "email"=>$email,
                            "address"=>$address,
                            "password"=>$password,
                            "device_id"=>$device_id,
                            "auth_token"=>$auth_token
                        );        
        $this->db->where('id', $id);
        return  $this->db->update("outlets", $array_field);
    }

    
}

?>
