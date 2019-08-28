<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz_mod extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function add_record(){
        $data = array(
        'question' => $_POST['question'],
        'answer' => $_POST['answer'],
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s')
        );
       $data = $this->db->insert('quiz_question',$data);
        if($data){
           return true;
        }else{
           return false;
        }
    }

    function add_options(){
        $data = array(
        'quiz_group' => $_POST['group'],
        'question'   => $_POST['question'],
        'answer'     => $_POST['answer'],
        'options1'   => $_POST['options1'],
        'options2'   => $_POST['options2'],
        'options3'   => $_POST['options3'],
        'options4'   => $_POST['options4'],
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s')
        );
       $data = $this->db->insert('quiz_option',$data);
        if($data){
           return true;
        }else{
           return false;
        }
    }

    function get_all_data(){
        $query = $this->db->select('*')->from('quiz_question')->get();
        $data = $query->result();
        return $data; 
    }
   
   function get_group_data(){
        $query = $this->db->select('*')->from('tbl_group')->get();
        $data = $query->result();
        return $data; 
    }
       function get_all_data2(){
        $query = $this->db->select('qo.*,qq.question,tg.quiz_group')->from('quiz_option as qo')->join('quiz_question as qq', 'qq.id = qo.question','left')->join('tbl_group as tg', 'tg.id = qo.quiz_group','left')->get();
        $data = $query->result();
        return $data; 
    }
    function all_content_data(){
        $query = $this->db->select('*')->from('php_content')->get();
        $data = $query->result();
        return $data; 
    }
   function edit_data($id=null){
      $query = $this->db->select('*')->from('quiz_question')->where('id',$id)->get();
      $data = $query->row();
      return $data; 
    }

    function edit_options($id=null){
      $query = $this->db->select('*')->from('quiz_option')->where('id',$id)->get();
      $data = $query->row();
      return $data; 
    }
    function update_record($id=null){
        $data = array(
        'question' => $_POST['question'],
        'answer' => $_POST['answer'],
        'status' => 1,
        'updated_at' => date('Y-m-d H:i:s')
        );
       $data = $this->db->where('id',$id)->update('quiz_question', $data);
        if($data){
           return true;
        }else{
           return false;
        }
    }
    
    function delete_data($id){
       $this->db->where('id',$id);
       $this->db->delete('users');
        return true;
    }
    function question_data($id=null){
      if($id==""){
        $id = 1;
      }
       $query = $this->db->select('qo.*,qq.question')->from('quiz_option as qo')->join('quiz_question as qq', 'qq.id = qo.question','left')->where('qo.id',$id)->get();
      $data = $query->row();
      return $data; 
    }


     function question_data2($id=null){
       $query = $this->db->select('qo.*,qq.question')->from('quiz_option as qo')->join('quiz_question as qq', 'qq.id = qo.question','left')->get();
      $data = $query->result();
      return $data; 
    }
    function count_data($id=null){
       $query = $this->db->select('qo.*,qq.question')->from('quiz_option as qo')->join('quiz_question as qq', 'qq.id = qo.question','left')->where('qo.quiz_group',$id)->get();
      $data = $query->result();
      return $data; 
    }

}