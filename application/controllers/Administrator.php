<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('user_id') <= 0 )
        {
            redirect('login');
        }

    }
//    public function view($address,$data){
//        $data['title']="";
//        $data['content']=$this->load->view($address,$data,true);
//        $this->load->view('site/index-master',$data);
//    }

    public function index()
    {
        $this->load->view('layout/admin-layout');
    }

    public function logout(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('name');
        $sdata['message']="You are successfully logout";
        $this->session->set_userdata($sdata);
        redirect('login','refresh');
    }


}
