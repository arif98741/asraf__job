<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
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
    !----------------------------------------
    ! Home page website
    !----------------------------------------
    */
    public function index()
    {
        //echo '<pre>';
        //print_r($this->session->all_userdata()); exit;


        $this->load->view('front/lib/header');
        $this->load->view('front/lib/banner');
        $this->load->view('front/home');
        $this->load->view('front/lib/footer');
    }
}