<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="https://user-images.githubusercontent.com/17213478/55688195-b7cb5280-5997-11e9-890f-0a9fff5d4c09.jpg">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <div>
                    <small class="designation text-muted">Administrator</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>" target="1">
              <i class="menu-icon mdi mdi-web"></i>
              <span class="menu-title">View Site</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
            <a class="nav-link" href="<?php echo base_url(); ?>admin/admin/logout" onclick="return(confirm('will you logout ?'))">
              <i class="menu-icon mdi mdi-mouse"></i>
              <span class="menu-title">Logout</span>
            </a>
            
          </li>

        
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-job" aria-expanded="false" aria-controls="ui-job">
              <i class="menu-icon mdi mdi-format-list-bulleted"></i>
              <span class="menu-title">Jobs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-job">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/add-job">Add  Job</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/job-list">Job List</a>
                </li>
              </ul>
            </div>
          </li>



          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="menu-icon mdi mdi-format-list-bulleted"></i>
              <span class="menu-title">Job Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/add-job-category">Add  Job Category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/job-category-list">Job Category List</a>
                </li>
              </ul>
            </div>
          </li>

            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-scholarship" aria-expanded="false" aria-controls="ui-basic1">
              <i class="menu-icon mdi mdi-format-list-bulleted"></i>
              <span class="menu-title">Scholarship</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-scholarship">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/scholarship/index">Scholarships</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/scholarship/add_scholarship">Add Scholarship</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/scholarship/scholarship_applications">Scholarship Applications</a>
                </li>
                
              </ul>
            </div>
          </li>



           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-designation" aria-expanded="false" aria-controls="ui-designation">
              <i class="menu-icon mdi mdi-format-list-bulleted"></i>
              <span class="menu-title">Job Designation</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-designation">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/add-designation">Add  Designation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/designation-list"> Designation List</a>
                </li>
              </ul>
            </div>
          </li>

          


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic1">
              <i class="menu-icon mdi mdi-format-list-bulleted"></i>
              <span class="menu-title">Industry</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/add-industry">Add Industry</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/industry-list">Industry List</a>
                </li>
              </ul>
            </div>
          </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-pages" aria-expanded="false" aria-controls="ui-pages">
              <i class="menu-icon mdi mdi-format-list-bulleted"></i>
              <span class="menu-title">Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/add-page">Add Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/page-list">Page List</a>
                </li>
              </ul>
            </div>
          </li>

          

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-company" aria-expanded="false" aria-controls="ui-company">
              <i class="menu-icon mdi mdi-format-list-bulleted"></i>
              <span class="menu-title">Company</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-company">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/add-company">Add  Company</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/company-list">Company List</a>
                </li>
              </ul>
            </div>
          </li>





          
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li> -->
        </ul>
      </nav>