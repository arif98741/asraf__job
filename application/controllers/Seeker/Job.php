<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller
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
    public function browse_jobs()
    {
        $this->load->view('front/lib/header');
        $this->load->view('front/seeker/log_reg/registration');
        $this->load->view('front/lib/footer');
        
    }



}