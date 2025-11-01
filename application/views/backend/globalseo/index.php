
   
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
            <h4 class="card-title">Edit Global SEO</h4>
            <form class="forms-sample" action="<?php echo base_url('global-seo'); ?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="exampleTextarea1"> Title</label>
                <input class="form-control" required name="title" id="" value="<?= $globalseo['title'] ?>" >
              </div>

              <div class="form-group">
                <label for="exampleTextarea1"> Description</label>
                <input class="form-control" required name="description" id="" value="<?= $globalseo['description'] ?>" >
              </div>

              <div class="form-group">
                <label for="exampleTextarea1"> Keywords</label>
                <input class="form-control" required name="keyword" id="" value="<?= $globalseo['keyword'] ?>" >
              </div>

              <div class="form-group">
                <label> Image</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="seo_image" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $globalseo['image'] ?>"> 
                </div>
              </div>
               <div class="form-group">
                   <img src="<?= base_url('./uploads/').$globalseo['image']?>" style="width: 50%;height: 50%;">
              </div>
              
              <button type="submit" value="add-global-seo" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('global-seo');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
