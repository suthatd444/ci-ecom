
   
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
            <h4 class="card-title">Add Board</h4>
            <form class="forms-sample" action="<?php echo base_url('add-board'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleTextarea1">IS PRIMARY</label>
                <input type="checkbox" name="is_primary" />
                
              </div>
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="board_img" required class="form-control" placeholder="Upload Image">
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="exampleTextarea1">Year</label>
                <input class="form-control" required name="year">
              </div> -->
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" required name="description" id="editor" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Main Description</label>
                <textarea class="form-control" required name="main_desc" id="editor1" rows="4"></textarea>
              </div>
              <button type="submit" value="add-board" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('board');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
