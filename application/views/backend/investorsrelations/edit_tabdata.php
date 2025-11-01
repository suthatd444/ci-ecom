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
            <form class="forms-sample" action="<?php echo base_url('edit-investorsrelations-tabdata?id=') . $annualreports['id']; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $annualreports['id'] ?>">

              <div class="form-group">
                <label for="exampleTextarea1">Tab</label>
                <select class="form-control" name="investors_relations_tab_id">
                  <?php foreach ($tabs as $tab) {
                  ?>
                    <option value="<?= $tab['id'] ?>" <?php echo $annualreports['investors_relations_tab_id'] == $tab['id'] ? 'selected' : '' ?>><?= $tab['tab_name'] ?></option>

                  <?php    } ?>

                </select>

              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Title</label>
                <input type="text" required class="form-control" name="title" value="<?= $annualreports['title'] ?>">
              </div>

              <button type="submit" value="add-annual-reports" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('annual-reports'); ?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->