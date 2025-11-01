
   
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
            <h4 class="card-title">Edit Company Profile</h4>
            <form class="forms-sample" action="<?php echo base_url('company-profile'); ?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="companyprofile_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $companyprofile['image'] ?>"> 
                </div>
              </div>
               <div class="form-group">
                   <img src="<?= base_url('./uploads/').$companyprofile['image']?>" style="width: 50%;height: 50%;">
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Title</label>
                <textarea class="form-control" required name="title" id="editor" rows="4"><?= $companyprofile['title'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" required name="description" id="editor1" rows="4"><?= $companyprofile['description'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Gist Of Our Legacy</label>
                <textarea class="form-control" required name="legacy" id="editor2" rows="4"><?= $companyprofile['legacy'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Vision</label>
                <textarea class="form-control" required name="vision" id="editor3" rows="4"><?= $companyprofile['vision'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Mission</label>
                <textarea class="form-control" required name="mission" id="editor4" rows="4"><?= $companyprofile['mission'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Philosophy</label>
                <textarea class="form-control" required name="philosophy" id="editor5" rows="4"><?= $companyprofile['philosophy'] ?></textarea>
              </div>

              <button type="submit" value="add-companyprofile" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('companyprofile');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
