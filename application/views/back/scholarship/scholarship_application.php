<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Scholarship Application list</h4>
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
                  <th>SL </th>
                  <th>Scholarship Name</th>
                  <th>University Name</th>
                  <th>Applicant</th>

                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach($scholarships as $scholarship) {?>
                 <tr>
                  <td ><?php echo $i ;?></td>
                  <td ><?php echo $scholarship->scholarship_name; ?></td>
                  <td ><?php echo $scholarship->university_name; ?></td>
                  <td ><?php echo $scholarship->fullname; ?></td>
                  
                </tr>
                <?php $i++;} ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>