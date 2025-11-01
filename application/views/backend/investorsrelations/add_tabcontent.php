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
            <h4 class="card-title">Add Tab Content</h4>
            <form class="forms-sample" action="<?php echo base_url('add-investorsrelations-tabcontent'); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="exampleTextarea1">Under Title</label>
                <select class="form-control" name="investors_relations_tabdata_id">
                  <?php foreach ($tabs as $tab) {
                  ?>
                    <option value="<?= $tab['id'] ?>"><?= $tab['title'] ?></option>

                  <?php    } ?>

                </select>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">title</label>
                <input type="text" required class="form-control" name="title">
              </div>
              <div id="document-div">
                <div class="card card-body">

                  <div class="form-group">
                    <label for="exampleTextarea1">subtitle</label>
                    <input type="text" required class="form-control" name="subtitle[]">
                  </div>
                </div>
              </div>
              <br />
              <button type="button" class="btn btn-secondary pull-right" onclick="addRow()">Add More Rows</button>
              <br />
              <br /> <br />
              <button type="submit" value="add-investorsrelations-tabcontent" name="submit" class="btn btn-primary me-2">Submit</button>
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
      $(`#document-div`).append(`<br/><div class="card card-body">
                <div class="row">
                <div class="col-md-10">
                <div class="form-group">
                  <label for="exampleTextarea1">subtitle</label>
                  <input type="text" required class="form-control" name="subtitle[]">
                </div>
                </div>
                <div class="col-md-2"> <button type="button" class="btn btn-danger" onclick=$(this).parent().parent().parent().remove()>x</button></div>
                </div>
                
                </div>`);

      // console.log(newhtml);
    }
  </script>