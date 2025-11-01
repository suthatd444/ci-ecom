<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <?php if ($this->session->flashdata('succ_msg')) { ?>
              <div class="alert alert-success"> <?= $this->session->flashdata('succ_msg') ?> </div>
            <?php } elseif ($this->session->flashdata('error_msg')) { ?>
              <div class="alert alert-danger"> <?= $this->session->flashdata('error_msg') ?> </div>
            <?php } ?>
            <!-- <h4 class="card-title">Edit Home</h4> -->
            <form class="forms-sample" action="<?php echo base_url('backend/pages/add'); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleTextarea1">Template</label>
                <?php echo form_dropdown('types', $types, $selectedType, 'class="form-control" id="types" onchange="gotonex()"'); ?>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Content</label>
                <textarea class="form-control" required name="description" id="editor" rows="4"><?= empty($page['description']) ? "" : $page['description'] ?></textarea>
              </div>
              <?php if (!empty($page['image'])) { ?>

                <a target="_blank" href="<?= base_url('./uploads/') . $page['image'] ?>"><img src="<?= base_url('./uploads/') . $page['image'] ?>" style="width: 50px;height: 50px;"></a>
              <?php } ?>
              <div class="form-group">
                <label for="exampleTextarea1">other image</label>
                <input type="file" name="post_img" class="form-control" />
              </div>


              <div class="form-group">
                <label for="meta_title">Meta Title</label>
                <input class="form-control" required name="meta_title" id="meta_title" value="<?= empty($page['meta_title']) ? "" : $page['meta_title'] ?>" />
              </div>

              <div class="form-group">
                <label for="meta_keyword">Meta Keyword</label>
                <input class="form-control" required name="meta_keyword" id="meta_keyword" value="<?= empty($page['meta_keyword']) ? "" : $page['meta_keyword'] ?>" />
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Meta Description</label>
                <input class="form-control" required name="meta_description" id="meta_description" value="<?= empty($page['meta_description']) ? "" : $page['meta_description'] ?>" />
              </div>

              <button type="submit" value="add-home" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('home'); ?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
  <script>
    function gotonex() {
      window.location = window.location.href.split("custom-pages/")[0] + 'custom-pages/' + $("#types").val();
    }
  </script>