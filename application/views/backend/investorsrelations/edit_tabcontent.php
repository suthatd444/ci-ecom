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
            <h4 class="card-title">Edit Tab</h4>
            <form class="forms-sample" action="<?php echo base_url('edit-investorsrelations-tabcontent?id=') . $annualreports['id']; ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="exampleTextarea1">Under Title</label>
                <select class="form-control" name="investors_relations_tabdata_id">
                  <?php foreach ($tabs as $tab) {
                  ?>
                    <option value="<?= $tab['id'] ?>" <?= $annualreports['investors_relations_tabdata_id'] == $tab['id'] ? 'selected' : '' ?>><?= $tab['title'] ?></option>
                  <?php    } ?>

                </select>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">title</label>
                <input type="text" value="<?= $_GET['title'] ?>" class="form-control" name="title">
              </div>

              <div id="document-div">
                <?php foreach ($alldata as $row) {
                ?>
                  <input type="hidden" value="<?= $row['id'] ?>" class="form-control" name="id[]">
                  <div class="card card-body">
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label for="exampleTextarea1">subtitle</label>
                          <input type="text" value="<?= $row['subtitle'] ?>" class="form-control" name="subtitle[]">
                        </div>
                      </div>
                      <div class="col-md-2"><button type="button" class="btn btn-danger" onclick="ajax_delete_content(`<?= $row['id'] ?>`,$(this))">x</button></div>
                    </div>
                  </div>
              <br />
            <?php
                }
            ?>
          </div>
          <br />
          <button type="button" class="btn btn-secondary pull-right" onclick="addRow()">Add More Rows</button>
          <br />
          <br /> <br />
          <button type="submit" value="add-annual-reports" name="submit" class="btn btn-primary me-2">Submit</button>
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

  function ajax_delete_content(id, divel) {
    if (window.confirm('are you sure ! relative document will be also delete ?')) {
      $.get(`delete-content?id=${id}`, function(data, status) {
        alert('deleted');
        divel.parent().parent().parent().remove();
      });

    }
  }
</script>