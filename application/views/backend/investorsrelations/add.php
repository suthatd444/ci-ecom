
   
<!-- partial -->
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
    
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <?php if ($this->session->flashdata('succ_msg')) { ?>
              <div class="alert alert-success"> <?= $this->session->flashdata('succ_msg') ?> </div>
          <?php }elseif($this->session->flashdata('error_msg')){ ?>
                    <div class="alert alert-danger"> <?= $this->session->flashdata('error_msg') ?> </div>
          <?php } ?>
            <h4 class="card-title">Add Financial Reports</h4>
            <form class="forms-sample" action="<?php echo base_url('add-annual-reports'); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleTextarea1">Financial Type</label>
                <select name="report_type" class="form-control">
                  <option value="Annual Reports" >Annual Reports</option>
                  <option value="Quarterly Results" >Quarterly Results</option>
                  <option value="Subsidiaries Financial" >Subsidiaries Financial</option>
                  <option value="Investor Presentation" >Investor Presentation</option>
                  <option value="Conference Calls Transcripts" >Conference Calls Transcripts</option>
                  <option value="Conference Calls Recordings" >Conference Calls Recordings</option>
                </select>
              </div>
              <div class="form-group">
                <label>PDF upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="annual_reports_pdf" required class="form-control" placeholder="Upload Image">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Year</label>
                <input type="text" accept=".pdf" required class="form-control" name="year" >
              </div>
              <button type="submit" value="add-annual-reports" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('annual-reports');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
