<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
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
    !       Default Function for Public View
    !--------------------------------------------------------
    */
    public function index()
    {
        $data['title']      = "Search ".base_url();
        $data['jobcats'] = $this->db->order_by('jobcat_name')->get('tbl_job_category')->result_object();

        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $data['jobs']  = $this->db->order_by('job_id','desc')->limit(3)->get('tbl_job')->result_object();
        $data['featuredjobs']  = $this->db->where('featured_job','1')->limit(4)->get('tbl_job')->result_object();

        $data['designations']  = $this->db->order_by('designation_name','asc')->get('tbl_designation')->result_object();
        $data['categories']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();
        
        $data['totaljob'] = $this->countermodel->totaljob();
        $data['totalcategory'] = $this->countermodel->totalcategory();
        $data['totalcompany'] = $this->countermodel->totalcompany();

        $this->load->view('public/lib/header',$data);
        // $this->load->view('public/lib/slider');
        $this->load->view('public/search/search_all');
        $this->load->view('public/lib/footer');
        
    }


    /*
    !--------------------------------------------------------
    !       Default Function for Public View
    !--------------------------------------------------------
    */
    public function search_result()
    {
     
        $data['title']      = "Search Results";
        
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->join('tbl_industry','tbl_industry.industry_id = tbl_job.industry_id');
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');

        if(!empty($this->input->get('category')))
        {
            $this->db->where('tbl_job.jobcat_id',$this->input->get('category'));
            $this->db->or_where('tbl_company.company_name',$this->input->get('multikill'));
        }else{
            $this->db->like('tbl_company.company_name',$this->input->get('multikill'));
        }
        
        $this->db->like('tbl_job.designation',$this->input->get('multikill'));
        $this->db->or_like('tbl_job.skill',$this->input->get('multiskill'));
        $this->db->or_like('tbl_job.location',$this->input->get('location'));

        $data['jobs']  = $this->db->order_by('tbl_job.job_id','desc')->limit(3)->get('tbl_job')->result_object();

        //echo '<pre>';
        //print_r($data['jobs']); die;

        $data['featuredjobs']  = $this->db->where('featured_job','1')->limit(4)->get('tbl_job')->result_object();


        $data['jobcats'] = $this->db->order_by('jobcat_name')->get('tbl_job_category')->result_object();
        $data['designations']  = $this->db->order_by('designation_name','asc')->get('tbl_designation')->result_object();
        $data['categories']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();
        
        $data['totaljob'] = $this->countermodel->totaljob();
        $data['totalcategory'] = $this->countermodel->totalcategory();
        $data['totalcompany'] = $this->countermodel->totalcompany();


        $this->load->view('public/lib/header',$data);
        $this->load->view('public/search/search_result');
        $this->load->view('public/lib/footer');
        
    }

        /*
    !--------------------------------------------------------
    !       Default Function for Public View
    !--------------------------------------------------------
    */
    public function all_jobs()
    {
     
        $data['title']      = "Search Results";
        
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->join('tbl_industry','tbl_industry.industry_id = tbl_job.industry_id');
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');
        $data['jobs']  = $this->db->order_by('tbl_job.job_id','desc')->limit(3)->get('tbl_job')->result_object();

        //echo '<pre>';
        //print_r($data['jobs']); die;

        $data['featuredjobs']  = $this->db->where('featured_job','1')->limit(4)->get('tbl_job')->result_object();


        $data['jobcats'] = $this->db->order_by('jobcat_name')->get('tbl_job_category')->result_object();
        $data['designations']  = $this->db->order_by('designation_name','asc')->get('tbl_designation')->result_object();
        $data['categories']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();
        
        $data['totaljob'] = $this->countermodel->totaljob();
        $data['totalcategory'] = $this->countermodel->totalcategory();
        $data['totalcompany'] = $this->countermodel->totalcompany();


        $this->load->view('public/lib/header',$data);
        $this->load->view('public/jobs');
        $this->load->view('public/lib/footer');
        
    }

     /*
    !--------------------------------------------------------
    !       Default Function for Public View
    !--------------------------------------------------------
    */
    public function jobs_category($jobcat_id,$slug="")
    {
     
        $data['title']      = "Search Results";
        
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->join('tbl_industry','tbl_industry.industry_id = tbl_job.industry_id');
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');
        $this->db->where('tbl_job.jobcat_id',$jobcat_id);

        $data['jobs']  = $this->db->order_by('tbl_job.job_id','desc')->limit(3)->get('tbl_job')->result_object();

        $data['jobcat'] = $this->db->where('jobcat_id',$jobcat_id)->get('tbl_job_category')->result_object();
        $data['designations']  = $this->db->order_by('designation_name','asc')->get('tbl_designation')->result_object();
        $data['categories']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();
        
        $data['totaljob'] = $this->countermodel->totaljob();
        $data['totalcategory'] = $this->countermodel->totalcategory();
        $data['totalcompany'] = $this->countermodel->totalcompany();


        $this->load->view('public/lib/header',$data);
        $this->load->view('public/job/job_category');
        $this->load->view('public/lib/footer');
    }



     /*
    !--------------------------------------------------------
    !       Default Function for Public View
    !--------------------------------------------------------
    */
    public function jobs_type($job_type)
    {
     
        $data['title']      = "Search Results";
        
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->join('tbl_industry','tbl_industry.industry_id = tbl_job.industry_id');
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');
        $job_type = str_replace("-", " ", $job_type);
        
        $this->db->where('tbl_job.job_type',$job_type);

        $data['jobs']  = $this->db->order_by('tbl_job.job_id','desc')->limit(3)->get('tbl_job')->result_object();

        $data['job_type'] = $job_type;
        $data['designations']  = $this->db->order_by('designation_name','asc')->get('tbl_designation')->result_object();
        $data['categories']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();
        
        $data['totaljob'] = $this->countermodel->totaljob();
        $data['totalcategory'] = $this->countermodel->totalcategory();
        $data['totalcompany'] = $this->countermodel->totalcompany();


        $this->load->view('public/lib/header',$data);
        $this->load->view('public/job/job_type');
        $this->load->view('public/lib/footer');
    }

  
}