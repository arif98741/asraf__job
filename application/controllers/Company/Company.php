<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller
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
        
        $this->load->view('front/company/log_reg/registration');
        
    }



    /*
    !--------------------------------------------------------
    !       Save Company
    !--------------------------------------------------------
    */
    public function save_company()
    {

        $email = $this->input->post('email');

        $explode = explode('@', $email);
        $data =  explode('.', $explode[1]);
        // echo '<pre>';
        // print_r($data);
        // exit;

        if ($data[0] == 'gmail') {
            $this->session->set_flashdata('error', 'You must have to use company email');
            redirect(base_url()."provider_registration");
        }elseif ($this->db->where('email',$this->input->post('email'))->get('tbl_company')->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Email already exist');
            redirect(base_url()."provider_registration");
        }elseif($this->input->post('password') != $this->input->post('password_confirm')){
            $this->session->set_flashdata('error', 'Password not matched');
            redirect(base_url()."provider_registration");
        }else{
            $this->db->insert('tbl_company',array(
                'company_name' => $this->input->post('company_name'),
                'email' => $this->input->post('email'),
                'full_name' => $this->input->post('full_name'),
                'location' => $this->input->post('location'),
                'password' => md5($this->input->post('password'))
            ));
            $insert_id = $this->db->insert_id();

            $session  = array(
                    'company'        => true,
                    'company_id'     => $insert_id,
                    'company_name'   => $this->input->post('company_name'),
                    'company_author'   => $this->input->post('full_name'),
                    'company_email'  =>$this->input->post('email'),
            );
           $this->session->set_userdata($session);
            $this->session->set_flashdata('success', 'Registered successfully');
            redirect(base_url());
        }
      
    }

    /*
    !--------------------------------------------------------
    !      Job Profile
    !--------------------------------------------------------
    */
    public function company_profile()
    {
        
        $this->load->view('front/lib/header',$data);
        $this->load->view('front/company/job/add_job');
        $this->load->view('front/lib/footer');
        
    }



    /*
    !--------------------------------------------------------
    !      Company Logout
    !--------------------------------------------------------
    */
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'Logged out successfully');
        redirect(base_url());

    }

}