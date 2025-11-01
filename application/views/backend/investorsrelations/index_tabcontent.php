  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <?php if ($this->session->flashdata('succ_msg')) { ?>
                <div class="alert alert-success"> <?= $this->session->flashdata('succ_msg') ?> </div>
              <?php } elseif ($this->session->flashdata('error_msg')) { ?>
                <div class="alert alert-danger"> <?= $this->session->flashdata('error_msg') ?> </div>
              <?php } ?>
              <h4 class="card-title">Tab content</h4>
              <h4><a href="<?php echo base_url('add-investorsrelations-tabcontent'); ?>" class="btn btn-primary" style="margin-left: 85%;">add Tab content</a></h4>
              <div class="table-responsive pt-3">
                <table class="table table-dark" id="example">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>title</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $i = 1;
                   
                      $tabcontents = $this->common->investors_relations_tabcontent_admin_list();
                      if (count($tabcontents) > 0) {
                        foreach ($tabcontents as $key => $row) {
                    ?>
                          <tr>
                            <td><?= $i ?></td>
                            <td><?= $row['title'] ?></td>
                            <td>
                              <a href="<?= base_url('edit-investorsrelations-tabcontent?id=') . $row['id'] ?>&title=<?= $row['title'] ?>" class="btn btn-primary btn-sm">Edit</a>
                              <a onclick="return confirm('Are you sure you want to delete?')" href="<?= base_url('delete-investorsrelations-tabcontent?id=') . $row['id'] ?>&title=<?= $row['title'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                          </tr>
                    <?php $i++;
                        }
                      }
                     ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>