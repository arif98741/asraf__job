<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller
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
        
        $this->load->view('front/company/log_reg/registration');
        
    }



    /*
    !--------------------------------------------------------
    !       Save Company
    !--------------------------------------------------------
    */
    public function save_company()
    {
        if ($this->db->where('email',$this->input->post('email'))->get('tbl_company')->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Email already exist');
            redirect(base_url()."employee_registration");
        }elseif($this->input->post('password') != $this->input->post('password_confirm')){
            $this->session->set_flashdata('error', 'Password not matched');
            redirect(base_url()."employee_registration");
        }else{
            $this->db->insert('tbl_company',array(
                'company_name' => $this->input->post('company_name'),
                'email' => $this->input->post('email'),
                'full_name' => $this->input->post('full_name'),
                'location' => $this->input->post('location'),
                'voter_id' => $this->input->post('voter_id'),
                'trade_license' => $this->input->post('trade_license'),
                'password' => md5($this->input->post('password'))
            ));
            $insert_id = $this->db->insert_id();

            $session  = array(
                    'company'        => true,
                    'company_id'     => $insert_id,
                    'company_name'   => $this->input->post('company_name'),
                    'company_author'   => $this->input->post('full_name'),
                    'company_email'  =>$this->input->post('email'),
            );

            $this->session->set_userdata($session);
            
            if (!empty($_FILES['logo']['name'])) {

                $config['upload_path'] = './uploads/company/logo/';
                $config['allowed_types'] = 'jpg|JPG|JPEG|PNG|png';
                $config['max_size']     = 10000;
                $config['max_width']    = 10000;
                $config['max_height']   = 10000;
                $config['file_name']    = "logo_".rand(1111111,9999999);
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo')) {
                    $upload_data    = array('upload_data' => $this->upload->data());
                    $data['logo']  = $upload_data['upload_data']['file_name'];
                    $this->db->set(['logo'=>$data['logo']]);
                    $this->db->where('company_id',$this->session->company_id)->update('tbl_company');
                }
            }

            $this->session->set_flashdata('success', 'Registered successfully');
            redirect(base_url());
        }
      
    }

    /*
    !--------------------------------------------------------
    !      Job Profile
    !--------------------------------------------------------
    */
    public function company_profile()
    {
        
        $this->load->view('front/lib/header',$data);
        $this->load->view('front/company/job/add_job');
        $this->load->view('front/lib/footer');
        
    }


     /*
    !--------------------------------------------------------
    !      Job Profile
    !--------------------------------------------------------
    */
    public function profile()
    {
        $data['company'] = $this->db->where('company_id',$this->session->company_id)->get('tbl_company')->row();
        $this->load->view('front/lib/header',$data);
        $this->load->view('front/company/profile');
        $this->load->view('front/lib/footer');
        
    }

     /*
    !--------------------------------------------------------
    !     Edit Profile
    !--------------------------------------------------------
    */
    public function edit_profile()
    {
        $data['company'] = $this->db->where('company_id',$this->session->company_id)->get('tbl_company')->row();
        
        $this->load->view('front/lib/header',$data);
        $this->load->view('front/company/edit_profile');
        $this->load->view('front/lib/footer');
        
    }

    /*
    !--------------------------------------------------------
    !    Update PRofile
    !--------------------------------------------------------
    */
    public function update_profile()
    {

        $data['company_name'] = $this->input->post('company_name');
        $data['location'] = $this->input->post('location');
        $data['email']  = $this->input->post('email');
        $data['founded_on']  = $this->input->post('founded_on');
        $data['trade_license']  = $this->input->post('trade_license');
        $data['voter_id']  = $this->input->post('voter_id');
        $data['total_employee']  = $this->input->post('total_employee');
        $data['company_email']  = $this->input->post('company_email');
        $data['company_contact']  = $this->input->post('company_contact');

        if (!empty($_FILES['logo']['name'])) {

            $config['upload_path'] = './uploads/company/logo/';
            $config['allowed_types'] = 'jpg|JPG|JPEG|PNG|png';
            $config['max_size']     = 10000;
            $config['max_width']    = 10000;
            $config['max_height']   = 10000;
            $config['file_name']    = "logo_".rand(1111111,9999999);
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                $upload_data    = array('upload_data' => $this->upload->data());
                $data['logo']  = $upload_data['upload_data']['file_name'];
                $this->db->set(['logo'=>$data['logo']]);
                $this->db->where('company_id',$this->session->company_id)->update('tbl_company');
            }
        }

        $this->db->set($data);
        $this->db->where('company_id',$this->session->company_id);
        $this->db->update('tbl_company');
        $this->session->set_flashdata('success', 'Company Updated successfully');
        redirect(base_url());
        
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