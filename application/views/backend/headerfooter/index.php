
   
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
            <h4 class="card-title">Edit Header & Footer</h4>
            <form class="forms-sample" action="<?php echo base_url('header-footer'); ?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label>Header Logo</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="header_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $headerfooter['header_img'] ?>"> 
                </div>
              </div>
               <div class="form-group">
                   <img src="<?= base_url('./uploads/').$headerfooter['header_img']?>" style="width: 50%;height: 50%;">
              </div>

              <div class="form-group">
                <label>Footer Logo</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="footer_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image_1" value="<?= $headerfooter['footer_img'] ?>"> 
                </div>
              </div>
               <div class="form-group">
                   <img src="<?= base_url('./uploads/').$headerfooter['footer_img']?>" style="width: 50%;height: 50%;">
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Registered Office</label>
                <textarea class="form-control" required name="register_office" id="editor" rows="4"><?= $headerfooter['register_office'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Corporate Office</label>
                <textarea class="form-control" required name="corporate_office" id="editor1" rows="4"><?= $headerfooter['corporate_office'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Contact</label>
                <textarea class="form-control" required name="contact" id="editor2" rows="4"><?= $headerfooter['contact'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Ratnamani Inc</label>
                <textarea class="form-control" required name="ratnamani_inc" id="editor3" rows="4"><?= $headerfooter['ratnamani_inc'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Copy Right</label>
                <textarea class="form-control" required name="copy_right" id="editor4" rows="4"><?= $headerfooter['copy_right'] ?></textarea>
              </div>

            


              <button type="submit" value="add-headerfooter" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('header-footer');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
