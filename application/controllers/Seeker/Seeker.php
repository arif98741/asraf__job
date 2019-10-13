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
        $this->load->view('front/lib/header');
        $this->load->view('front/seeker/log_reg/registration');
        $this->load->view('front/lib/footer');
        
    }


    /*
    !--------------------------------------------------------
    !       Save Company
    !--------------------------------------------------------
    */
    public function save_seeker()
    {
       // echo '<pre>';
       // print_r($_POST); exit;

        if ($this->db->where('email',$this->input->post('email'))->get('seeker')->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Email already exist');
            redirect(base_url()."seeker/registration");
            exit;
        }elseif ($this->db->where('mobile',$this->input->post('mobile'))->get('seeker')->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Mobile already exist');
            redirect(base_url()."seeker/registration");
            exit;
        }else{
            $this->db->insert('seeker',array(
                'name'          => $this->input->post('name'),
                'email'         => $this->input->post('email'),
                'password'      => md5($this->input->post('password')),
                'address'       => $this->input->post('address'),
            ));
            $insert_id = $this->db->insert_id();

            $this->session->set_userdata(array(
                'seeker'            => true,
                'seeker_id'         => $insert_id,
                'seeker_name'       => $this->input->post('name'),
                'seeker_email'       => $this->input->post('email'),
            ));
            $this->session->set_flashdata('success', 'Registered successfully');
            redirect(base_url());
        }
      
    }


    /*
    !--------------------------------------------------------
    !     Seeker Logout
    !--------------------------------------------------------
    */
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'Logged out successfully');
        redirect(base_url());

    }

}