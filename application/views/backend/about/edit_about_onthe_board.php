
   
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
            <h4 class="card-title">Edit About On The Board</h4>
            <form class="forms-sample" action="<?php echo base_url('edit-about-on-the-board?id=').$board['id']; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $board['id'] ?>">
            
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="board_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $board['image'] ?>"> 
                </div>
              </div>
              <div class="form-group">
                   <img src="<?= base_url('./uploads/').$board['image']?>" style="width: 100%;height: 100%;">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" name="description" required id="editor" rows="4"><?= $board['description'] ?></textarea>
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
