<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Publicview extends CI_Controller
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
        $data['title']      = "Homepage";
        $data['jobcats'] = $this->db->order_by('jobcat_name')->get('tbl_job_category')->result_object();

        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $data['jobs']  = $this->db->order_by('job_id','desc')->limit(3)->get('tbl_job')->result_object();
        $data['featuredjobs']  = $this->db->where('featured_job','1')->limit(4)->get('tbl_job')->result_object();

        $data['designations']  = $this->db->order_by('designation_name','asc')->get('tbl_designation')->result_object();
        $data['categories']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();

        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->select('count(tbl_job.job_id) as total,tbl_job_category.jobcat_name as category_name,tbl_job_category.jobcat_id as job_category');
        $this->db->group_by('tbl_job.jobcat_id'); 
        $data['category_lists']  = $this->db->order_by('tbl_job.job_id','desc')->get('tbl_job')->result_object();
        
        $data['totaljob'] = $this->countermodel->totaljob();
        $data['totalcategory'] = $this->countermodel->totalcategory();
        $data['totalcompany'] = $this->countermodel->totalcompany();


        $this->load->view('public/lib/header',$data);
        $this->load->view('public/lib/slider');
        $this->load->view('public/index');
        $this->load->view('public/lib/footer');
        
    }

    /*
    !-----------------------------------------
    ! Job Form
    !-----------------------------------------
    */
    public function jobs()
    {
        $data['title']      = "Jobs";
        $data['jobcats']  = $this->db->get('tbl_job_category')->result_object();
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $data['jobs']  = $this->db->order_by('job_id','desc')->get('tbl_job')->result_object();

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/jobs');
        $this->load->view('public/lib/footer'); 
    }


    /*
    !-----------------------------------------
    ! Job Search
    !-----------------------------------------
    */
    public function job_single($id, $slug = '')
    {
        $data['title']      = "View Job";
        //echo $id; die;
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->join('tbl_company','tbl_company.company_id = tbl_job.company_id');
        $this->db->where(['job_id'=>$id]);
        $data['job']  = $this->db->get('tbl_job')->result_object();
        //echo "<pre>";
       // print_r($data['job']); die;

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/job_single');
        $this->load->view('public/lib/footer'); 
    }


     /*
    !-----------------------------------------
    ! Job Search
    !-----------------------------------------
    */
    public function view_page($id, $slug="")
    {
        $data['title']      = str_replace("-", " ", ucfirst($slug));
        $this->db->where('id',$id);
        if ($id == 100) {
            $data['page']  = $this->db->get('pages')->result_object();
            $this->load->view('public/lib/header',$data);
            $this->load->view('public/page/contact');
            $this->load->view('public/lib/footer'); 
        }else{
            $data['page']  = $this->db->get('pages')->result_object();
            $this->load->view('public/lib/header',$data);
            $this->load->view('public/page/page_single');
            $this->load->view('public/lib/footer'); 
        }
    }


    /*
    !-----------------------------------------
    ! Scholarship
    !-----------------------------------------
    */
    public function scholarship()
    {
        $data['scholarships']  = $this->db->order_by('id','desc')->get('scholarship')->result_object();
       
        $this->load->view('public/lib/header',$data);
        $this->load->view('public/scholarship/scholarship');
        $this->load->view('public/lib/footer'); 
       
    }

    /*
    !-----------------------------------------
    ! Scholarship
    !-----------------------------------------
    */
    public function scholarship_apply($id)
    {
        if (!$this->session->has_userdata('employee_login')) {
            redirect('employee/login');
        }
        $data['scholarship']  = $this->db->where('id',$id)->get('scholarship')->row();
       
        $this->load->view('public/lib/header',$data);
        $this->load->view('public/scholarship/scholarship_apply');
        $this->load->view('public/lib/footer'); 
       
    }

    /*
    !--------------------------------------------------------
    !     registration   Homepage
    !--------------------------------------------------------
    */
    public function save_scholarship_application($id)
    {
        if (!$this->session->has_userdata('employee_login')) {
            redirect('employee/login');
        }
        $data['scholarship_id'] = $id; 
        $data['employee_id']    = $_SESSION['employee_id']; 
        $data['description']    = $this->input->post('description'); 
        
        if (!empty($_FILES['attachment']['name'])) {

            $config['upload_path'] = './uploads/scholarship/';
            $config['max_size']     = 10000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('attachment')) {
                $upload_data = array('upload_data' => $this->upload->data());
                $data['attachment'] = $upload_data['upload_data']['file_name'];
            }
        }
        $this->db->insert('scholarship_application',$data);
        $this->session->set_userdata($session);
        $this->session->set_flashdata('success', 'Successfully applied for scholarship.');
        redirect(base_url());
    }

    

    
}