<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//Public Registration Mechanism For 

class Registration extends CI_Controller
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
        date_default_timezone_set('Asia/Dhaka');
    }

    /*
    !--------------------------------------------------------
    !       Default Function for Homepage
    !--------------------------------------------------------
    */
    public function index()
    {
        redirect('/');

    }

    
     /*
    !--------------------------------------------------------
    !     registration   Homepage
    !--------------------------------------------------------
    */
    public function save_empployee()
    {
      // echo "<pre>";
      // print_r($_POST); die;
       date_default_timezone_set('Asia/Dhaka');

       if($this->db->where('contact',$this->input->post('contact'))->get('tbl_employee')->result_id->num_rows >0)
       {
            $this->session->set_flashdata('error', 'Contact Number Already Exist');
            redirect("registration");
       }

       if($this->db->where('email',$this->input->post('email'))->get('tbl_employee')->result_id->num_rows >0)
       {
            $this->session->set_flashdata('error', 'Email Already Exist');
            redirect("registration");
       }


        $data['emp_name']   =  $this->input->post('name');
        $data['email']   =  $this->input->post('email');
        $data['password']=  md5(md5($this->input->post('password'))); 
        $data['contact'] =  $this->input->post('contact');
        $data['address'] =  $this->input->post('address');
        $data['ssc_gpa'] =  $this->input->post('ssc_gpa');
        $data['hsc_gpa'] =  $this->input->post('hsc_gpa');
        $data['experience'] = $this->input->post('experience');
        $data['preveous_company'] =$this->input->post('preveous_company');
        $data['added_date']= date('Y-m-d');
        $this->db->insert('tbl_employee',$data);

        $this->session->set_flashdata('error', 'Your registration is successful. Login');
        redirect("login");
    }

    /*
    !--------------------------------------------------------
    !     Save Employee
    !--------------------------------------------------------
    */
    public function registration()
    {
        $this->load->view('public/registration');
    }

    

    /*
    !--------------------------------------------------------
    !     Login
    !--------------------------------------------------------
    */
    public function login()
    {
        if ($this->session->has_userdata('employee_login'))
        {
            redirect('/');
        } 
        $this->load->view('public/login');
    }

    /*
    !--------------------------------------------------------
    !   Login Action For Employee 
    !--------------------------------------------------------
    */
    public function login_action()
    {
        
        $email      = $this->input->post("username");
        $password   = md5(md5($this->input->post("password")));

        $status = $this->db->where(['email'=>$email, 'password'=>$password])->get('tbl_employee');

        if ($status->result_id->num_rows > 0) {
           $data     = $status->result_object();
           $session  = array(
                    'employee_login'       => true,
                    'employee_id'    => $data[0]->emp_id,
                    'employee_name'  => $data[0]->emp_name,
                    'employee_contact' => $data[0]->contact,
                    'employee_image' => $data[0]->image
            );
           
           $this->session->set_userdata($session);
           // echo "<pre>";
           // print_r($this->session); die;
           $this->session->set_flashdata('success', 'Successfully Logged in');
           redirect('/');
       }else{
            $this->session->set_flashdata('error', 'Username or password not matched');
            redirect("login");
       }
    }

    /* 
    !--------------------------------------------------------
    !     Login
    !--------------------------------------------------------
    */
    public function logout()
    {
       $this->session->sess_destroy();
       
        redirect('/');
    }

    /*
    !--------------------------------------------------------
    !      Proifle  View
    !--------------------------------------------------------
    */
    public function profile()
    {
        if (!$this->session->has_userdata('employee_login'))
        {
            $this->session->set_flashdata('error', 'First login to access profile');
            redirect('/');
        } 
        $status = $this->db->where('emp_id',$this->session->employee_id)->get('tbl_employee');
        if ($status->result_id->num_rows < 1) {
            
            redirect('/');
        }



        $data['profile'] = $status->result_object();
        //echo "<pre>";
        //print_r($data);
        $this->load->view('public/lib/header',$data);
        $this->load->view('public/profile');
        $this->load->view('public/lib/footer');
        
    }


}