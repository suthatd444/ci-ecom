
   
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
            <h4 class="card-title">Edit Locate Us</h4>
            <form class="forms-sample" action="<?php echo base_url('edit-locate-us?id=').$locateus['id']; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $locateus['id'] ?>">
            
             <div class="form-group">
                <label for="exampleTextarea1"> Title</label>
                <textarea class="form-control" required name="title" id="editor5" rows="4"><?= $locateus['title'] ?></textarea>
              </div>
              
              <div class="form-group">
                <label for="exampleTextarea1"> Description</label>
                <textarea class="form-control" required name="description" id="editor4" rows="4"><?= $locateus['description'] ?></textarea>
              </div>
              <button type="submit" value="add-locate-us" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('locateus');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
