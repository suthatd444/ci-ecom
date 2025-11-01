  <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <?php if ($this->session->flashdata('succ_msg')) { ?>
                        <div class="alert alert-success"> <?= $this->session->flashdata('succ_msg') ?> </div>
                    <?php }elseif($this->session->flashdata('error_msg')){ ?>
                              <div class="alert alert-danger"> <?= $this->session->flashdata('error_msg') ?> </div>
                    <?php } ?>
                  <h4 class="card-title">Locate Us Listing</h4>
                  <h4><a href="<?php echo base_url('add-locate-us');?>" class="btn btn-primary" style="margin-left: 89%;">Add Locate Us</a></h4>
                  <div class="table-responsive pt-3">
                    <table class="table" id="example">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php $i = 1; foreach ($locateuss as $key => $row) {
                          ?>
                        <tr>
                          <td><?= $i ?></td>
                          <td><div><?= $row['title'] ?></div></td>
                          <td>
                            <div>
                              <a href="<?= base_url('edit-locate-us?id=').$row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                              <a onclick="return confirm('Are you sure you want to delete?')" href="<?= base_url('delete-locate-us?id=').$row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                              </div>
                            </td>
                          <!-- <td></td> -->
                        </tr>
                        <?php  $i++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </div>


