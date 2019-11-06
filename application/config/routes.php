<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] 	 = 'home';
$route['bn'] 	 			     = 'home/index_bn';

/*
!---------------------------------------------------
! 	Admin
!---------------------------------------------------
*/
$route['admin'] 			= 'admin/admin/index';

$route['admin/dashboard'] 	= 'admin/admin/dashboard';
$route['admin/add-job'] 	= 'job/add_job';
$route['admin/job-list'] 	= 'job/job_list';
$route['admin/edit_job/(:num)']= 'job/edit_job/$1';
$route['admin/update_job/(:num)']= 'job/update_job/$1';
$route['admin/delete_job/(:num)']= 'job/delete_job/$1';

$route['admin/add-job-category']= 'job/add_job_category';
$route['admin/job-category-list']= 'job/job_category_list';
$route['admin/edit-job-category/(:num)']= 'job/edit_job_category/$1';
$route['admin/update-job-category/(:num)']	= 'job/update_job_category/$1';
$route['admin/delete-job-category/(:num)']	= 'job/delete_job_category/$1';

$route['admin/add-industry']			= 'job/add_industry';
$route['admin/industry-list']			= 'job/industry_list';
$route['admin/edit-industry/(:num)']	= 'job/edit_industry/$1';
$route['admin/update-industry/(:num)']	= 'job/update_industry/$1';
$route['admin/delete-industry/(:num)']	= 'job/delete_industry/$1';


$route['admin/add-designation']			= 'job/add_designation';
$route['admin/designation-list']		= 'job/designation_list';
$route['admin/edit-designation/(:num)']	= 'job/edit_designation/$1';
$route['admin/update-designation/(:num)']	= 'job/update_designation/$1';
$route['admin/delete-designation/(:num)']	= 'job/delete_designation/$1';

$route['admin/add-company']				= 'job/add_company';
$route['admin/company-list']			= 'job/company_list';
$route['admin/edit-company/(:num)']		= 'job/edit_company/$1';
$route['admin/update-company/(:num)']	= 'job/update_company/$1';
$route['admin/delete-company/(:num)']	= 'job/delete_company/$1';

$route['admin/add-page']				= 'page/add_page';
$route['admin/page-list']				= 'page/page_list';
$route['admin/edit-page/(:num)']		= 'page/edit_page/$1';
$route['admin/update-page/(:num)']		= 'page/update_page/$1';
$route['admin/delete-page/(:num)']		= 'page/delete_page/$1';



/*
!-------------------------------------------
! HOmepage
!-------------------------------------------
*/
$route['recruiter/all']	 = "recruiter/all_recruiters";	

$route['login']	  					= 'login/index';	
$route['signup']	  			= 'login/signup';	
$route['seeker/registration']	  = 'seeker/seeker/registration';	
$route['provider_registration']	  = 'company/company/registration';	
$route['company/logout']	  	= 'company/company/logout';	
$route['seeker/logout']	  		= 'seeker/seeker/logout';	
$route['page/(:num)/(:any)']	= 'home/view_page/$1/$2';
$route['browse_resumes/(:num)']	= 'seeker/seeker/browse_resumes/$1';
$route['search/(:num)/(:any)']	= 'home/search_page/$1/$2';
$route['search/search_action']	= 'home/search_action1';
$route['blogs']					= 'blog/index';
$route['blog/(:num)']			= 'blog/view/$1';
$route['contact-us']			= 'home/contact_us';
$route['company/forgot_password']= 'company/company/forgot_password';



$route['404_override'] 		   = 'error404'; //override by controller
$route['translate_uri_dashes'] = FALSE;





