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
                  <h4 class="card-title">Tab</h4>
                  <h4><a href="<?php echo base_url('add-investorsrelations-tabdoc');?>" class="btn btn-primary" style="margin-left: 85%;">Add Document</a></h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark" id="example">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>title</th>
                          <th>subtitle</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php $i = 1; foreach ($tabs as $key => $row) {
                          if(!empty($row['docs'])){
                          ?>
                        <tr>
                          <td><?= $i ?></td>
                          <td><?= $row['title'] ?></td>
                          <td><?= $row['subtitle'] ?></td>
                          <td>
                              <a href="<?= base_url('edit-investorsrelations-tabdoc?id=').$row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                              <a onclick="return confirm('Are you sure you want to delete?')" href="<?= base_url('delete-investorsrelations-tabdoc?id=').$row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                          </td>
                        </tr>
                        <?php  $i++; }} ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </div>


