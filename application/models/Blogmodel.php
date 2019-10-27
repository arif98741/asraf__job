<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Blogmodel extends  CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database("default",TRUE);
	}

	public function single_blog($blog_id)
	{
		$this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $this->db->where('blog_id',$blog_id);
        $this->db->order_by('tbl_blog.blog_id','desc');
        return $this->db->get('tbl_blog')->row();
	}

	public function recent_blog($limit=3)
	{
		$this->db->join('tbl_blog_category','tbl_blog_category.tbcid = tbl_blog.tbcid');
        $this->db->order_by('tbl_blog.blog_id','desc');
        $this->db->limit($limit);
        return $this->db->get('tbl_blog')->result_object();
	}


	public function blog_comments($blog_id)
	{
		$this->db->join('tbl_blog','comments.blog_id = tbl_blog.blog_id');
        $this->db->where('tbl_blog.blog_id',$blog_id);
        $this->db->order_by('comments.id','desc');
        return  $this->db->get('comments')->result_object();
	}

	public function blog_comment_counter($blog_id)
	{
        $this->db->where('blog_id',$blog_id);
        return  $this->db->get('comments')->num_rows();
	}
	
}
?>