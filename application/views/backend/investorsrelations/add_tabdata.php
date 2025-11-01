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
            <form class="forms-sample" action="<?php echo base_url('add-investorsrelations-tabdata'); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="exampleTextarea1">Tab</label>
                <select class="form-control" name="investors_relations_tab_id">
                  <?php foreach ($tabs as $tab) {
                  ?>
                    <option value="<?= $tab['id'] ?>"><?= $tab['tab_name'] ?></option>

                  <?php    } ?>

                </select>

              </div>
              <div class="form-group">
                <label for="exampleTextarea1">title</label>
                <input type="text" required class="form-control" name="title">
              </div>
              <button type="submit" value="add-investorsrelations-tabdata" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('annual-reports'); ?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->