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
                  <h4 class="card-title">Inquiry Form Listing</h4>
                 <div class="table-responsive pt-3">
                    <table class="table table-dark" id="example">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Message</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php $i = 1; foreach ($inquiry_form_list as $key => $row) {
                          ?>
                        <tr>
                          <td><?= $i ?></td>
                          <td><?= $row['name'] ?></td>
                          <td><?= $row['email'] ?></td>
                          <td><?= $row['phone'] ?></td>
                          <td><?= $row['message'] ?></td>
                          
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


