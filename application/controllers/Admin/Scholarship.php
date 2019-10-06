<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarship extends CI_Controller
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
            redirect('admin/admin/dashboard');
        }
    }



    /*
    !----------------------------------------
    ! Scaholarship index
    !----------------------------------------
    */
    public function index()
    {
        $data['scholarships']  = $this->db->order_by('id','desc')->get('scholarship')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/scholarship/index');
        $this->load->view('back/lib/footer');
    }

    /*
    !--------------------------------------------------------
    !       Default Function Admin for Homepage
    !--------------------------------------------------------
    */
    public function add_scholarship()
    {
        $this->load->view('back/lib/header');
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/scholarship/add_scholarship');
        $this->load->view('back/lib/footer');
    }

     /*
    !--------------------------------------------------------
    !      Edit Scholarship
    !--------------------------------------------------------
    */
    public function edit_scholarship($id)
    {
        $data['scholarship']  = $this->db->where('id',$id)->get('scholarship')->row();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/scholarship/edit_scholarship');
        $this->load->view('back/lib/footer');
    }

    /*
    !----------------------------------------
    ! save_job 
    !----------------------------------------
    */
    
    public function save_scholarship()
    { 
        if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }

        $data['scholarship_name'] = $this->input->post('scholarship_name');
        $data['university_name'] = $this->input->post('university_name');
        $data['deadline'] = $this->input->post('deadline');
        $data['description'] = $this->input->post('description');

        if (!empty($_FILES['image']['thumbnail'])) {

                $config['upload_path'] = './uploads/scholarship/';
                $config['allowed_types'] = 'gif|jpg|png|GIF|JPG|JPEG|PNG';
                $config['max_size']     = 10000;
                $config['max_width']    = 10000;
                $config['max_height']   = 10000;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('thumbnail')) {
                    
                } else {
                    $upload_data = array('upload_data' => $this->upload->data());
                    $data['thumbnail'] = $upload_data['upload_data']['file_name'];
                }
            }

        $this->db->insert('scholarship',$data);
        $this->session->set_flashdata('success', 'Data Added successfully .');
        redirect('admin/scholarship/index');
    }


    public function update_scholarship()
    {
        // echo "<pre>";
        // print_r($_POST); exit; 
        $data['scholarship_name'] = $this->input->post('scholarship_name');
        $data['university_name']  = $this->input->post('university_name');
        $data['deadline']         = $this->input->post('deadline');
        $data['description']      = $this->input->post('description');

        if (!empty($_FILES['image']['thumbnail'])) {

            $userdata = $this->db->where('id',$this->input->post('id'))->get('scholarship')->row();

            if (file_exists('uploads/scholarship/'.$userdata->thumbnail)) {
                unlink('uploads/scholarship/'.$userdata->thumbnail);
            }

            $config['upload_path']   = './uploads/scholarship/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 500;
            $config['max_width']     = 10000;
            $config['max_height']    = 10000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('thumbnail')) {
                 $upload_data = array('upload_data' => $this->upload->data());
                 $data['thumbnail'] = $upload_data['upload_data']['file_name']  ;                 
            } 
        }

        $this->db->set('image',$data['image']);
        $this->db->where('user_id',$this->session->user_id);
        $this->db->update('tbl_user');
        $this->session->set_flashdata('success', 'Data upated successfully .');
         redirect('admin/scholarship');
    }

    /*
    !----------------------------------------
    ! save_job 
    !----------------------------------------
    */
    
    public function delete_scholarship($id)
    { 
        if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
        $this->db->where('id',$id)->delete('scholarship');
        $this->session->set_flashdata('success', 'Data Added successfully .');
        redirect('admin/scholarship');
    }

    /*
    !----------------------------------------
    ! save_job 
    !----------------------------------------
    */
    
    public function scholarship_applications()
    { 
        if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
        $this->db->join('scholarship','scholarship.id = scholarship_application.scholarship_id');
        $this->db->join('employee','employee.id = scholarship_application.employee_id');
        $data['scholarships']  = $this->db->get('scholarship_application')->result_object();
        //echo "<pre>";
        //print_r($data['applications']); exit;

        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/scholarship/scholarship_application');
        $this->load->view('back/lib/footer');
    }

}