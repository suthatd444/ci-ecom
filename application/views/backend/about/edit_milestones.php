
   
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
            <h4 class="card-title">Edit Milestones</h4>
            <form class="forms-sample" action="<?php echo base_url('edit-milestones?id=').$milestones['id']; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $milestones['id'] ?>">
              <div class="form-group">
                <label for="exampleInputName1">Year</label>
                <input type="text" class="form-control" required name="year" value="<?= $milestones['year'] ?>" id="exampleInputName1" placeholder="Year">
              </div>
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="milestones_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $milestones['image'] ?>"> 
                </div>
              </div>
              <div class="form-group">
                   <img src="<?= base_url('./uploads/').$milestones['image']?>" style="width: 10%;height: 10%;">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" name="description" required id="editor" rows="4"><?= $milestones['description'] ?></textarea>
              </div>
              <button type="submit" value="add-milestones" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('milestones');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
