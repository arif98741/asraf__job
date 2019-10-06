<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php


class Countermodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database("default", TRUE);
       
    }
    public function totalDesignation()
    {
        $result = $this->db->query("select * from tbl_designation");
        return $result->result_id->num_rows;
    }

    public function totalCategory()
    {
        $result = $this->db->query("select * from tbl_job_category");
        return $result->result_id->num_rows;
    }

    public function totalCompany()
    {
        $result = $this->db->query("select * from tbl_company");
        return $result->result_id->num_rows;
    }

    public function totalJob()
    {
        $result = $this->db->query("select * from tbl_job");
        return $result->result_id->num_rows;
    }

    

    



}

?>