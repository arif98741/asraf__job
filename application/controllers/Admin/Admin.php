<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
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
    public function index()
    {
        if ($this->session->has_userdata('login')) {
            redirect('admin/dashboard');
        }
        $this->load->view('back/login');
        
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
        $data['totalindustry'] = $this->db->get('tbl_industry')->result_id->num_rows;
        $data['totalemployee'] = $this->db->get('employee')->result_id->num_rows;


        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/dashboard');
        $this->load->view('back/lib/footer');
    }


    /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function login()
    {
        if ($this->session->has_userdata('login') && $this->session->role == 'admin')
        {
            redirect('admin/dashboard');
        }


        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));

        $this->load->model('loginmodel');

        $status   = $this->loginmodel->login($username,$password);
        if ($status->result_id->num_rows > 0) {

           $data     = $status->result_object();
           $session  = array(
                    'login'       => true,
                    'admin'       => 'admin',
                    'admin_role'  => $data[0]->role,
                    'admin_id'    => $data[0]->serial,
                    'admin_name'  => $data[0]->admin_name,
                    'admin_role'  => $data[0]->role,
                    'admin_image' => $data[0]->admin_image
            );
           $this->session->set_userdata($session);
           $this->session->set_flashdata('success', 'Successfully Logged in');
           redirect('admin/admin/dashboard');
       }else{
            $this->session->set_flashdata('error', 'Username or password not matched');
            redirect("admin/admin/index");
       }

    }

    /*
    !--------------------------------------------------------
    !       Login Handeller
    !--------------------------------------------------------
    */
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'Loggeout successfully');
        redirect('admin');
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
        //echo "<pre>";
        //print_r($data); die;
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/user_list');
        $this->load->view('admin/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !      User List for Institutions
    !--------------------------------------------------------
    */
    public function update_status($user_id,$status)
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }

        $this->db->set(array(
			'status' =>$status
		));
		$this->db->where('user_id',$user_id);
		$this->db->update('tbl_user');
		
		$this->session->set_flashdata('success', 'User Successfully Updated');
		redirect('admin/user_list');
    }



    /*
    !--------------------------------------------------------
    !      User API TOKEN
    !--------------------------------------------------------
    */
    public function user_api($user_id="")
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }
        $this->db->where(array(
            'user_id ' => $user_id
        )); 
        $data['user'] = $this->db->get('tbl_user')->result_object();
        //echo "<pre>";
        //print_r($data); die;
        $this->load->view('admin/lib/header',$data);
        $this->load->view('admin/lib/sidebar');
        $this->load->view('admin/user_api');
        $this->load->view('admin/lib/footer');
    }



    /*
    !--------------------------------------------------------
    !      Update User API TOKEN
    !--------------------------------------------------------
    */
    public function user_api_update($user_id="")
    {
        if (!$this->session->has_userdata('login')) {
            redirect('admin');
        }
        $data['api'] = $this->input->post('api');
        $this ->db->set($data);
        $this->db->where(array(
            'user_id ' => $user_id
        )); 
        $this->db->update('tbl_user');
        $this->session->set_flashdata('success', 'API Updated Successfully');
        redirect('admin/dashboard');
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

}