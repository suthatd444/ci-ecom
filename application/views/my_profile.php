<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
             <?php if ($this->session->flashdata('succ_msg')) { ?>
                  <div class="alert alert-success"> <?= $this->session->flashdata('succ_msg') ?> </div>
              <?php }elseif($this->session->flashdata('error_msg')){ ?>
                        <div class="alert alert-danger"> <?= $this->session->flashdata('error_msg') ?> </div>
              <?php } ?>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Profile</h4>
                  
                  <form class="forms-sample" action="<?= base_url('edit-profile') ?>" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <div class="form-group">
                      <img src="<?= base_url('./uploads/').$user['image']?>">
                    </div>
                    <div class="form-group">
                      <label for="">Image</label>
                      <input type="file" class="form-control" value="<?= $user['image']?>" name="image" placeholder="Username">
                      <input type="hidden" value="<?= $user['image'] ?>" name="old_image">
                    </div>
                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" class="form-control" value="<?= $user['user_name']?>" name="user_name" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="">Email address</label>
                      <input type="email" class="form-control" disabled value="<?= $user['email']?>" name="email" placeholder="Email">
                    </div>
                    <button type="submit" value="add-blog" name="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Change Password</h4>
                  <form class="forms-sample" method="post" action="<?= base_url('change-password') ?>">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Old Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" required name="old_password" placeholder="Old Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">New Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" required name="new_password" placeholder="New Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Confirm Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" required name="confirm_password" placeholder="Confirm Password">
                      </div>
                    </div>
                   
                    <button type="submit" value="add-blog" name="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>