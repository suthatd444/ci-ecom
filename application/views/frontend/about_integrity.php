<style>
    .about-integratity + .bw .img-fluid {
    display: none;
}
.bw {
    padding-top: 0;
}
</style>  
  <!-- .................................... nav ,.................... -->
  <div class="about-integratity">
  <section class="banner">
    <div class="container">
      <img src="<?= base_url('assets/frontend_assets/'); ?>img/banner_ab.png" class="img-fluid" alt="" data-aos="zoom-in-left" data-aos-duration="1000" />
    </div>
  </section>
  <nav aria-label="breadcrumb">
    <div id="nav" class="container">

      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">home</a></li>
        <li class="breadcrumb-item active" aria-current="page">about us</li>
        <li class="breadcrumb-item active" aria-current="page">
          value & integrity
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


  <!-- ................................. Our values .......................  -->

  <section class="instesticon_sec">
    <div class="container">

      <div class="row g-5">
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="quality_icon_box" style="border: none;align-items: center;
    display: flex;">
            <h2>Our <br>
              core values</h2>
          </div>
        </div>

        <?php foreach ($integrity as $key => $value) { ?>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="quality_icon_box">
              <div class="quality_icon_round">
                <img src="<?= base_url('./uploads/'); ?><?= $value['image']; ?>" class="img-fluid quality_icon" alt="icon">
                <!-- <div class="sudo"></div> -->
              </div>
              <?= $value['description']; ?>
            </div>
          </div>
        <?php } ?>


      </div>
    </div>
  </section>

  <!-- ................................. Our values End.......................  -->
  <section class="bw w-100">
    <img src="<?= base_url('assets/frontend_assets/'); ?>img/bw 2.png" class="bw_2 img-fluid" alt="bw">
  </section>
  </div>