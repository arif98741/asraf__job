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


}