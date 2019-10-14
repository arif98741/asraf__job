<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
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
    !       Default Function Admin for Homepage
    !--------------------------------------------------------
    */
    public function index()
    {
        if($this->session->company || $this->session->seeker){
            redirect(base_url());
        }  
         
        $this->load->view('front/lib/header');
        $this->load->view('front/login/login');
        $this->load->view('front/lib/footer');
        
    }

        /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function login()
    {
        
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $position = $this->input->post("position");


        if ($position == 'company') {
            
            $this->company_login($email,$password);
        }elseif($position == 'seeker')
        {
            $this->seeker_login($email,$password);
        }
    }

    /*
    !-----------------------------------------
    ! Company Login
    !-----------------------------------------
    */
    public function company_login($email,$password)
    {
        $status   = $this->db->where(['email'=>$email,'password'=>md5($password)])->get('tbl_company');
        if ($status->result_id->num_rows > 0) {

           $data     = $status->row();
           $session  = array(
                    'company'        => true,
                    'company_id'     => $data->company_id,
                    'company_name'   => $data->company_name,
                    'company_author'   => $data->full_name,
                    'company_email'  =>$data->email,
            );
           $this->session->set_userdata($session);
           $this->session->set_flashdata('success', 'Successfully Logged in');
           redirect(base_url());
       }else{
            $this->session->set_flashdata('error', 'Username or password not matched');
            redirect(base_url().'login');
       }
    }

    /*
    !-----------------------------------------
    ! Seeker Login
    !-----------------------------------------
    */
    public function seeker_login($email,$password)
    {
        $status   = $this->db->where(['email'=>$email,'password'=>md5($password)])->get('seeker');
        if ($status->result_id->num_rows > 0) {

           $data     = $status->row();
           $session  = array(
                    'seeker'        => true,
                    'seeker_id'     => $data->seeker_id,
                    'seeker_name'   => $data->name,
                    'seeker_email'  =>$data->email,
            );
           $this->session->set_userdata($session);
           
           $this->session->set_flashdata('success', 'Successfully Logged in');
           redirect(base_url());
       }else{
            $this->session->set_flashdata('error', 'Username or password not matched');
            redirect(base_url().'login');
       }
    }

    

    /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'Loggeout successfully');
        redirect('admin');
    }

}