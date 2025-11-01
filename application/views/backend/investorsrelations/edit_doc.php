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
            <h4 class="card-title">Add title</h4>
            <form class="forms-sample" action="<?php echo base_url('edit-investorsrelations-tabdoc?id=') . $annualreports['id']; ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="exampleTextarea1">Tab</label>
                <select class="form-control" name="investors_relations_tabcontent_id">
                  <?php foreach ($tabs as $tab) {
                  ?>
                    <option value="<?= $tab['id'] ?>" <?= $annualreports['id'] == $tab['id'] ? 'selected' : '' ?>><?= $tab['title'] ?>/<?= $tab['subtitle'] ?></option>

                  <?php  } ?>

                </select>

              </div>
              <div id="document-div">
                <?php if (!empty($annualreports['docs'])) {
                  foreach (explode(",", $annualreports['docs']) as $row) {
                ?>
                    <div class="card card-body">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleTextarea1">Document name</label> <a target="_blank" href="<?= base_url('./uploads/') . $row ?>"><i class="mdi mdi-file-pdf menu-icon"></i></a>
                            <input type="text" readonly value="<?= $row ?>" class="form-control" name="document_name[]">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleTextarea1">Document</label>
                            <input type="file" accept=".pdf" class="form-control" name="document[]">
                          </div>
                        </div>
                        <div class="col-md-2"> <button class="btn btn-danger" onclick="ajax_delete_doc(`<?= $annualreports['id'] ?>`,`<?= $row ?>`,$(this))">x</button></div>
                      </div>
                    </div>
                    <br />
                <?php
                  }
                }
                ?>
              </div>



              <button type="button" class="btn btn-secondary pull-right" onclick="addRow()">Add More Rows</button>
              <br />
              <br /> <br />

              <button type="submit" value="add-investorsrelations-tabdata" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('annual-reports'); ?>" class="btn btn-light">Cancel</a>
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
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleTextarea1">Document name</label>
                        <input type="text" placeholder="filename.pdf" required class="form-control" name="document_name[]">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleTextarea1">Document</label>
                        <input type="file" accept=".pdf" required class="form-control" name="document[]">
                      </div>

                    </div>
                    <div class="col-md-2"> <button class="btn btn-danger" onclick=$(this).parent().parent().parent().remove()>x</button></div>
                  </div>
                 
                </div>
               `);

      // console.log(newhtml);
    }

    function ajax_delete_doc(id,filename, divel) {
      if (window.confirm('are you sure ?')) {
        $.get(`delete-document?id=${id}&filename=${filename}`, function(data, status) {
          alert('deleted');
          divel.parent().parent().parent().remove();
        });

      }
    }
  </script>