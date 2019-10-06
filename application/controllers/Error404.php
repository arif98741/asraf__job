<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller
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
    !       404 Page
    !--------------------------------------------------------
    */
    public function index()
    {
        $this->load->view('errors/cli/error_404');
    }

    
}