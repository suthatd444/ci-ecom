<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <?php if ($this->session->flashdata('succ_msg')) { ?>
              <div class="alert alert-success"> <?= $this->session->flashdata('succ_msg') ?> </div>
            <?php } elseif ($this->session->flashdata('error_msg')) { ?>
              <div class="alert alert-danger"> <?= $this->session->flashdata('error_msg') ?> </div>
            <?php } ?>
            <h4 class="card-title">Edit CSR Activity</h4>
            <form class="forms-sample" action="<?php echo base_url('edit-csractivity?id=') . $csractivity['id']; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $csractivity['id'] ?>">
              <div class="form-group">
                <select class="form-control" name="type">
                  <?php

                  foreach ($csractivity_type as $row) {
                  ?>
                    <option <?php if ($row['id'] == $csractivity['type']) {
                              echo 'selected';
                            } ?> value="<?= $row['id'] ?>"><?= $row['name'] ?></option>

                  <?php
                  }
                  ?>

                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="text" class="form-control" value="<?= $csractivity['title'] ?>" required name="title" id="exampleInputName1" placeholder="Title">
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Sub Title</label>
                <input type="text" class="form-control" value="<?= $csractivity['sub_title'] ?>" required name="sub_title" id="exampleInputName1" placeholder="Sub Title">
              </div>

              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="csractivity_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $csractivity['image'] ?>">
                </div>
              </div>

              <div class="form-group">
                <img src="<?= base_url('./uploads/') . $csractivity['image'] ?>" style="width: 10%;height: 10%;">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" name="description" required id="editor" rows="4"><?= $csractivity['description'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Top Description</label>
                <textarea class="form-control" name="top_desc" required id="editor1" rows="4"><?= $csractivity['top_desc'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Bottom Description</label>
                <textarea class="form-control" name="bottom_desc" required id="editor2" rows="4"><?= $csractivity['bottom_desc'] ?></textarea>
              </div>

              <div id="document-div">
                <?php if (!empty($csractivity['listing_image'])) {
                  foreach (explode(",", $csractivity['listing_image']) as $row) {
                ?>
                    <div class="card card-body">
                      <div class="row">

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleTextarea1">Image</label>

                            <div class="form-group">
                              <img src="<?= base_url('./uploads/') . $row ?>" style="width: 10%;height: 10%;">
                            </div>
                            <input type="file" class="form-control" name="document[]">
                            <input type="hidden" value=<?= $row ?> required class="form-control" name="already_image[]">
                          </div>

                        </div>

                      </div>
                    </div>
                    <br />
                <?php  }
                } ?>
              </div>

              <button type="button" class="btn btn-secondary pull-right" onclick="addRow()">Add Listing image</button>
              <br />
              <br /> <br />
              <button type="submit" value="add-csractivity" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('csractivity'); ?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <script>
    function addRow() {
      let html = $(`#document-div`).html();
      $(`#document-div`).append(` <div class="card card-body" style="margin:20px 0px">
       <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleTextarea1">Image</label>
                        <input type="file" required class="form-control" name="document[]">
                      </div>

                    </div>
                    <div class="col-md-2"> <button class="btn btn-danger" onclick=$(this).parent().parent().parent().remove()>x</button></div>
                  </div>
                 
                </div>
               `);

      // console.log(newhtml);
    }
  </script>
  <!-- content-wrapper ends -->