<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Seeker extends CI_Controller
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
        
        $this->load->view('front/seeker/log_reg/registration');
        
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
            redirect('admin/dashboard');
        }

        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));

        $status   = $this->db->where(['username'=>$username,$password=$password])->get();
        if ($status->result_id->num_rows > 0) {

           $data     = $status->row();
           $session  = array(
                    'company'            => true,
                    'company_id'         => $data->company_id,
                    'seeker_company'    => $data->company_name,
                    'seeker_full_name'  =>$data->full_name
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
    !       Save Company
    !--------------------------------------------------------
    */
    public function save_seeker()
    {
        if ($this->db->where('email',$this->input->post('email'))->get('tbl_company')->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Email already exist');
            redirect(base_url()."employee_registration");
        }elseif($this->input->post('password') != $this->input->post('password_confirm')){
            $this->session->set_flashdata('error', 'Password not matched');
            redirect(base_url()."employee_registration");
        }else{
            $this->db->insert('tbl_company',array(
                'company_name' => $this->input->post('company_name'),
                'email' => $this->input->post('email'),
                'full_name' => $this->input->post('full_name'),
                'location' => $this->input->post('location'),
                'password' => md5($this->input->post('password'))
            ));
            $insert_id = $this->db->insert_id();

            $this->session->set_userdata(array(
                'seeker'            => true,
                'seeker_id'         => $insert_id,
                'seeker_company'    => $this->input->post('company_name'),
                'seeker_full_name'  => $this->input->post('full_name')
            ));
            $this->session->set_flashdata('success', 'Registered successfully');
            redirect(base_url());
        }
      
    }

}