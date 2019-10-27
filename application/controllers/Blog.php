<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
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
        $this->load->model('blogmodel');
    }

    /*
    !-----------------------------------------
    ! Single Blog
    !-----------------------------------------
    */
    public function view($blog_id)
    {
        $data['blog']           = $this->blogmodel->single_blog($blog_id);
        $data['total_comment']  = $this->blogmodel->blog_comment_counter($blog_id);
        $data['comments']       = $this->blogmodel->blog_comments($blog_id);
        $data['recent_blogs']   = $this->blogmodel->recent_blog();
    
        $this->load->view('front/lib/header',$data);
        $this->load->view('front/blog/blog_single');
        $this->load->view('front/lib/footer'); 
    }

    /*
    !-----------------------------------------
    ! Single Blog
    !-----------------------------------------
    */
    public function save_blog_comment()
    {
      //  echo '<pre>';
        //print_r($_POST); exit;

        $data['commentor']  = $this->input->post('commentor');
        $data['comment_email']  = $this->input->post('comment_email');
        $data['comment']  = $this->input->post('comment');
        $data['blog_id']  = $this->input->post('blog_id');
        $this->db->insert('comments',$data);
        redirect(base_url().'blog/'.$data['blog_id'].'#blog-comment-section');

    }
}