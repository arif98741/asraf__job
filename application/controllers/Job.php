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
        
        if (!$this->session->has_userdata('login')) {
            redirect('admin/dashboard');
        }
    }

    /*
    !-----------------------------------------
    ! Job Form
    !-----------------------------------------
    */
    public function add_job()
    {
        $data['title']      = "Add Job";
        $data['jobcats']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();

        $data['industries']  = $this->db->order_by('industry_name','asc')->get('tbl_industry')->result_object();

        $data['companies']  = $this->db->order_by('company_name','asc')->get('tbl_company')->result_object();

        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/job/add-job');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! save_job 
    !----------------------------------------
    */
    
    public function save_job()
    { 
        $data['job_title'] = $this->input->post('job_title'); 
        $data['location'] = $this->input->post('location'); 
        $data['jobcat_id'] = $this->input->post('jobcat_id'); 
        $data['industry_id'] = $this->input->post('industry_id'); 
        $data['company_id'] = $this->input->post('company_id'); 
        $data['job_type'] = $this->input->post('job_type'); 
        $data['skill'] = $this->input->post('skill'); 
        $data['experience'] = $this->input->post('experience'); 
        $data['salary_starting'] = $this->input->post('starting_salary'); 
        $data['salary_ending'] = $this->input->post('ending_salary'); 
        $data['education'] = $this->input->post('education'); 
        $data['posted_date'] = $this->input->post('posted_date'); 
        $data['deadline'] = $this->input->post('deadline'); 
        $data['job_description'] = $this->input->post('job_description');
        $data['posted_date'] = date('Y-m-d');
        $data['deadline']    = date('Y-m-d');
        $data['job_thumbnail'] = '';
        $this->db->insert('tbl_job',$data);
        $insert_id = $this->db->insert_id();

        if (!empty($_FILES['job_thumbnail']['name'])) {

            $config['upload_path'] = './uploads/job/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|jpeg|PNG';
            $config['max_size']   = 10000;
            $config['max_width']  = 10000;
            $config['max_height'] = 10000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('job_thumbnail')) {
                $upload_data = array('upload_data' => $this->upload->data());

                 $data['job_thumbnail'] = $upload_data['upload_data']['file_name'];
                $this->db->set('job_thumbnail',$data['job_thumbnail']);
                $this->db->where('job_id',$insert_id);
                $this->db->update('tbl_job');
            } 
        }else{
            $data['job_thumbnail'] = 'default.png';
        }
        
        $this->session->set_flashdata('success', 'Job Added successfully .');
        redirect('admin/job-list');
    }

    /*
    !-----------------------------------------
    ! Job Form
    !-----------------------------------------
    */
    public function job_list()
    {
        $data['title']      = "Job List";
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->join('tbl_industry','tbl_industry.industry_id = tbl_job.industry_id');
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');
        
        $data['jobs']  = $this->db->get('tbl_job')->result_object();
        

        //echo "<pre>";
        //print_r($data['jobs']); die;

        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/joblist');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !-----------------------------------------
    ! Edit Job Form
    !-----------------------------------------
    */
    public function edit_job($job_id)
    {
        $data['title']      = "Edit Job";
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->where('job_id',$job_id);
        $data['job']  = $this->db->get('tbl_job')->result_object();
        $data['jobcats']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();
    
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/edit_job');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! update_job 
    !----------------------------------------
    */
    
    public function update_job($job_id)
    { 
        $data['job_title'] = $this->input->post('job_title');
        $data['jobcat_id'] = $this->input->post('jobcat_id');
        $data['job_descri'] = $this->input->post('job_descri');
        $data['company_name'] = $this->input->post('company_name');
        $data['salary'] = $this->input->post('salary');
        $data['posted_date'] = date('Y-m-d');
        $data['deadline'] = date('Y-m-d');
        $this->db->set($data);
        $this->db->where('job_id',$job_id);
        $this->db->update('tbl_job');

        $this->session->set_flashdata('success', 'Successfully Updated Data.');
        redirect('admin/job-list');
    }

    /*
    !----------------------------------------
    ! delete View
    !----------------------------------------
    */
    public function delete_job($job_id)
    { 

        $this->db->where('job_id',$job_id);
        $this->db->delete('tbl_job');
        $this->session->set_flashdata('success', 'Job Successfully Deleted');
        redirect('admin/job-list');
    }

    /*
    !-----------------------------------------
    ! Add Job Category
    !-----------------------------------------
    */
    public function add_job_category()
    {
        $data['title']      = "Add Job Category";
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/add-job-category');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! save_job Category
    !----------------------------------------
    */
    
    public function save_job_category()
    { 
        if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }

        if($this->db->where(['jobcat_name'=>$this->input->post('jobcat_name')])->get('tbl_job_category')->result_id->num_rows >0 )
        {
            $this->session->set_flashdata('error', 'Category  already exist');
            redirect('admin/add-job-category');
        }
       
        $data['jobcat_name'] = ucfirst($this->input->post('jobcat_name'));
        $this->db->insert('tbl_job_category',$data);
        $this->session->set_flashdata('success', 'Category Added Successfully .');
        redirect('admin/job-category-list');
    }

    /*
    !-----------------------------------------
    ! Job Category List
    !-----------------------------------------
    */
    public function job_category_list()
    {
        $data['title']      = "Job Category List";
        $data['jobcats']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/job-category-list');
        $this->load->view('back/lib/footer'); 
    }


    /*
    !-----------------------------------------
    ! Edit Job Category
    !-----------------------------------------
    */
    public function edit_job_category($jobcat_id)
    {
        $data['title']      = "Edit Job Category";
        $data['jobcat']  = $this->db->where('jobcat_id',$jobcat_id)->get('tbl_job_category')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/edit_job_category');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! update job category 
    !----------------------------------------
    */
    public function update_job_category($jobcat_id)
    { 
        
        $data['jobcat_name'] = ucfirst($this->input->post('jobcat_name'));
        
        $this->db->set($data);
        $this->db->where('jobcat_id',$jobcat_id);
        $this->db->update('tbl_job_category');

        $this->session->set_flashdata('success', 'Category Successfully updated to <strong>'.$data['jobcat_name']."</strong>");
        redirect('admin/job-category-list');
    }

    /*
    !----------------------------------------
    ! delete jobo category
    !----------------------------------------
    */
    public function delete_job_category($jobcat_id)
    { 
        $this->db->where('jobcat_id',$jobcat_id);
        $this->db->delete('tbl_job_category');
        $this->session->set_flashdata('success', 'Category Successfully Deleted');
        redirect('admin/job-category-list');
    }

     /*
    !-----------------------------------------
    ! Add designation
    !-----------------------------------------
    */
    public function add_designation()
    {
        $data['title']      = "Add Designation";
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/designation/add_designation');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! save_job Category
    !----------------------------------------
    */
    
    public function save_designation()
    { 

        if($this->db->where(['designation_name'=>$this->input->post('designation_name')])->get('tbl_designation')->result_id->num_rows >0 )
        {
            $this->session->set_flashdata('error', 'Designation  already exist');
            redirect('admin/designation-list');
        }
       
        $data['designation_name'] = ucfirst($this->input->post('designation_name'));
        $this->db->insert('tbl_designation',$data);
        $this->session->set_flashdata('success', 'Designation Added Successfully .');
        redirect('admin/designation-list');
    }

    /*
    !-----------------------------------------
    ! Designation List
    !-----------------------------------------
    */
    public function designation_list()
    {
        $data['title']      = "Designation List";
        $data['designations']  = $this->db->order_by('designation_name','asc')->get('tbl_designation')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/designation/designation_list');
        $this->load->view('back/lib/footer'); 
    }


    /*
    !-----------------------------------------
    ! Edit Designation
    !-----------------------------------------
    */
    public function edit_designation($designation_id)
    {
        $data['title']      = "Edit Designation";
        $data['designation']  = $this->db->where('designation_id',$designation_id)->get('tbl_designation')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/designation/edit_designation');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! update designation
    !----------------------------------------
    */
    public function update_designation($designation)
    { 
        
        $data['designation_name'] = ucfirst($this->input->post('designation_name'));
        
        $this->db->set($data);
        $this->db->where('designation_id',$designation);
        $this->db->update('tbl_designation');
        $this->session->set_flashdata('success', 'Designation Successfully updated to <strong>'.$data['designation_name']."</strong>");
        redirect('admin/designation-list');
    }

    /*
    !----------------------------------------
    ! delete designation
    !----------------------------------------
    */
    public function delete_designation($designation_id)
    { 
        $this->db->where('designation_id',$designation_id);
        $this->db->delete('tbl_designation');
        $this->session->set_flashdata('success', 'Designation Successfully Deleted');
         redirect('admin/designation-list');
    }

    /*
    !-----------------------------------------
    ! Industry List
    !-----------------------------------------
    */
    public function industry_list()
    {
        $data['title']      = "Industry List";

        $data['industries']  = $this->db->order_by('industry_name','asc')->get('tbl_industry')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/industry/industry_list');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !-----------------------------------------
    ! Add Inustry
    !-----------------------------------------
    */
    public function add_industry()
    {
        $data['title']      = "Add Industyr";

        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/industry/add_industry');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! save industry
    !----------------------------------------
    */
    public function save_industry()
    { 
        $data['industry_name'] = ucfirst($this->input->post('industry_name'));
        if($this->db->where(['industry_name'=>$this->input->post('industry_name')])->get('tbl_industry')->result_id->num_rows >0 )
        {
            $this->session->set_flashdata('error', 'Industry <strong>'.$data["industry_name"].'</strong> already exist');
            redirect('admin/industry-list');
        }
       
       
        $this->db->insert('tbl_industry',$data);
        $this->session->set_flashdata('success', 'Industry Added Successfully .');
        redirect('admin/industry-list');
    }




    /*
    !-----------------------------------------
    ! Edit Industry
    !-----------------------------------------
    */
    public function edit_industry($industry_id)
    {
        $data['title']      = "Edit Industry";

        $data['industry']  = $this->db->where('industry_id',$industry_id)->get('tbl_industry')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/industry/edit_industry');
        $this->load->view('back/lib/footer'); 
    }


    /*
    !----------------------------------------
    ! update industry
    !----------------------------------------
    */
    public function update_industry($industry_id)
    { 
        $data['industry_name'] = ucfirst($this->input->post('industry_name'));
        
        $this->db->set($data);
        $this->db->where('industry_id',$industry_id);
        $this->db->update('tbl_industry');
        $this->session->set_flashdata('success', 'Industry Successfully updated to <strong>'.$data['industry_name']."</strong>");
        redirect('admin/industry-list');
    }

    /*
    !----------------------------------------
    ! delete jobo category
    !----------------------------------------
    */
    public function delete_industry($industry_id)
    { 
        $this->db->where('industry_id',$industry_id);
        $this->db->delete('tbl_industry');
        $this->session->set_flashdata('success', 'Industry Successfully Deleted');
        redirect('admin/industry-list');
    }

    /*
    !-----------------------------------------
    ! Add Company
    !-----------------------------------------
    */
    public function add_company()
    {

        $data['title']      = "Add Company";

       $data['jobcats']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();

        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/company/add_company');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! save company
    !----------------------------------------
    */
    public function save_company()
    { 
       // echo '<pre>';
        //print_r($_POST); die;

        $data['company_name'] = ucfirst($this->input->post('company_name'));

        if($this->db->where(['company_name'=>$this->input->post('company_name')])->get('tbl_company')->result_id->num_rows >0 )
        {
            $this->session->set_flashdata('error', 'Company <strong>'.$data["company_name"].'</strong> already exist');
            redirect('admin/company-list');
        }

        $data['location']   = $this->input->post('location');
        $data['address']    = $this->input->post('address');
        $data['founded_on'] = $this->input->post('founded_on');
        $data['total_employee']       = $this->input->post('total_employee');
    
        $this->db->insert('tbl_company',$data);
        $this->session->set_flashdata('success', 'Company Added Successfully .');
        redirect('admin/company-list');
    }

    /*
    !-----------------------------------------
    ! Company List
    !-----------------------------------------
    */
    public function company_list()
    {
        $data['title']      = "Company List";

        $data['companies']  = $this->db->order_by('company_name','asc')->get('tbl_company')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/company/company_list');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !-----------------------------------------
    ! Edit Company
    !-----------------------------------------
    */
    public function edit_company($company_id)
    {
        $data['title']      = "Edit Company";

        $data['company']  = $this->db->where('company_id',$company_id)->get('tbl_company')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/company/edit_company');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! update company
    !----------------------------------------
    */
    public function update_company($company_id)
    { 
        $data['company_name'] = ucfirst($this->input->post('company_name'));
        $data['location']   = $this->input->post('location');
        $data['address']    = $this->input->post('address');
        $data['founded_on'] = $this->input->post('founded_on');
        $data['total_employee']       = $this->input->post('total_employee');
        $this->db->set($data);
        $this->db->where('company_id',$company_id);
        $this->db->update('tbl_company');
        $this->session->set_flashdata('success', 'Company Updated Successfully .');
        redirect('admin/company-list');
    }

     /*
    !----------------------------------------
    ! delete company
    !----------------------------------------
    */
    public function delete_company($company_id)
    { 
        $this->db->where('company_id',$company_id);
        $this->db->delete('tbl_company');
        $this->session->set_flashdata('success', 'Successfully deleted Company.');
        redirect('admin/company-list');
    }

}