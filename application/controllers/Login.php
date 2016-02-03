<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('user_id')>0)
        {
            redirect('administrator', 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('layout/login-layout');
    }
    public function check_login(){
        $response=array();
        if($this->form_validation->run('login')!==false){
            $result=$this->User_model->checkLogin();
            if($result){
                $response['status']='success';
                $sdata['user_id']=$result->user_id;
                $sdata['last_name']=$result->last_name;
                $this->session->set_userdata($sdata);
            }
            else{
                $response['status']='error';
                $response['message']='Ops! Invalid username Or password';
            }
        }
        else{
            $response['status']='error';
            $response['message']=validation_errors();
        }
        echo json_encode($response);
    }
}
