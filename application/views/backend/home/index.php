

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
            <h4 class="card-title">Edit Home</h4>
            <form class="forms-sample" action="<?php echo base_url('home'); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Home Top Image</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="home_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $home['home_img'] ?>">
                </div>
              </div>
               <div class="form-group">
                   <img src="<?= base_url('./uploads/').$home['home_img']?>" style="width: 50%;height: 50%;">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Home Top Description</label>
                <textarea class="form-control" required name="home_desc" id="editor" rows="4"><?= $home['home_desc'] ?></textarea>
              </div>

               <h4 class="card-title">Vision , Mission , Philosophy</h4>

              <!--  <div class="form-group">
                <label>Vision Image</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="vision_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image_1" value="<?= $home['vision_img'] ?>">
                </div>
              </div> -->
               <!-- <div class="form-group">
                   <img src="<? //= base_url('./uploads/').$home['vision_img']?>" style="width: 50%;height: 50%;">
              </div> -->
              <div class="form-group">
                <label for="exampleTextarea1">Vision Description</label>
                <textarea class="form-control" required name="vision_desc" id="editor1" rows="4"><?= $home['vision_desc'] ?></textarea>
              </div>

              <!-- <div class="form-group">
                <label>Mission Image</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="mission_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image_2" value="<?= $home['mission_img'] ?>">
                </div>
              </div> -->
              <!--  <div class="form-group">
                   <img src="<?= base_url('./uploads/').$home['mission_img']?>" style="width: 50%;height: 50%;">
              </div> -->
              <div class="form-group">
                <label for="exampleTextarea1">Mission Description</label>
                <textarea class="form-control" required name="mission_desc" id="editor2" rows="4"><?= $home['mission_desc'] ?></textarea>
              </div>

              <!-- <div class="form-group">
                <label>Philosophy Image</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="philosophy_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image_3" value="<?= $home['philosophy_img'] ?>">
                </div>
              </div> -->
              <!--  <div class="form-group">
                   <img src="<?= base_url('./uploads/').$home['philosophy_img']?>" style="width: 50%;height: 50%;">
              </div> -->
              <div class="form-group">
                <label for="exampleTextarea1">Philosophy Description</label>
                <textarea class="form-control" required name="philosophy_desc" id="editor3" rows="4"><?= $home['philosophy_desc'] ?></textarea>
              </div>

              <!--<h4 class="card-title">Ratnamani Highlights</h4>-->

              <!--<div class="form-group">-->
              <!--  <label>Ratnamani Highlights Image</label>-->
              <!--  <input type="file" name="img" class="file-upload-default">-->
              <!--  <div class="input-group col-xs-12">-->
              <!--    <input type="file" name="ratnamani_highlight_img" class="form-control" placeholder="Upload Image">-->
              <!--    <input type="hidden" name="image_4" value="<?= $home['ratnamani_highlight_img'] ?>"> -->
              <!--  </div>-->
              <!--</div>-->
              <!-- <div class="form-group">-->
              <!--     <img src="<?= base_url('./uploads/').$home['ratnamani_highlight_img']?>" style="width: 50%;height: 50%;">-->
              <!--</div>-->
              <!--<div class="form-group">-->
              <!--  <label for="exampleTextarea1">Ratnamani Highlights Description</label>-->
              <!--  <textarea class="form-control" required name="ratnamani_highlight_desc" id="editor4" rows="4"><?= $home['ratnamani_highlight_desc'] ?></textarea>-->
              <!--</div>-->

              <h4 class="card-title">Our Intellegent Investors Growing With Ratnamani</h4>

              <div class="form-group">
                <label for="exampleTextarea1">Intellegent Investors Description</label>
                <textarea class="form-control" required name="intellegent_investors_desc" id="editor5" rows="4"><?= $home['intellegent_investors_desc'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">OUR PRODUCT</label>
                <textarea class="form-control" required name="our_product_desc" id="editor6" rows="4"><?= $home['our_product_desc'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">OUR PRESENCE</label>
                <textarea class="form-control" required name="our_presence_desc" id="editor7" rows="4"><?= $home['our_presence_desc'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">CUSTOMER BASE</label>
                <textarea class="form-control" required name="customer_base_desc" id="editor8" rows="4"><?= $home['customer_base_desc'] ?></textarea>
              </div>
                <div class="form-group">
                <label for="exampleTextarea1">ABOUT US TITLE</label>
                <textarea class="form-control" required name="about_us_title" id="editor9" rows="4"><?= $home['about_us_title'] ?></textarea>
              </div>

              <button type="submit" value="add-home" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('home');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
