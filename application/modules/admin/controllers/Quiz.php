<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->model('quiz_mod');
                $this->load->helper('captcha');
                $this->load->library('session');
               
                
        }
	public function index()
	{      
	       $data['all_data'] = $this->quiz_mod->get_all_data();
		     $data['page'] = 'quiz/quiz_listing';
         $this->load->view('layout',$data);  
	}

    public function index2()
    {      
             $data['all_data'] = $this->quiz_mod->get_all_data2();
             //pr($data);die;
             $data['page'] = 'quiz/quiz_options_listing';
             $this->load->view('layout',$data);  
    }

     public function show_quiz_result($count_result,$ansbyuser)
    {      
             $data['result'] = $count_result;
             $data['r_data'] = $ansbyuser;
             $data['content_data']  = $this->quiz_mod->question_data2();
        
             //pr($data['r_data']);die;
         
             $data['page'] = 'quiz/quiz_result';
              $data['page_name'] = 'view';
             $this->load->view('layout',$data);  
    }

    public function add_quiz()
        {
         // pr($_POST); die;
        $this->form_validation->set_error_delimiters('<div class="form_validation_error" style="color:red; margin-left: 230px ">', '</div>');
        $this->form_validation->set_rules('question', 'Question', 'trim|required');
        $this->form_validation->set_rules('answer', 'Answer', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->quiz_mod->add_record();
            $this->session->set_flashdata('success', 'Quiz has been added successfully.');
            redirect(base_url('admin/quiz'));
        }   
            $data['page'] = 'quiz/add_quiz';

           $this->load->view('layout',$data);
        
    }

    function edit_quiz($id=null)
    {
        $id_data = $id;
        if($_POST){
        $this->form_validation->set_error_delimiters('<div class="form_validation_error" style="color:red; margin-left: 230px ">', '</div>');
         $this->form_validation->set_rules('question', 'Question', 'trim|required');
        $this->form_validation->set_rules('answer', 'Answer', 'trim|required');


        if ($this->form_validation->run() == true) {
            $result = $this->quiz_mod->update_record($id_data);
            $this->session->set_flashdata('success', 'Quiz has been updated successfully.');
            redirect('admin/quiz');
        } 
    }  
            $data['edit_data'] = $this->quiz_mod->edit_data($id_data);
            $data['page'] = 'quiz/edit_quiz';
           $this->load->view('layout',$data);
    }


    public function add_options()
        {

        $this->form_validation->set_error_delimiters('<div class="form_validation_error" style="color:red; margin-left: 230px ">', '</div>');
        $this->form_validation->set_rules('group', 'Group', 'trim|required');
        $this->form_validation->set_rules('question', 'Question', 'trim|required');
        $this->form_validation->set_rules('answer', 'Answer', 'trim|required');
        $this->form_validation->set_rules('options1', 'Options 1', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->quiz_mod->add_options();
            $this->session->set_flashdata('success', 'Quiz has been added successfully.');
            redirect(base_url('admin/quiz/index2'));
        }   
        
            $data['page'] = 'quiz/add_quiz_options';
            $data['all_data'] = $this->quiz_mod->get_all_data();
            $data['group_data'] = $this->quiz_mod->get_group_data();
           $this->load->view('layout',$data);
        
    }

    function edit_options($id=null)
    {
        $id_data = $id;
        if($_POST){
        $this->form_validation->set_error_delimiters('<div class="form_validation_error" style="color:red; margin-left: 230px ">', '</div>');
        $this->form_validation->set_rules('group', 'Group', 'trim|required');
        $this->form_validation->set_rules('question', 'Question', 'trim|required');
        $this->form_validation->set_rules('answer', 'Answer', 'trim|required');
        $this->form_validation->set_rules('options1', 'Options 1', 'trim|required');


        if ($this->form_validation->run() == true) {
            $result = $this->quiz_mod->update_record($id_data);
            $this->session->set_flashdata('success', 'Quiz has been updated successfully.');
            redirect('admin/index2');
        } 
    }  
            $data['edit_data'] = $this->quiz_mod->edit_options($id_data);
  
            $data['group_data'] = $this->quiz_mod->get_group_data();
            $data['all_data'] = $this->quiz_mod->get_all_data();
                      //pr($data);die;
            $data['page'] = 'quiz/edit_quiz_option';
           $this->load->view('layout',$data);
    }

     public function quiz_view($id=""){
        $data['content_data'] = $this->quiz_mod->question_data($id);
        $data1 = @$data['content_data']->quiz_group;
        $data['count'] = count($this->quiz_mod->count_data(@$data1));
        //$data['con_data'] = $this->quiz_mod->all_content_data();
        //$data['last_id']   = $this->get_last_data();
        $data['page'] = 'quiz/view';
        $data['page_name'] = 'view';
        $this->load->view('layout',$data);

   }

   public function quiz_view2($id=""){
        $data['content_data'] = $this->quiz_mod->question_data2();
        $data1 = @$data['content_data']->quiz_group;
        $data['count'] = count($this->quiz_mod->count_data(@$data1));
        //$data['con_data'] = $this->quiz_mod->all_content_data();
        //$data['last_id']   = $this->get_last_data();
       // pr($data);die;
        $data['page'] = 'quiz/view_data';
        $data['page_name'] = 'view';
        $this->load->view('layout',$data);

   }
    public function ajax_value($id=""){
         $data = array();
         $id =  $_POST['id'];

        $sess_data = array(
        'id' => $_POST['id'],
        'option' => $_POST['option']
        );

        if(!empty($sess_data)){
        $data = array_merge($data,$sess_data);
        }
        $data['data2'] = $data; 
        $data['content_data'] = $this->quiz_mod->question_data($id+1);
        echo json_encode($data); 
   }

     public function show_results($sess_data=""){

        $newdata = $this->session->set_userdata('user_data',$sess_data); 
        return $newdata;
          }

      public function show_result(){
        $ansbyuser = $this->input->post();

        $ans  = $this->quiz_mod->question_data2();
        $ans_data = array();
        foreach ($ans as $key => $value) {
              
              $ans_data[$key] = $value->answer;
         }
     
       $result = array_intersect($ans_data,$ansbyuser);
       $count_result = count($result);
       $this->show_quiz_result($count_result,$ansbyuser);
      }
      public function show_Answer(){
              $data['content_data']  = $this->quiz_mod->question_data2();
             
              $data['page'] = 'quiz/quiz_answer';
              $data['page_name'] = 'view';
             $this->load->view('layout',$data);
      }
    


   function delete_data(){

     $id = $_POST['id'];
     $result = $this->quiz_mod->delete_data($id);
     if($result){
         $data['msg'] = 'User data has been deleted Successfully.';
         $data['result'] = 'success';
     }else{
        $data['msg'] = 'User  has been not updated deleted Successfully.';
         $data['result'] = 'error';
     }
      echo json_encode($data);
   }
  

 
   public function pages($id=""){
        $data['content_data'] = $this->quiz_mod->content_data($id);
        $data['con_data'] = $this->quiz_mod->all_content_data();
        $data['last_id']   = $this->get_last_data();
        $data['page'] = 'project/view';
        $data['page_name'] = 'pages';
        $this->load->view('layout',$data);

   }
   public function count_data(){
       $sql  = $this->db->select('*')->from('users')->get();
       $data['count'] = $sql->result();
       $this->db->insert_id();
       return count($data); 
   }
   public function get_last_data(){
      $query  = $this->db->select('id')->from('php_content')->limit(1)->order_by('id',"DESC")->get();
      $data   = $query->row();
      return $data;
   }

    public function captcha(){

        $file = $this->session->userdata('filename');
        if(file_exists(base_url('captcha'))){
            unlink('./captcha/');

        }
$args = array(
        'img_path' => './captcha/',
        'img_url'  => base_url('captcha'),
        'font_path'    => './system/fonts/texb.ttf',    
        'word_length'    => 5,
        'font_size'    => 15,
        'pool'        => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'colors'    => array(
            'background'    => array(0,0,0),
            'border'    => array(0,0,0),
            'text'        => array(255,255,255),
            'grid'        => array(0,0,0),
        )
    );
$cap = create_captcha($args);
        $this->session->set_userdata('captcha_key', $cap['word']);
        $this->session->set_userdata('filename', $cap['filename']); //delete captcha image after successfull registration.
        $this->load->view('captcha_view', array('captcha'=>$cap));
       
}
public function register(){
  pr('<h1>User data has been register Successfully</h1>'); die;
}



public function open_modal(){

$this->load->view('captcha_view_modal');
}

public function get_all_data(){
   $variable = $this->quiz_mod->get_all_data();
   $html  = '';
     foreach ($variable as $key => $value) {
      $html .=  '<tr>'
                .'<td>'.++$key.'</td>'
                .'<td>'.$value->email.'</td>'
                .'<td>'.$value->phone.'</td>'
                .'<td>'.'Active'.'</td>'
                .'<td>'.'<a href="'.base_url('admin/users/edit/'.$value->id).'"  class="fa fa-pencil-square-o fadfa">'.'</a>'.'</td>'
                .'<td id="'.$value->id.'" class="cldjd">'.'<a  class="fa fa-eye fadfa">'.'</a>'.'</td>'
                .'<td>'.'<a onclick="delete_function("'.$value->id.'")" class="fa fa-trash fadfa" style="color: red">'.'</a>'.'</td>'
               .'</tr>';
     }
    $data['result'] = $html;
    echo json_encode($data);
    }


public function video_view(){
         $data['all_data'] = $this->quiz_mod->get_all_data();
         $data['page'] = 'welcome/youtube_page';
         $this->load->view('layout',$data);  
 
}
public function video_play(){
         $data['all_data'] = $this->quiz_mod->get_all_data();
         $data['page'] = 'welcome/video';
         $this->load->view('layout',$data);  
 
}
public function chart(){
        $data['all_data'] = $this->quiz_mod->get_all_data();
         $data['page'] = 'project/chart';
        $this->load->view('layout',$data);  
}


}










<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title> Order confirmation</title>
        <style type="text/css">
            /* EMBEDDED CSS*/

            /* Forces Hotmail to display normal line spacing. */
            .ExternalClass {
                width: 100%;
                background-color: #d9d9d9;
            }

            body {
                font-size: 13px;
                line-height: 1;
                margin: 0;
                padding: 0;
                -webkit-font-smoothing: antialiased;
                font-family: "Tahoma",sans-serif;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }
            #bodyTable {
                height: 100% !important;
                margin: 0;
                padding: 0;
                width: 100% !important;
            }
            table {
                border-collapse: collapse;
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                border-spacing: 0;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }
            td, td a {

                text-decoration: none;
            }
            td {

                line-height: 1;
            }
            img {
                border: none;
                outline: none;
                text-decoration: none;
                display: inline-block;
                height: auto
            }
            p {
                margin: 0;
                padding: 0;
            }
            a:hover, td a:hover {

                outline: none;
            }

            
            @media only screen and (max-width: 599px) {
                body[yahoo] .wrapper {
                    width: 100% !important;
                }
                body[yahoo] .al-left {
                    text-align: left !important;
                }
            }

            @media only screen and (max-width: 479px) {
                body[yahoo] .img-resize480 {
                    width: 100% !important;
                    height: auto !important;
                }
                body[yahoo] .font25 {
                    font-size: 25px !important;
                }
                body[yahoo] .font18 {
                    font-size: 18px !important;
                }
                body[yahoo] .ver-spacer {
                    height: 50px !important;
                }
                body[yahoo] .center {
                    text-align: center !important;
                }
            }

        </style>
        <!--[if (gte mso 9)|(IE)]>
        <style type="text/css">
        table {border-collapse: collapse;}
        </style>
        <![endif]-->
    </head>
    <body style="width:100% !important; color:#ffffff; font-family: Arial, Helvetica, sans-serif;font-size:14px; line-height:1 !important;background: #eaeff0; " alink="#9d470a" link="#9d470a"  text="#333333" yahoo="fix">
        <table  border="0" cellspacing="0" cellpadding="0" align="center" class="wrapper" width="600" style="background:#ffffff;">
            <!-- Start Section-1 -->
            <tr>
                <td width="20"><img src="<?php echo base_url();?>images/blank.gif" width="1" height="1" alt="" title=""/></td>
                <td>
                    <table cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tr>
                            <td height="27"><img src="<?php echo base_url();?>/images/blank.gif" width="1" height="1" alt="" title=""/></td>
                        </tr>
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tr>
                                        <td width="184"><img src="<?php echo base_url();?>/images/blank.gif" width="1" height="1" alt="" title=""/></td>
                                        <td style="center" align="center"><a href="#" style="display: inline-block;"><img src="<?php echo base_url();?>/images/logo2_trimmed.png" border="0" width="245" height="71" alt="" title=""  style="display: block;" /></a></td>
                                        <td width="184"><img src="<?php echo base_url();?>/images/blank.gif" width="1" height="1" alt="" title=""/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="30"><img src="<?php echo base_url();?>/images/blank.gif" width="1" height="1" alt="" title=""/></td>
                        </tr>
                        
                        <tr>
                            <td height="20"><img src="<?php echo base_url();?>/images/blank.gif" width="1" height="1" alt="" title=""/></td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Tahoma',sans-serif;color: #4a4a4b;font-size: 15px;text-align: left;line-height: 20px;"><?php echo nl2br($notification); ?></td>
                        </tr>
                        
                        <tr>
                            <td height="20"><img src="<?php echo base_url();?>/images/blank.gif" width="1" height="1" alt="" title=""/></td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Tahoma',sans-serif;color: #4a4a4b;font-size: 15px;text-align: left;line-height: 20px;">This message has been distributed by <a href="<?php echo fetch_value(TBL_SYSTEMCONFIG,'systemVal',array('systemName'=>'SITE_URL'));?>" style="font-weight: 700;color: #22bddb;">Cheqdin</a> on behalf of <span style="color:#e95858;font-weight:bold"><?php echo fetch_value(TBL_ADMINLOGIN, 'Fname', array('id' => $nursery_id));?></span>. </td>
                        </tr>
                        
                        <tr>
                            <td height="10"><img src="<?php echo base_url();?>/images/blank.gif" width="1" height="1" alt="" title=""/></td>
                        </tr>
                        
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td  align="left"><a href="<?php echo fetch_value(TBL_SYSTEMCONFIG,'systemVal',array('systemName'=>'SITE_URL'));?>" style="display: inline-block;"><img src="<?php echo base_url();?>/images/logo2_trimmed.png" border="0" width="122" height="35" alt="" title=""  style="display: block;" /></a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Tahoma',sans-serif;color: #4a4a4b;font-size: 14px;text-align: left;font-weight: 700;">Learn. Evolve. Inspire</td>
                        </tr>
                        <tr>
                            <td height="25"><img src="<?php echo base_url();?>/images/blank.gif" width="1" height="1" alt="" title=""/></td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td  align="left"><a href="<?php echo fetch_value(TBL_SYSTEMCONFIG,'systemVal',array('systemName'=>'FACEBOOK'));?>" style="display: inline-block;"><img src="<?php echo base_url();?>/images/new_icons/facebook.png" border="0" width="40" height="40" alt="" title=""  style="display: block;" /></a></td>
                                        <td  align="left"><a href="<?php echo fetch_value(TBL_SYSTEMCONFIG,'systemVal',array('systemName'=>'TWITTER'));?>" style="display: inline-block;"><img src="<?php echo base_url();?>/images/new_icons/twitter.png" border="0" width="40" height="40" alt="" title=""  style="display: block;" /></a></td>
                                                                                <td  align="left"><a href="<?php echo fetch_value(TBL_SYSTEMCONFIG,'systemVal',array('systemName'=>'LINKED_IN'));?>" style="display: inline-block;"><img src="<?php echo base_url();?>/images/new_icons/linkedin.png" border="0" width="40" height="40" alt="" title=""  style="display: block;" /></a></td>
                                        <td  align="left"><a href="<?php echo fetch_value(TBL_SYSTEMCONFIG,'systemVal',array('systemName'=>'YOUTUBE'));?>" style="display: inline-block;"><img src="<?php echo base_url();?>/images/new_icons/youtube.png" border="0" width="40" height="40" alt="" title=""  style="display: block;" /></a></td>
                                                                                <td  align="left"><a href="<?php echo fetch_value(TBL_SYSTEMCONFIG,'systemVal',array('systemName'=>'INSTAGRAM'));?>" style="display: inline-block;"><img src="<?php echo base_url();?>/images/new_icons/instagram.png" border="0" width="40" height="40" alt="" title=""  style="display: block;" /></a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="15"><img src="<?php echo base_url();?>/images/blank.gif" width="1" height="1" alt="" title=""/></td>
                        </tr>
                        
                    </table>
                </td>
                <td width="20"><img src="<?php echo base_url();?>/images/blank.gif" width="1" height="1" alt="" title=""/></td>
            </tr>
            <!-- End Section-1 -->
            
            <!-- End Section-1 -->

        </table>
    </body>
</html>

