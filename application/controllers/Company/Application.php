<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller
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
    !       Manage Job
    !--------------------------------------------------------
    */
    public function manage_applications($job_id,$order_by='newest')
    {
        //echo $job_id; exit;
        $data['singlejob'] = $this->db->where('job_id',$job_id)->get('tbl_job')->row();
        $data['job_id'] = $job_id;

        $this->db->select('applications.*,seeker.image');
        $this->db->join('applications','applications.job_id = tbl_job.job_id','left');
        $this->db->join('seeker','applications.seeker_id = seeker.seeker_id');
        if ($order_by == 'newest') {
            $this->db->order_by('tbl_job.job_id','desc');
        }elseif($order_by == 'name')
        {
            $this->db->order_by('applications.application_fullname','asc');
        }elseif($order_by == 'rating')
        {
            $this->db->order_by('applications.rating','asc');
        }
        
        $this->db->where(['company_id'=>$this->session->company_id,'tbl_job.job_id'=>$job_id]);
        $data['applications'] = $this->db->get('tbl_job')->result_object();

        // echo '<pre>';
        // print_r($data['applications']); exit;
        

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/company/job/manage_applications');
        $this->load->view('front/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !      Update Note
    !--------------------------------------------------------
    */
    public function update_note($application_id)
    {
        echo $application_id; exit;
        
        $this->db->set('apply_note',$this->input->post('apply_note'));
        $this->db->where(['application_id'=>$application_id]);
        $this->db->update('applications');
        $this->session->set_flashdata('success', 'Note updated successfully');
        redirect(base_url());
    }
}