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
        // if ($this->session->has_userdata('login') && $this->session->role == 'admin')
        // {
        //     redirect('admin/dashboard');
        // }
        echo '<pre>';
        print_r($_POST); exit;
        

        $position = $this->input->post("position");
        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));

        if ($position == 'company') {
            
        }

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
           $this->session->set_flashdata('success', 'Successfully Logged in');
           redirect('admin/admin/dashboard');
       }else{
            $this->session->set_flashdata('error', 'Username or password not matched');
            redirect("admin/admin/index");
       }

    }

        /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function login()
    {
        if ($this->session->has_userdata('company'))
        {
            redirect(base_url());
        }

        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));

        $status   = $this->db->where(['username'=>$username,'password'=>md5($password)])->get('tbl_company');
        if ($status->result_id->num_rows > 0) {

           $data     = $status->row();
           $session  = array(
                    'company'        => true,
                    'company_id'     => $data->company_id,
                    'company_name'   => $data->company_name,
                    'company_autho'   => $data->full_name,
                    'company_email'  =>$data->email,
                    'companY_email'  =>$data->email,
            );
           $this->session->set_userdata($session);
           $this->session->set_flashdata('success', 'Successfully Logged in');
           echo '<pre>';
           print_r($this->session->all_userdata()); exit;

           //redirect(base_url());
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