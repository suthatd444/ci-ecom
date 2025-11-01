
   
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
            <h4 class="card-title">Add Career Point</h4>
            <form class="forms-sample" action="<?php echo base_url('add-careers'); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="text" class="form-control" required name="title" id="exampleInputName1" placeholder="Title">
              </div>
             
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" required name="description" id="editor" rows="4"></textarea>
              </div>
              <button type="submit" value="add-careers" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('careers');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
