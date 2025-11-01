
   
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
            <h4 class="card-title">Add Social Link</h4>
            <form class="forms-sample" action="<?php echo base_url('add-social-link'); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" required name="name" id="exampleInputName1" placeholder="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Link</label>
                <input type="text" class="form-control" required name="link" id="exampleInputEmail3" placeholder="link">
              </div>
              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="image" required class="form-control" placeholder="Upload Image">
                </div>
              </div>
              <button type="submit" value="add-blog" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('blog');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
