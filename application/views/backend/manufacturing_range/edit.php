
<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice{
    all:unset;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #e4e4e4 !important;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background: #e4e4e4 !important;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
            <h4 class="card-title">Edit Manufacturing Range</h4>
            <form class="forms-sample" action="<?php echo base_url('edit-manufacture-range?id=').$manufacturing_range['id']; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $manufacturing_range['id'] ?>">
              <div class="form-group">
                <label for="exampleInputName1">Select Product</label>
                <?php echo form_dropdown('product_id[]', empty($productselect) ? array() : $productselect, empty($productselected) ? NULL : $productselected, 'class="form-control js-example-basic-multiple" multiple="multiple"'); ?>
                <!-- <select name="product_id[]" multiple="multiple" class="form-control js-example-basic-multiple">
                  <?php 
                  // foreach ($product as $key => $value) {?>
                  <option <?php if($manufacturing_range['product_id']==$value['id']){ echo 'selected'; } ?> value="<?= $value['id']?>"><?= $value['title']?></option>
                <?php 
              // } 
              ?>
                </select> -->
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="text" class="form-control" required value="<?= $manufacturing_range['title'] ?>" name="title" id="exampleInputName1" placeholder="Title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Size/Range</label>
                <input type="text" class="form-control" required value="<?= $manufacturing_range['size_range'] ?>" name="size_range" id="exampleInputEmail3" placeholder="Size/Range">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Thickness</label>
                <input type="text" class="form-control" required value="<?= $manufacturing_range['thickness'] ?>" name="thickness" id="exampleInputEmail3" placeholder="Thickness">
              </div>
              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="manufacturing_range_img" class="form-control" placeholder="Upload Image">
                  <input type="hidden" name="image" value="<?= $manufacturing_range['image'] ?>"> 
                </div>
              </div>
              <div class="form-group">
                   <img src="<?= base_url('./uploads/').$manufacturing_range['image']?>" style="width: 10%;height: 10%;">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Specification</label>
                <textarea class="form-control" required name="specification" id="editor" rows="4"><?= $manufacturing_range['specification'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Grades</label>
                <textarea class="form-control" required name="grades" id="editor1" rows="4"><?= $manufacturing_range['grades'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Application</label>
                <textarea class="form-control" required name="application" id="editor2" rows="4"><?= $manufacturing_range['application'] ?></textarea>
              </div>
              <button type="submit" value="add-manufacture-range" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('manufacture-range');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>