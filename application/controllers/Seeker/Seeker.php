<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Seeker extends CI_Controller
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
    !       Default Function Admin for Homepage
    !--------------------------------------------------------
    */
    public function registration()
    {
        $this->load->view('front/lib/header');
        $this->load->view('front/seeker/log_reg/registration');
        $this->load->view('front/lib/footer');
        
    }


    /*
    !--------------------------------------------------------
    !       Save Company
    !--------------------------------------------------------
    */
    public function save_seeker()
    {

        if ($this->db->where('email',$this->input->post('email'))->get('seeker')->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Email already exist');
            redirect(base_url()."seeker/registration");
            exit;
        }elseif ($this->db->where('mobile',$this->input->post('mobile'))->get('seeker')->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Mobile already exist');
            redirect(base_url()."seeker/registration");
            exit;
        }else{
            $this->db->insert('seeker',array(
                'name'          => $this->input->post('name'),
                'email'         => $this->input->post('email'),
                'password'      => md5($this->input->post('password')),
                'address'       => $this->input->post('address'),
            ));
            $insert_id = $this->db->insert_id();
            $this->upload_image($insert_id);

            $this->session->set_userdata(array(
                'seeker'            => true,
                'seeker_id'         => $insert_id,
                'seeker_name'       => $this->input->post('name'),
                'seeker_email'       => $this->input->post('email'),
            ));
            $this->session->set_flashdata('success', 'Registered successfully');
            redirect(base_url());
        }

    }

    /*
    !--------------------------------------------------------
    !       Profile Page
    !--------------------------------------------------------
    */
    public function profile($id)
    {
        $data['seeker'] = $this->db->where('seeker_id',$id)->get('seeker')->row();
        $data['tags'] = $this->db->where('seeker_id',$id)->get('seeker_tag')->result_object();
        $data['educations'] = $this->db->where('seeker_id',$id)->get('seeker_education')->result_object();

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/seeker/profile');
        $this->load->view('front/lib/footer');
        
    }


    /*
    !--------------------------------------------------------
    !    Upload Image
    !--------------------------------------------------------
    */
    private function upload_image($insert_id)
    {
        if (!empty($_FILES['image']['name'])) {

            $config['upload_path'] = './uploads/seeker/image/';
            $config['allowed_types'] = 'jpg|JPG|JPEG|PNG|png';
            $config['max_size']     = 10000;
            $config['max_width']    = 10000;
            $config['max_height']   = 10000;
            $config['file_name']    = "img".rand(1111111,9999999);
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $upload_data    = array('upload_data' => $this->upload->data());
                $data['image']  = $upload_data['upload_data']['file_name'];
                $this->db->set(['image'=>$data['image']]);
                $this->db->where('seeker_id',$insert_id)->update('seeker');
            }
        }
    }



     /*
    !--------------------------------------------------------
    !      Edit Profile
    !--------------------------------------------------------
    */
    public function edit_profile()
    {
        $data['seeker'] = $this->db->where('seeker_id',$this->session->seeker_id)->get('seeker')->row();
        $data['tags'] = $this->db->where('seeker_id',$this->session->seeker_id)->get('seeker_tag')->result_object();
        $data['educations'] = $this->db->where('seeker_id',$this->session->seeker_id)->get('seeker_education')->result_object();

        $this->load->view('front/lib/header',$data);
        $this->load->view('front/seeker/edit_profile');
        $this->load->view('front/lib/footer');
        
    }


    /*
    !--------------------------------------------------------
    !     Brose Resumes
    !--------------------------------------------------------
    */
    public function browse_resumes($page_id = 1)
    {

        $row  =  $this->db->get('seeker')->num_rows();
        $perpage = 5;
        $offset = ($page_id-1) * $perpage;
        $previous_page      = $page_id - 1;
        $next_page          = $page_id + 1;
        $total_no_of_pages  = ceil($row / $perpage);


        $this->db->order_by('rand()');
        $this->db->limit($perpage,$offset);
        $data['seekers'] = $this->db->get('seeker')->result_object();
        $data['row']    = $row;
        $data['page_id']   = $page_id;
        $data['total_no_of_pages']  = (int)$total_no_of_pages;
        $data['previous_page']  = $previous_page;
        $data['next_page']      = $next_page;

        //echo '<pre>';
        //print_r($data['seekers']); exit;


        $this->load->view('front/lib/header',$data);
        $this->load->view('front/seeker/browse_resumes');
        $this->load->view('front/lib/footer');
        
    }


    /*
    !--------------------------------------------------------
    !     Seeker Logout
    !--------------------------------------------------------
    */
    public function seeker_job_apply($job_id)
    {
        $this->session->set_flashdata('error', 'You must have login to apply');
        redirect(base_url().'seeker/job/job_page/'.$job_id);
      

    }

    
    /*
    !--------------------------------------------------------
    !     Seeker Logout
    !--------------------------------------------------------
    */
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'Logged out successfully');
        redirect(base_url());

    }



}