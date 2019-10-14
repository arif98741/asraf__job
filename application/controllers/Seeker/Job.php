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

    }

    /*
    !--------------------------------------------------------
    !       Browse Jobs
    !--------------------------------------------------------
    */
    public function browse_jobs($page_id = 1)
    {
        $data['total_job'] = $this->db->get('tbl_job')->num_rows();

        $row  = $this->db->get('tbl_job')->num_rows();
        $perpage = 2;
        $offset = ($page_id-1) * $perpage;
        $data['previous_page']      = $page_id - 1;
        $data['next_page']          = $page_id + 1;
        $data['total_no_of_pages']  = ceil($row / $perpage);
        $data['page_id']  = $page_id;

        $this->db->select('tbl_job.*,tbl_company.company_name');
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->order_by('tbl_job.job_id','desc');
        $this->db->limit($perpage,$offset);
        $data['jobs'] = $this->db->get('tbl_job')->result_object();

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/seeker/job/browse_jobs');
        $this->load->view('front/lib/footer');
        
    }


     /*
    !--------------------------------------------------------
    !       Browse Jobs
    !--------------------------------------------------------
    */
    public function job_page($job_id)
    {
      //  echo '<pre>';
       // print_r($this->session->all_userdata()); exit;

        $this->db->select('tbl_job.*,tbl_company.company_name,tbl_company.company_website,tbl_job_category.jobcat_name');
        $this->db->where('job_id',$job_id);
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $data['job'] = $this->db->get('tbl_job')->row();
    

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/seeker/job/job_page');
        $this->load->view('front/lib/footer');
        
    }





}