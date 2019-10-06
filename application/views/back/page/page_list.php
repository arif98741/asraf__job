<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Job Category list</h4>


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
                  <th> SL</th>
                  <th>Page Title</th>
                  <th>Description</th>
                  <th>Action </th>


               </tr>
             </thead>
             <tbody>
               <?php $i = 1; foreach($pages as $page) {?>
                 <tr>
                  <td ><?php echo $i ;?></td>
                  <td ><?php echo ucfirst( $page->title); ?></td>
                  <td ><?php echo substr(ucfirst( htmlspecialchars_decode($page->description)), 0,50); ?></td>
                  <td>
                    <a href="<?php echo base_url();?>admin/edit-page/<?php echo $page->id; ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?php echo base_url();?>admin/delete-page/<?php echo $page->id; ?>" class="btn btn-sm btn-danger" onclick="return(confirm('are you sure to delete?'))">Delete</a>
                  </td>
                </tr>
                <?php $i++;} ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>