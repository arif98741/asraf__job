<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller
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

        $this->load->view('public/lib/header');
        $this->load->view('public/employee/registration');
        $this->load->view('public/lib/footer');
        
    }

    /*
    !--------------------------------------------------------
    !     registration   Homepage
    !--------------------------------------------------------
    */
    public function save_employee()
    {
       if($this->db->where('mobile',$this->input->post('mobile'))->get('employee')->result_id->num_rows >0)
       {
            $this->session->set_flashdata('error', 'Mobile Already Exist');
            redirect("employee/registration");
       }

       if($this->db->where('username',$this->input->post('username'))->get('employee')->result_id->num_rows >0)
       {
            $this->session->set_flashdata('error', 'Username Already Exist');
            redirect("employee/registration");
       }

       if($this->db->where('email',$this->input->post('email'))->get('employee')->result_id->num_rows >0)
       {
            $this->session->set_flashdata('error', 'Email Already Exist');
            redirect("employee/registration");
       }


        $data['username'] = $this->input->post('username'); 
        $data['email'] = $this->input->post('email'); 
        $data['mobile'] = $this->input->post('mobile'); 
        $data['password'] = md5($this->input->post('password')); 
        $data['gender'] = $this->input->post('gender');
        $data['fullname'] = $this->input->post('fullname'); 
        $data['country'] = $this->input->post('country'); 
        $data['state'] = $this->input->post('state'); 
        $data['city'] = $this->input->post('city');  
        $data['experience'] = $this->input->post('experience'); 
        $data['skill'] = $this->input->post('skill'); 
        $data['educational_background'] = $this->input->post('educational_background'); 
        $this->db->insert('employee',$data);    
        $insert_id = $this->db->insert_id();
        
        if (!empty($_FILES['resume']['name'])) {

            $config['upload_path'] = './uploads/employee/resume/';
            $config['allowed_types'] = 'docx|doc|pdf|pptx|xls|xlxs|txt|CSV|ZIP|TAR|RAR';
            $config['max_size']     = 10000;
            $config['max_width']    = 10000;
            $config['max_height']   = 10000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('resume')) {
                $upload_data = array('upload_data' => $this->upload->data());
                $data['resume'] = $upload_data['upload_data']['file_name'];
                $this->db->set(['resume'=>$data['resume']]);
                $this->db->where('id',$insert_id)->update('employee');
            }
        }

        if (!empty($_FILES['image']['name'])) {

            $config['upload_path'] = './uploads/employee/image/';
            $config['allowed_types'] = 'PNG|JPG|JPEG|GIF|jpg|jpeg|png|gif';
            $config['max_size']     = 10000;
            $config['max_width']    = 10000;
            $config['max_height']   = 10000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $upload_data = array('upload_data' => $this->upload->data());
                $abc['image'] = $upload_data['upload_data']['file_name'];
                $this->db->set(['image'=>$abc['image']]);
                $this->db->where('id',$insert_id)->update('employee');
                $session  = array(

                    'employee_image'      => $abc['image']
                );
            }
        }
                
        $session  = array(
                'employeelogin'       => true,
                'employee_id'         => $insert_id,
                'employee_fullname'   => $data['fullname'],
                'employee_username'   => $data['username'],
                'employee_email'      => $data['email'],
            );
        $this->session->set_userdata($session);
        $this->session->set_flashdata('success', 'Successfully registered.');
        redirect(base_url());
    }

    /*
    !--------------------------------------------------------
    !       Default Function for Dashboard
    !--------------------------------------------------------
    */
    public function dashboard()
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }

        $data['totaljob']   = $this->db->get('tbl_job')->result_id->num_rows;
        $data['totaljobcat'] = $this->db->get('tbl_job_category')->result_id->num_rows;


        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/dashboard');
        $this->load->view('back/lib/footer');
    }

    
    /*
    !--------------------------------------------------------
    !       Default Function for Dashboard
    !--------------------------------------------------------
    */
    public function login()
    {
        if ($this->session->has_userdata('employeelogin')) {
            redirect(base_url());
        }

        $this->load->view('public/lib/header');
        $this->load->view('public/employee/login');
        $this->load->view('public/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function login_action()
    {
        if ($this->session->has_userdata('employeelogin'))
        {
            redirect(base_url());
        } 

        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));
        $status   = $this->db->where(array('username'=>$username,'password'=>$password))->get('employee');

        if ($status->result_id->num_rows > 0) {

           $data     = $status->result_object();
           $session  = [
                'employeelogin'       => true,
                'employee_id'         => $data[0]->id,
                'employee_fullname'   => $data[0]->fullname,
                'employee_username'   => $data[0]->username,
                'employee_email'      => $data[0]->email,
                'employee_image'      => $data[0]->image,
            ];
           $this->session->set_userdata($session);
           $this->session->set_flashdata('success', 'Successfully loggedin');
           redirect(base_url());
       }else{
            $this->session->set_flashdata('errors', 'Username or password not matched');
            redirect("employee/login");
       }

    }

     /*
    !--------------------------------------------------------
    !       Default Function for Dashboard
    !--------------------------------------------------------
    */
    public function profile()
    {
        if (!$this->session->has_userdata('employeelogin')) {
            redirect('employee/login');
        }

        $this->load->view('public/lib/header');
        $this->load->view('public/employee/profile');
        $this->load->view('public/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !      User List for Institutions
    !--------------------------------------------------------
    */
    public function user_list()
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }

        $data['users'] = $this->db->get('tbl_user')->result_object();
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/user_list');
        $this->load->view('admin/lib/footer');
    }

  
    /*
    !--------------------------------------------------------
    !      Delete User
    !--------------------------------------------------------
    */
    public function delete_user($user_id="")
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }
        
      
        $this->db->where(array(
            'user_id ' => $user_id
        )); 
        $this->db->delete('tbl_user');
        $this->session->set_flashdata('success', 'User Deleted Successfully');
        redirect('admin/dashboard');
    }

    /*
    !--------------------------------------------------------
    !      Delete User
    !--------------------------------------------------------
    */
    public function logout()
    {
        if (!$this->session->has_userdata('employeelogin')) {
            redirect(base_url());
        }
        
        $this->session->sess_destroy();
        redirect(base_url());
    }


}