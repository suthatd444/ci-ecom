
   
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
            <h4 class="card-title">Edit Product</h4>
            <form class="forms-sample" action="<?php echo base_url('edit-product?id=').$product['id']; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $product['id'] ?>">
              <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="text" class="form-control" value="<?= $product['title'] ?>" required name="title" id="exampleInputName1" placeholder="Title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Sub Title</label>
                <input type="text" class="form-control" value="<?= $product['sub_title'] ?>" required name="sub_title" id="exampleInputEmail3" placeholder="Sub Title">
              </div>

              <div class="form-group">
                <label>Product Banner</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="product_banner" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="product_banner_image" value="<?= $product['product_banner'] ?>"> 
                </div>
              </div>
              <div class="form-group">
                   <img src="<?= base_url('./uploads/').$product['product_banner']?>" style="width: 10%;height: 10%;">
              </div>


              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="product_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $product['image'] ?>"> 
                </div>
              </div>
              <div class="form-group">
                   <img src="<?= base_url('./uploads/').$product['image']?>" style="width: 10%;height: 10%;">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" name="description" required id="editor" rows="4"><?= $product['description'] ?></textarea>
              </div>
              <button type="submit" value="add-product" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('product');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
