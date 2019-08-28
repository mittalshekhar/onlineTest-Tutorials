<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group_mod extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function add_record(){
        $data = array(
        'quiz_group' => $_POST['group'],
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s')
        );
       $data = $this->db->insert('tbl_group',$data);
        if($data){
           return true;
        }else{
           return false;
        }
    }
    function get_all_data(){
        $query = $this->db->select('*')->from('tbl_group')->get();
        $data = $query->result();
        return $data; 
    }


    function update_record($id=null){
        $data = array(
        'quiz_group' => $_POST['group'],
        'status' => 1,
        'updated_at' => date('Y-m-d H:i:s')
      
        );
       $data = $this->db->where('id',$id)->update('tbl_group', $data);
        if($data){
           return true;
        }else{
           return false;
        }
    }
    function edit_data($id=null){
      $query = $this->db->select('*')->from('tbl_group')->where('id',$id)->get();
      $data = $query->row();
      return $data; 
    }
    function delete_data($id){
       $this->db->where('id',$id);
       $this->db->delete('tbl_group');
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