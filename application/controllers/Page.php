<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller
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
    ! Job Page
    !-----------------------------------------
    */
    public function add_page()
    {
        $this->load->view('back/lib/header' );
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/page/add_page');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! save_job 
    !----------------------------------------
    */
    
    public function save_page()
    { 
        $data['title'] = $this->input->post('title'); 
        $data['description'] = $this->input->post('description'); 
        
        $data['created_at']     = date('Y-m-d');
        $data['updated_at']    = date('Y-m-d');
        $data['image'] = '';

        $this->db->insert('pages',$data);
        $insert_id = $this->db->insert_id();

        if (!empty($_FILES['image']['name'])) {

            $config['upload_path'] = './uploads/page/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|jpeg|PNG';
            $config['max_size']   = 10000;
            $config['max_width']  = 10000;
            $config['max_height'] = 10000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $upload_data = array('upload_data' => $this->upload->data());

                $data['image'] = $upload_data['upload_data']['file_name'];
                $this->db->set('image',$data['image']);
                $this->db->where('id',$insert_id);
                $this->db->update('pages');
            } 
        }else{
            $data['image'] = 'default.png';
        }
        
        $this->session->set_flashdata('success', 'Page Added successfully .');
        redirect('admin/page-list');
    }

    /*
    !-----------------------------------------
    ! Job Form
    !-----------------------------------------
    */
    public function page_list()
    {
        
        $data['pages']  = $this->db->get('pages')->result_object();

        //echo "<pre>";
        //print_r($data['jobs']); die;

        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/page/page_list');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !-----------------------------------------
    ! Edit Job Form
    !-----------------------------------------
    */
    public function edit_page($id)
    {
        $this->db->where('id',$id);
        $data['page']  = $this->db->get('pages')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/page/edit_page');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! update_job 
    !----------------------------------------
    */
    
    public function update_page($id)
    { 
        $data['title'] = $this->input->post('title'); 
        $data['description'] = $this->input->post('description'); 
        $data['updated_at']    = date('Y-m-d');
        $data['image'] = '';

        
        if (!empty($_FILES['image']['name'])) {
            $this->db->where('id',$id);
            $file = $this->db->get('pages')->result_object();

            if (file_exists('uploads/page/'.$file[0]->image)) {
                unlink('uploads/page/'.$file[0]->image);
            }

            $config['upload_path'] = './uploads/page/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|jpeg|PNG';
            $config['max_size']   = 10000;
            $config['max_width']  = 10000;
            $config['max_height'] = 10000;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $upload_data = array('upload_data' => $this->upload->data());
                $data['image'] = $upload_data['upload_data']['file_name'];
            } 
        }
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update('pages');
        $this->session->set_flashdata('success', 'Page Updated successfully .');
        redirect('admin/page-list');

        $this->session->set_flashdata('success', 'Successfully Updated Data.');
        redirect('admin/page-list');
    }

    /*
    !----------------------------------------
    ! delete View
    !----------------------------------------
    */
    public function delete_page($id)
    { 
        $this->db->where('id',$id);
        $file = $this->db->get('pages')->result_object();
        if (!is_dir('uploads/page/'.$file[0]->image) && file_exists('uploads/page/'.$file[0]->image)) {
             unlink('uploads/page/'.$file[0]->image);
        }
        $this->db->where('id',$id);
        $this->db->delete('pages');
        $this->session->set_flashdata('success', 'Page Successfully Deleted');
        redirect('admin/page-list');
    }


}