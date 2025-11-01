 


<!-- .................................... nav ,.................... -->
 <div class="about-milestone">
<section class="banner">
  <div class="container">
    <img src="<?= base_url('assets/frontend_assets/'); ?>img/banner4_ab.png" class="img-fluid" alt="" data-aos="zoom-in-left" data-aos-duration="1000" />
  </div>
</section>
<nav aria-label="breadcrumb">
  <div id="nav" class="container">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">home</a></li>
      <li class="breadcrumb-item active" aria-current="page">about us</li>
      <li class="breadcrumb-item active" aria-current="page">
        milestones
      </li>
    </ol>
  </div>
</nav>

<!-- .................................... nav ,.................... -->

<!-- .................................... btn ,.................... -->
<section class="tabSection">
  <div id="nav" class="container">
   <ul class="d-flex align-items-center gap-md-5 gap-sm-4 gap-3 justify-content-start list-unstyled overflow-x-scroll">
        <li class="nav-item">
          <a href="<?= base_url(); ?>about-company-profile" class="tabBtn <?php echo $this->uri->segment(1)=='about-company-profile'?'selected':'' ?>" aria-current="page">COMPANY&nbsp;PROFILE</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url(); ?>about-milestones" class="tabBtn <?php echo $this->uri->segment(1)=='about-milestones'?'selected':'' ?>">MILESTONES</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url(); ?>about-integrity" class="tabBtn <?php echo $this->uri->segment(1)=='about-integrity'?'selected':'' ?>">VALUES&nbsp;&&nbsp;INTEGRITY</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url(); ?>about-board" class="tabBtn <?php echo $this->uri->segment(1)=='about-board'?'selected':'' ?>">ON&nbsp;THE&nbsp;BOARD</a>
        </li>
      </ul>

  </div>



</section>
<!-- .................................... btn ,.................... -->



<!-- .......................................... sld ..................................... -->
<section class="sliderSection about-milestone-slider">
  <div class="container">
    <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden">
      <div class="swiper-wrapper" id="swiper-wrapper-45a81fbe22f10ec06" aria-live="polite">

        <?php foreach ($milestones as $key => $value) { ?>
          <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 8" style="width: 300px; margin-right: 00px;">
            <div class="">
              <div class="cardBox">
                  <span><?= $value['year']; ?></span>
                <div class="face face1">
                  <div class="content">
                    <img src="<?= base_url('./uploads/'); ?><?= $value['image']; ?>">

                  </div>
                </div>
                <div class="face face2">
                  <div class="content">
                    <?= $value['description']; ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>


      </div>
      <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-45a81fbe22f10ec06" aria-disabled="false"></div>
      <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-45a81fbe22f10ec06" aria-disabled="true"></div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
  </div>
</section>
</div>
<!-- .......................................... sld ..................................... -->