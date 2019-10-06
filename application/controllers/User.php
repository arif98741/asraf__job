<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    /*
    !--------------------------------------------------------
    !       Constructor Load During Creation of Object
    !--------------------------------------------------------
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('security');
    }


    /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function login()
    {
        if ($this->session->has_userdata('login') && $this->session->role == 'admin')
        {
            redirect('admin/dashboard');
        } 
       

        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));

        $this->load->model('loginmodel');

        $status   = $this->loginmodel->login($username,$password);
        if ($status->result_id->num_rows > 0) {

           $data     = $status->result_object();
           $session  = array(
                    'login'       => true,
                    'admin'       => 'admin',
                    'admin_role'  => $data[0]->role,
                    'admin_id'    => $data[0]->serial,
                    'admin_name'  => $data[0]->admin_name,
                    'admin_role'  => $data[0]->role,
                    'admin_image' => $data[0]->admin_image
            );
           $this->session->set_userdata($session);
           $this->session->set_flashdata('success', 'সফলভাবে লগিন হয়েছে');
           redirect('admin/dashboard');
       }else{
            $this->session->set_flashdata('error', 'ইউজার নেইম অথবা পাসওয়াড সঠিক নয়');
            redirect("admin");
       }

    }

   

}