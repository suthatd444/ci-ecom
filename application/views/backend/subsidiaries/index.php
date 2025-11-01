
   
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
            <h4 class="card-title">Edit Subsidiaries</h4>
            <form class="forms-sample" action="<?php echo base_url('subsidiaries'); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Tab 1</label>
                <input type="text" class="form-control" required value="<?= $subsidiaries['tab_1'] ?>" name="tab_1" id="exampleInputName1" placeholder="Title">
              </div>
              <div class="form-group">
                <label>Tab1 Logo</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="tab_1_logo" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="tab_1_image" value="<?= $subsidiaries['tab_1_logo'] ?>"> 
                </div>
              </div>
              <div class="form-group">
                   <img src="<?= base_url('./uploads/').$subsidiaries['tab_1_logo']?>" style="width: 10%;height: 10%;">
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Tab 2</label>
                <input type="text" class="form-control" required value="<?= $subsidiaries['tab_2'] ?>" name="tab_2" id="exampleInputName1" placeholder="Title">
              </div>
              <div class="form-group">
                <label>Tab2 Logo</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="tab_2_logo" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="tab_2_image" value="<?= $subsidiaries['tab_2_logo'] ?>"> 
                </div>
              </div>
              <div class="form-group">
                   <img src="<?= base_url('./uploads/').$subsidiaries['tab_2_logo']?>" style="width: 10%;height: 10%;">
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Tab 3</label>
                <input type="text" class="form-control" required value="<?= $subsidiaries['tab_3'] ?>" name="tab_3" id="exampleInputName1" placeholder="Title">
              </div>
              <div class="form-group">
                <label>Tab3 Logo</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="tab_3_logo" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="tab_3_image" value="<?= $subsidiaries['tab_3_logo'] ?>"> 
                </div>
              </div>
              <div class="form-group">
                   <img src="<?= base_url('./uploads/').$subsidiaries['tab_3_logo']?>" style="width: 10%;height: 10%;">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail3">Tab 1 Sub Title</label>
                <input type="text" class="form-control" required value="<?= $subsidiaries['tab_title_1'] ?>" name="tab_title_1" id="exampleInputEmail3" placeholder="Sub Title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tab 2 Sub Title</label>
                <input type="text" class="form-control" required value="<?= $subsidiaries['tab_title_2'] ?>" name="tab_title_2" id="exampleInputEmail3" placeholder="Sub Title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tab 3 Sub Title</label>
                <input type="text" class="form-control" required value="<?= $subsidiaries['tab_title_3'] ?>" name="tab_title_3" id="exampleInputEmail3" placeholder="Sub Title">
              </div>
              <div class="form-group">
                <label>Tab 1 upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="tab_img_1" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image_1" value="<?= $subsidiaries['tab_img_1'] ?>"> 
                </div>
              </div>
               <div class="form-group">
                   <img src="<?= base_url('./uploads/').$subsidiaries['tab_img_1']?>" style="width: 10%;height: 10%;">
              </div>
              <div class="form-group">
                <label>Tab 2 upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="tab_img_2" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image_2" value="<?= $subsidiaries['tab_img_2'] ?>"> 
                </div>
              </div>
               <div class="form-group">
                   <img src="<?= base_url('./uploads/').$subsidiaries['tab_img_2']?>" style="width: 10%;height: 10%;">
              </div>
              <div class="form-group">
                <label>Tab 3 upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="tab_img_3" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image_3" value="<?= $subsidiaries['tab_img_3'] ?>"> 
                </div>
              </div>
               <div class="form-group">
                   <img src="<?= base_url('./uploads/').$subsidiaries['tab_img_3']?>" style="width: 10%;height: 10%;">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Tab 1 Description</label>
                <textarea class="form-control" required name="tab_desc_1" id="editor" rows="4"><?= $subsidiaries['tab_desc_1'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Tab 2 Description</label>
                <textarea class="form-control" required name="tab_desc_2" id="editor1" rows="4"><?= $subsidiaries['tab_desc_2'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Tab 3 Description</label>
                <textarea class="form-control" required name="tab_desc_3" id="editor2" rows="4"><?= $subsidiaries['tab_desc_3'] ?></textarea>
              </div>
              <button type="submit" value="add-subsidiaries" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('subsidiaries');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
