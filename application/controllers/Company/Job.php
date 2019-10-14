<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller
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
        if (!$this->session->company) {
            redirect(base_url(),'refresh');
        }
    }

    /*
    !--------------------------------------------------------
    !       Default Function Admin for Homepage
    !--------------------------------------------------------
    */
    public function add_job()
    {
        $data['jobcats'] = $this->db->order_by('jobcat_name')->get('tbl_job_category')->result_object();

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/company/job/add_job');
        $this->load->view('front/lib/footer');
        
    }


    /*
    !--------------------------------------------------------
    !       Save Job
    !--------------------------------------------------------
    */
    public function save_job()
    {

        $data['job_title'] = $this->input->post('job_title');
        $data['location'] = $this->input->post('location');
        $data['job_type'] = $this->input->post('job_type');
        $data['jobcat_id'] = $this->input->post('jobcat_id');
        $data['company_id'] = $this->session->company_id;
        $data['salary'] = $this->input->post('salary');
        $data['tags'] = $this->input->post('tags');
        $data['job_description'] = $this->input->post('job_description');
        $data['deadline'] = $this->input->post('deadline');
        $data['tagline'] = $this->input->post('tagline');

        $this->db->insert('tbl_job',$data);
        $this->session->set_flashdata('success', 'Registered successfully');
        redirect(base_url());

    }


     /*
    !--------------------------------------------------------
    !       Manage Job
    !--------------------------------------------------------
    */
    public function manage_jobs()
    {
        $this->db->select('tbl_job.*,count(applications.application_id) as total_apply');
        $this->db->join('applications','applications.job_id = tbl_job.job_id','left');
        $this->db->group_by('tbl_job.job_id');
        $this->db->where('company_id',$this->session->company_id);
        $data['jobs'] = $this->db->order_by('tbl_job.job_id','desc')->get('tbl_job')->result_object();

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/company/job/manage_job');
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