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
                  <h4 class="card-title">CSR Step</h4>
                  <h4><a href="<?php echo base_url('add-csrstep');?>" class="btn btn-primary" style="margin-left: 85%;">Add CSR Step</a></h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark" id="example">
                      <thead>
                        <tr>
                          <th> Id </th>
                          <th>Tad</th>
                          <th> Description </th>
                          <th> Image </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php $i = 1; foreach ($csr_step as $key => $row) {
                          ?>
                        <tr>
                          <td><?= $i ?></td>
                          <td><?= $row['tab'] ?></td>
                          <td><?= substr_replace($row['description'],'',50) ?></td>
                          <td><img src="<?= base_url('./uploads/').$row['image'] ?>" style="width: 50px;height: 50px;" ></td>
                          <td>
                              <a href="<?= base_url('edit-csrstep?id=').$row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                              <a onclick="return confirm('Are you sure you want to delete?')" href="<?= base_url('delete-csrstep?id=').$row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                          </td>
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


