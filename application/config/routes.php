<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] 	 = 'home';

/*
!---------------------------------------------------
! 	Admin
!---------------------------------------------------
*/
/*
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



$route['jobs/(:num)'] 					= 'publicview/job_single/$1';
$route['jobs/job_single/(:num)'] 		= 'publicview/job_single/$1';
$route['profile']	       			    = 'registration/profile';
$route['registration']	   				= 'registration/registration';
$route['login']	  		   				= 'registration/login';
$route['logout']	  	    			= 'registration/logout';
$route['page/(:num)/(:any)']			= 'publicview/view_page/$1/$2';
$route['jobs/search']		 			= 'search/index';

$route['jobs']				 			= 'search/all_jobs';
$route['jobs/all']				 		= 'search/all_jobs';
$route['jobs/category/(:num)/(:any)']	= 'search/jobs_category/$1/$2';
$route['jobs/job-type/(:any)']			= 'search/jobs_type/$1';
$route['jobs/search_result/(:any)']	    = 'search/search_result';



	!-------------------------------------------
	! Employee
	!-------------------------------------------

$route['employee/profle']	   	= 'employee/profile';	
$route['scholarship']	   		= "publicview/scholarship";	
$route['scholarship/apply/(:num)']	 = "publicview/scholarship_apply/$1";	



$route['recruiter/all']	 = "recruiter/all_recruiters";	*/

$route['login']	  					= 'login/index';	
$route['seeker/registration']	  = 'seeker/seeker/registration';	
$route['provider_registration']	  = 'company/company/registration';	
$route['company/logout']	  	= 'company/company/logout';	
$route['seeker/logout']	  		= 'seeker/seeker/logout';	



$route['404_override'] 		   = 'error404'; //override by controller
$route['translate_uri_dashes'] = FALSE;





