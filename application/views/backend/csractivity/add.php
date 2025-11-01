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
            <h4 class="card-title">Add CSR Activity</h4>
            <form class="forms-sample" action="<?php echo base_url('add-csractivity'); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <select class="form-control" name="type">
                  <?php

                  foreach ($csractivity_type as $row) {
                  ?>
                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>

                  <?php
                  }
                  ?>

                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="text" class="form-control" required name="title" id="exampleInputName1" placeholder="Title">
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Sub Title</label>
                <input type="text" class="form-control" required name="sub_title" id="exampleInputName1" placeholder="Sub Title">
              </div>

              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="csractivity_img" required class="form-control" placeholder="Upload Image">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" required name="description" id="editor" rows="4"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Top Description</label>
                <textarea class="form-control" name="top_desc" required id="editor1" rows="4"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Bottom Description</label>
                <textarea class="form-control" name="bottom_desc" required id="editor2" rows="4"></textarea>
              </div>

              <div id="document-div">

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
  <!-- content-wrapper ends -->
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