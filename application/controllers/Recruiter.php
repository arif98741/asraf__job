<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Recruiter extends CI_Controller
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
    public function registration()
    {
        $data['title']      = "Recuriter Registration";
        $data['companies']  = $this->db->order_by('company_name','asc')->get('tbl_company')->result_object();

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/recruiter/registration');
        $this->load->view('public/lib/footer');
        
    }

     /*
    !--------------------------------------------------------
    !     registration   Homepage
    !--------------------------------------------------------
    */
    public function save_recuriter()
    {
       echo "<pre>";
       print_r($_POST); die;
   

       if($this->db->where('mobile',$this->input->post('mobile'))->get('employee')->result_id->num_rows >0)
       {
            $this->session->set_flashdata('error', 'Mobile Already Exist');
            redirect("recruiter/registration");
       }

       if($this->db->where('username',$this->input->post('username'))->get('employee')->result_id->num_rows >0)
       {
            $this->session->set_flashdata('error', 'Username Already Exist');
            redirect("recruiter/registration");
       }

    
       if($this->db->where('email',$this->input->post('email'))->get('employee')->result_id->num_rows >0)
       {
            $this->session->set_flashdata('error', 'Email Already Exist');
            redirect("recruiter/registration");
       }
        $data['username'] = $this->input->post('username'); 
        $data['email'] = $this->input->post('email'); 
        $data['mobile'] = $this->input->post('mobile'); 
        $data['password'] = md5($this->input->post('password')); 
        $data['gender'] = $this->input->post('gender');
        $data['fullname'] = $this->input->post('fullname'); 
        $data['company_id'] = $this->input->post('company_id'); 
        $data['country'] = $this->input->post('country'); 
        $data['state'] = $this->input->post('state'); 
        $data['city'] = $this->input->post('city');  
        $data['experience'] = $this->input->post('experience'); 
        $data['skill'] = $this->input->post('skill'); 
        $data['educational_background'] = $this->input->post('educational_background'); 
        $this->db->insert('employee',$data);    
        
        if (!empty($_FILES['resume']['name'])) {

            $config['upload_path'] = './uploads/employee/resume/';
            $config['allowed_types'] = 'docx|doc|pdf|pptx|xls|xlxs|txt|CSV|ZIP|TAR|RAR';
            $config['max_size']     = 10000;
            $config['max_width']    = 10000;
            $config['max_height']   = 10000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('resume')) {
                $upload_data = array('upload_data' => $this->upload->data());
                $data['resume'] = $upload_data['upload_data']['file_name'];
                $this->db->set(['resume'=>$data['resume']]);
                $this->db->where('id',$insert_id)->update('employee');
            }
        }
        $insert_id = $this->db->insert_id();    
        $session  = array(
                'recruiterlogin'       => true,
                'recruiter_id'         => $insert_id,
                'recruiter_fullname'   => $data['fullname'],
                'recruiter_username'   => $data['username'],
                'recruiter_email'      => $data['email']
            );
        $this->session->set_userdata($session);
        $this->session->set_flashdata('success', 'Successfully registered.');
        redirect(base_url());
    }

    
    /*
    !--------------------------------------------------------
    !       Default Function for Dashboard
    !--------------------------------------------------------
    */
    public function login()
    {
        if ($this->session->has_userdata('recruiter')) {
            redirect(base_url());
        }
        $data['title']      = "Recuriter Login";

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/recruiter/login');
        $this->load->view('public/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function login_action()
    {
        if ($this->session->has_userdata('recruiter'))
        {
            redirect(base_url());
        } 


        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));


        $status   = $this->db->where(array('username'=>$username,'password'=>$password,'designation'=>'Recruiter'))->get('employee');
        // echo '<pre>';
        // print_r($status); exit;
        // $session = [];

        if ($status->result_id->num_rows > 0) {

           $data     = $status->result_object();
           $session  = [
                'recruiterlogin'       => true,
                'recruiter_id'         => $data[0]->id,
                'recruiter_fullname'   => $data[0]->fullname,
                'recruiter_username'   => $data[0]->username,
                'recruiter_email'      => $data[0]->email
            ];
           $this->session->set_userdata($session);
           $this->session->set_flashdata('success', 'Successfully loggedin');
           redirect(base_url());
       }else{
            $this->session->set_flashdata('errors', 'Username or password not matched');
            redirect("recruiter/login");
       }

    }


     /*
    !--------------------------------------------------------
    !      Delete User
    !--------------------------------------------------------
    */
    public function logout()
    {
        if (!$this->session->has_userdata('recruiterlogin')) {
            redirect(base_url());
        }
        
        $this->session->sess_destroy();
        redirect(base_url());

    }


    /*
    !--------------------------------------------------------
    !       All Recruiters
    !--------------------------------------------------------
    */
    public function all_recruiters()
    {
        $data['title']      = "Recuriter Login";

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/recruiter/all_recruiters');
        $this->load->view('public/lib/footer');
    }

}