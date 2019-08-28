<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_mod extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function add_record(){
        $data = array(
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'password' => $_POST['password'],
        'contant' => $_POST['contant']
        );
       $data = $this->db->insert('users',$data);
        if($data){
           return true;
        }else{
           return false;
        }
    }
    function get_all_data(){
        $query = $this->db->select('*')->from('users')->get();
        $data = $query->result();
        return $data; 
    }
    function all_content_data(){
        $query = $this->db->select('*')->from('php_content')->get();
        $data = $query->result();
        return $data; 
    }

    function update_record($id=null){
        $data = array(
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'password' => $_POST['password']
        );
       $data = $this->db->where('id',$id)->update('users', $data);
        if($data){
           return true;
        }else{
           return false;
        }
    }
    function edit_data($id=null){
      $query = $this->db->select('*')->from('users')->where('id',$id)->get();
      $data = $query->row();
      return $data; 
    }
    function delete_data($id){
       $this->db->where('id',$id);
       $this->db->delete('users');
        return true;
    }
    function content_data($id=null){
      if($id==""){
        $id = 1;
      }
      $query = $this->db->select('*')->from('php_content')->where('heading',$id)->get();
      $data = $query->row();
      return $data; 
    }

}