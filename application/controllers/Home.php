<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
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
    !----------------------------------------
    ! Home page website
    !----------------------------------------
    */
    public function index()
    {
        $this->db->select('tbl_job.*,tbl_company.company_name');
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->order_by('tbl_job.job_id','desc');
        $this->db->limit(4);
        $data['front_jobs'] = $this->db->get('tbl_job')->result_object();

        $data['jobcats'] = $this->db->order_by('jobcat_id','desc')->limit(8)->get('tbl_job_category')->result_object();


        $this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $data['blogs'] = $this->db->order_by('tbl_blog.blog_id','desc')->limit(8)->order_by('tbl_blog.blog_id','desc')->limit(3)->get('tbl_blog')->result_object();

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/lib/banner');
        $this->load->view('front/home');
        $this->load->view('front/lib/footer');
    }



    /*
    !----------------------------------------
    ! View Page
    !----------------------------------------
    */
    public function view_page($page_id)
    {
        $this->db->where('id',$page_id);
        $data['page'] = $this->db->get('pages')->row();
        //echo '<pre>';
        //print_r($data); exit;

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/page/single_page');
        $this->load->view('front/lib/footer');
    }

    /*
    !----------------------------------------
    ! Search Page
    !----------------------------------------
    */
    public function search_action()
    {
        $keyword = $this->input->post('keyword');
        $location = $this->input->post('location');

        redirect(base_url().'search/'.(1).'/'.$keyword,'refresh');
    }

    /*
    !----------------------------------------
    ! Search Page
    !----------------------------------------
    */
    public function search_page($page_id,$keyword)
    {
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->like('tbl_job.job_title',$keyword);
        $this->db->or_like('tbl_company.company_name',$keyword);
        $data['total_job'] = $this->db->get('tbl_job')->num_rows();

        $row  = $this->db->get('tbl_job')->num_rows();
        $perpage = 5;
        $offset = ($page_id-1) * $perpage;
        $data['previous_page']      = $page_id - 1;
        $data['next_page']          = $page_id + 1;
        $data['total_no_of_pages']  = ceil($row / $perpage);
        $data['page_id']  = $page_id;
        $data['keyword']  = $keyword;

        $this->db->select('tbl_job.*,tbl_company.company_name');
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->like('tbl_job.job_title',$keyword);
        $this->db->or_like('tbl_company.company_name',$keyword);
        $this->db->order_by('tbl_job.job_id','desc');
        $this->db->limit($perpage,$offset);
        $data['jobs'] = $this->db->get('tbl_job')->result_object();
        $this->load->view('front/lib/header',$data);
        $this->load->view('front/seeker/job/search/search_result');
        $this->load->view('front/lib/footer');
    }
}