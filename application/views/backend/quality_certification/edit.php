
   
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
            <h4 class="card-title">Edit Quality Certification</h4>
            <form class="forms-sample" action="<?php echo base_url('edit-quality-certifications?id=').$quality_certification['id']; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $quality_certification['id'] ?>">
              <div class="form-group">
                <label for="exampleInputName1">Tab</label>
                <select class="form-control" name="tab" >
                    <option <?php if($quality_certification['tab'] == 'Tab 1') { echo 'selected'; }?> value="Tab 1" >Tab 1</option>
                    <option <?php if($quality_certification['tab'] == 'Tab 2') { echo 'selected'; }?> value="Tab 2" >Tab 2</option>
                    <option <?php if($quality_certification['tab'] == 'Tab 3') { echo 'selected'; }?> value="Tab 3" >Tab 3</option>
                </select>
              </div>
              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="quality_certification_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $quality_certification['image'] ?>"> 
                </div>
              </div>
              <div class="form-group">
                   <img src="<?= base_url('./uploads/').$quality_certification['image']?>" style="width: 10%;height: 10%;">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" name="description" required id="editor" rows="4"><?= $quality_certification['description'] ?></textarea>
              </div>
              <button type="submit" value="add-product" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('product');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
