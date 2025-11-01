
<div class="quality-assurange">
<section class="banner">
      <div class="container">
      <img src="<?= base_url('assets/frontend_assets/'); ?>img/image/quality-img1.jpg" class="img-fluid quality_img1" alt="img1">
      </div>
    </section>

    <div class="container">
          <nav aria-label="breadcrumb">

              <div id="nav" class="">

                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Quality Assurance</li>
                </ol>
              </div>

          </nav>
        </div>
<section class="qualityimg_sec">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <?= $quality_assurance['description'] ?>

        <img src="<?= base_url('./uploads/'); ?><?= $quality_assurance['image'] ?>" class="img-fluid quality_img2" alt="img2">

      </div>
    </div>
  </div>
</section>

<section class="instesticon_sec">
  <div class="container">
    <h2 class="pb-5 fw-light">Inspection & Testing Facilities at Ratnamani are as follows:</h2>
    <div class="row g-5">

      <?php foreach ($inspection_testing as $key => $value) { ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="quality_icon_box_1">
            <div class="quality_icon_round_1">
              <img src="<?= base_url('./uploads/'); ?><?= $value['image'] ?>" class="img-fluid quality_icon" alt="icon">
            </div>
            <p class="quality_icon_para"><?= $value['description'] ?></p>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>
</div>