
   
<!-- partial -->
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
    
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <?php if ($this->session->flashdata('succ_msg')) { ?>
              <div class="alert alert-success"> <?= $this->session->flashdata('succ_msg') ?> </div>
          <?php }elseif($this->session->flashdata('error_msg')){ ?>
                    <div class="alert alert-danger"> <?= $this->session->flashdata('error_msg') ?> </div>
          <?php } ?>
            <h4 class="card-title">Add Post</h4>
            <form class="forms-sample" action="<?php echo base_url('add-post'); ?>" method="post" enctype="multipart/form-data">
             <div class="form-group">
                <label for="exampleInputName1">Title</label>
                 <textarea class="form-control" required name="title" id="editor1" rows="4"></textarea>
              
              </div>
             <!-- <div class="form-group">
                <label for="exampleInputEmail3">Sub Title</label>
                <input type="text" class="form-control" required name="sub_title" id="exampleInputEmail3" placeholder="Sub Title">
              </div> -->
              <div class="form-group">
                <label for="exampleInputEmail3">Post Type</label>
                <select name="post_type" class="form-control">
                  <option value="Event" >Event</option>
                  <option value="Blog" >Blog</option>
                </select>
              </div>
              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="post_img" required class="form-control" placeholder="Upload Image">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" required name="description" id="editor" rows="4"></textarea>
              </div>
              <button type="submit" value="add-post" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('post');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
