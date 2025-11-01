
   
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
            <h4 class="card-title">Edit Investors Relations</h4>
            <form class="forms-sample" action="<?php echo base_url('investorsrelations'); ?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="exampleTextarea1">Tab 1 Title</label>
                <input type="text" name="tab_1" required class="form-control" value="<?= $investorsrelations['tab_1'] ?>">
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Tab 2 Title</label>
                <input type="text" name="tab_2" required class="form-control" value="<?= $investorsrelations['tab_2'] ?>">
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Tab 3 Title</label>
                <input type="text" name="tab_3" required class="form-control" value="<?= $investorsrelations['tab_3'] ?>">
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Tab 4 Title</label>
                <input type="text" name="tab_4" required class="form-control" value="<?= $investorsrelations['tab_4'] ?>">
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Tab 1 Description</label>
                <textarea class="form-control" required name="tab_desc_1" id="editor5" rows="4"><?= $investorsrelations['tab_desc_1'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Tab 2 Description</label>
                <textarea class="form-control" required name="tab_desc_2" id="editor6" rows="4"><?= $investorsrelations['tab_desc_2'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Tab 3 Description</label>
                <textarea class="form-control" required name="tab_desc_3" id="editor7" rows="4"><?= $investorsrelations['tab_desc_3'] ?></textarea>
              </div>

              <!-- <div class="form-group">-->
              <!--  <label for="exampleTextarea1">Quarterly Results</label>-->
              <!--  <textarea class="form-control" required name="quarterly_results" id="editor8" rows="4"><?= $investorsrelations['quarterly_results'] ?></textarea>-->
              <!--</div>-->

              <!-- <div class="form-group">-->
              <!--  <label for="exampleTextarea1">Subsidiaries Financial</label>-->
              <!--  <textarea class="form-control" required name="subsidiaries_financial" id="editor9" rows="4"><?= $investorsrelations['subsidiaries_financial'] ?></textarea>-->
              <!--</div>-->

              <!-- <div class="form-group">-->
              <!--  <label for="exampleTextarea1">Investor Presentation</label>-->
              <!--  <textarea class="form-control" required name="investor_presentation" id="editor10" rows="4"><?= $investorsrelations['investor_presentation'] ?></textarea>-->
              <!--</div>-->

              <!-- <div class="form-group">-->
              <!--  <label for="exampleTextarea1">Conference Calls Transcripts</label>-->
              <!--  <textarea class="form-control" required name="conference_calls_transcripts" id="editor11" rows="4"><?= $investorsrelations['conference_calls_transcripts'] ?></textarea>-->
              <!--</div>-->

              <!-- <div class="form-group">-->
              <!--  <label for="exampleTextarea1">Conference Calls Recordings</label>-->
              <!--  <textarea class="form-control" required name="conference_calls_recordings" id="editor12" rows="4"><?= $investorsrelations['conference_calls_recordings'] ?></textarea>-->
              <!--</div>-->



              <button type="submit" value="add-investorsrelations" name="submit" class="btn btn-primary me-2">Submit</button>
              <a href="<?= base_url('investorsrelations');?>" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
