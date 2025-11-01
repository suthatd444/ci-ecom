
   
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
            <h4 class="card-title">Edit Financial Reports</h4>
            <form class="forms-sample" action="<?php echo base_url('edit-annual-reports?id=').$annualreports['id']; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $annualreports['id'] ?>">
              <div class="form-group">
                <label for="exampleTextarea1">Financial Type</label>
                <select name="report_type" class="form-control">
                  <option <?php if($annualreports['report_type']=='Annual Reports'){ echo 'selected'; } ?> value="Annual Reports" >Annual Reports</option>
                  <option <?php if($annualreports['report_type']=='Quarterly Results'){ echo 'selected'; } ?> value="Quarterly Results" >Quarterly Results</option>
                  <option <?php if($annualreports['report_type']=='Subsidiaries Financial'){ echo 'selected'; } ?> value="Subsidiaries Financial" >Subsidiaries Financial</option>
                  <option <?php if($annualreports['report_type']=='Investor Presentation'){ echo 'selected'; } ?> value="Investor Presentation" >Investor Presentation</option>
                  <option <?php if($annualreports['report_type']=='Conference Calls Transcripts'){ echo 'selected'; } ?> value="Conference Calls Transcripts" >Conference Calls Transcripts</option>
                  <option <?php if($annualreports['report_type']=='Conference Calls Recordings'){ echo 'selected'; } ?> value="Conference Calls Recordings" >Conference Calls Recordings</option>
                </select>
              </div>
              <div class="form-group">
                <label>PDF upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="annual_reports_pdf" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="pdf" value="<?= $annualreports['pdf'] ?>"> 
                </div>
              </div>
              <div class="form-group">
                   <a download href="<?= base_url('./uploads/').$annualreports['pdf'] ?>"  >Download PDF</a>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Year</label>
                <input type="text" required accept=".pdf" class="form-control" name="year" value="<?= $annualreports['year'] ?>">
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
