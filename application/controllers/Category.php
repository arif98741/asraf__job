<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
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
        
        if (!$this->session->has_userdata('login')) {
            redirect('admin/dashboard');
        }
    }

    /*
    !----------------------------------------
    ! job cat index
    !----------------------------------------
    */
    public function index()
    {
        $data['jobcats']  = $this->db->get('tbl_job_category')->result_object();
    }

    /*
    !----------------------------------------
    ! save_job 
    !----------------------------------------
    */
    
    public function save_category()
    { 
        if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
        
        $data['jobcat_name'] = $this->input->post('jobcat_name');
        $this->db->insert('tbl_job',$data);
        $this->session->set_flashdata('success', 'Data Added successfully .');
       // redirect('add-job');
    }


  


}