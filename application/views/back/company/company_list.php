<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Company list</h4>


          <?php if($this->session->success): ?>
            <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
          <?php endif; ?>

          <?php if($this->session->error): ?>
            <p class="alert alert-warning" id="message"><?php echo $this->session->error; ?></p>
          <?php endif; ?> 

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Company Name</th>
                  <th>Location</th>
                  <th>Address</th>
                  <th>Founded On</th>
                  <th>Total Employee</th>
                  <th>Action </th>
                </tr>
              </thead>
              <tbody>
               <?php $i = 1; foreach($companies as $company) {?>
                 <tr>
                  <td ><?php echo $i ;?></td>
                  <td ><?php echo ucfirst( $company->company_name); ?></td>
                  <td ><?php echo ucfirst( $company->location); ?></td>
                  <td ><?php echo ucfirst( $company->address); ?></td>
                  <td ><?php echo ucfirst( $company->founded_on); ?></td>
                  <td ><?php echo ucfirst( $company->total_employee); ?></td>

                  <td>
                    <a href="<?php echo base_url();?>admin/edit-company/<?php echo $company->company_id; ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?php echo base_url();?>admin/delete-company/<?php echo $company->company_id; ?>" class="btn btn-sm btn-danger" onclick="return(confirm('are you sure to delete?'))">Delete</a>
                  </td>

                </tr>
                <?php $i++;} ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>