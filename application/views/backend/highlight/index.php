
   
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
            <h4 class="card-title">Edit Highlights</h4>
            <form class="forms-sample" action="<?php echo base_url('highlights'); ?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label>Highlights Image</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="highlight_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $highlight['image'] ?>"> 
                </div>
              </div>
               <div class="form-group">
                   <img src="<?= base_url('./uploads/').$highlight['image']?>" style="width: 50%;height: 50%;">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Highlights Description</label>
                <textarea class="form-control" required name="highlight_desc" id="editor4" rows="4"><?= $highlight['description'] ?></textarea>
              </div>

            


              <button type="submit" value="add-highlight" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('highlight');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
