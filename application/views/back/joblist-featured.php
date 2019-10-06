<div class="main-panel">
  <div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Job list</h4>


       <?php if($this->session->success): ?>
          <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
       <?php endif; ?>

       <?php if($this->session->error): ?>
          <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
       <?php endif; ?> 

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                SL
                            </th>
                            <th>
                               Job Title
                            </th>
                            <th>
                                Category Name
                            </th>
                            
                            <th>
                                Company Name
                            </th>
                            
                            <th>
                                Posted Date
                            </th>
                             
                            <th>
                               Action
                            </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                         <?php $i = 1; foreach($jobs as $job) {?>
                     <tr>
                    <td ><?php echo $i ;?></td>
                    <td ><?php echo $job->job_title; ?></td>
                    <td ><?php echo $job->jobcat_id; ?></td>
                    <td ><?php echo $job->company_name; ?></td>
                    
                    <td ><?php echo $job->posted_date; ?></td>
                  
                    

                             <td>
                                <a href="<?php echo base_url();?>job/edit_job/<?php echo $job->job_id; ?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="<?php echo base_url();?>job/delete_job/<?php echo $job->job_id; ?>" class="btn btn-sm btn-danger" onclick="return(confirm('are you sure to delete?'))">Delete</a>
                            </td>

                            
                        </tr>
                        <?php $i++;} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>