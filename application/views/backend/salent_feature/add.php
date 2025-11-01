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
            <h4 class="card-title">Add Salient Feature</h4>
            <form class="forms-sample" action="<?php echo base_url('add-salient-feature'); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleTextarea1">Manufacturing Range</label>
                <select name="manu_rang_id[]"  class="form-control js-example-basic-multiple" multiple="multiple" >
                  <?php foreach ($manufacturing_ranges as $key => $value) {?>
                  <option value="<?= $value['id']?>"><?= $value['title']?></option>
                <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" required name="description" id="editor" rows="4"></textarea>
              </div>
              <button type="submit" value="add-salient-feature" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('salient-feature');?>" class="btn btn-light">Cancel</a>
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