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

    }


     /*
    !--------------------------------------------------------
    !       Browse Jobs
    !--------------------------------------------------------
    */
    public function save_application()
    {
        //echo '<pre>';
        //print_r($_POST); exit;

        $row = $this->db->where(['job_id'=> $this->input->post('job_id'), 'seeker_id' => $this->session->seeker_id])->get('applications')->num_rows();
        if ($row > 0) {
            $this->session->set_flashdata('error', 'You have already applied to this job');
            redirect(base_url().'/seeker/job/job_page/'.$this->input->post('job_id'));
        }

        $data['application_fullname'] = $this->input->post('name'); 
        $data['application_email'] = $this->input->post('application_email'); 
        $data['job_id'] = $this->input->post('job_id'); 
        $data['seeker_id'] = $this->session->seeker_id;
        $data['apply_message'] = $this->input->post('apply_message'); 
        $data['apply_date'] = date('Y-m-d');
        $this->db->insert('applications',$data); 

        if (!empty($_FILES['cv']['name'])) {
            
            $config['upload_path'] = './uploads/seeker/cv/';
            $config['allowed_types'] = 'docx|doc|pdf|PDF';
            $config['max_size']     = 10000;
            $config['max_width']    = 10000;
            $config['max_height']   = 10000;
           // $new_name = time().$_FILES["userfiles"]['name'];
            $config['file_name'] = rand(1111111,9999999);

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cv')) {
                $upload_data = array('upload_data' => $this->upload->data());
                $data['cv'] = $upload_data['upload_data']['file_name'];
                $this->db->set(['cv'=>$data['cv']]);
                $this->db->where('application_id',$this->db->insert_id())->update('applications');
            }
        }

        $this->session->set_flashdata('error', 'Successfully Applied to Job. Please wait for confirmation and interview');
        redirect(base_url().'/seeker/job/job_page/'.$data['job_id']);

    }


    



}