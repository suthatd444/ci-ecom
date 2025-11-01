   
  <!-- .................................... nav ,.................... -->
  <section class="banner">
    <div class="container">
      <img src="<?= base_url('assets/frontend_assets/'); ?>img/abou-banner.png" class="img-fluid" alt="" data-aos="zoom-in-left" data-aos-duration="1000" />
    </div>
  </section>
  <nav aria-label="breadcrumb">
    <div id="nav" class="container">

      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">home</a></li>
        <li class="breadcrumb-item active" aria-current="page">about us</li>
        <li class="breadcrumb-item active" aria-current="page">
          company profile
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



  <section class="aboutUs-hero">
    <div class="container">
      <?= $company_profile['title'] ?>
    </div>
  </section>

  <!-- ................................ highlight .................................  -->
  <section class="about-company-description">
    <div class="container">
      <div class="row align-items-center mt-2">
        <div class="col-lg-6 col-12">
          <img src="<?= base_url('./uploads/'); ?><?= $company_profile['image'] ?>" class="img-fluid" alt="" />
        </div>
        <div class="col-lg-6 col-12">
          <div class="imgContent d-flex flex-column align-items-start">
            <?= $company_profile['description'] ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ............................... highlight End...........................  -->

  <!-- ..................................... Mission ................................  -->
  <section class="vision p-top p-bottom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card">
            <div class="svgBox d-flex align-items-center justify-content-center mb-3">
              <img src="<?= base_url('assets/frontend_assets/'); ?>img/vision.svg" class="img-fluid" alt="" />
            </div>
            <?= $company_profile['vision'] ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card">
            <div class="align-items-center d-flex justify-content-center mb-3 missi svgBox">
              <img src="<?= base_url('assets/frontend_assets/'); ?>img/mission.svg" class="img-fluid" alt="" />
            </div>
            <?= $company_profile['mission'] ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card">
            <div class="svgBox d-flex align-items-center justify-content-center mb-3">
              <img src="<?= base_url('assets/frontend_assets/'); ?>img/Union.svg" class="img-fluid" alt="" />
            </div>
            <?= $company_profile['philosophy'] ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ..................................... Mission End................................  -->
  <!-- ..................... Prosperity .............................  -->
  <section class="performance">
    <div class="container text-center">
      <img src="<?= base_url('assets/frontend_assets/'); ?>img/title.png" class="img-fluid" alt="title" />
    </div>
  </section>
  <!-- ..................... Prosperity End.............................  -->

  <!-- ..................... investor .............................  -->

  <section class="company-profile-legacy">
    <div class="container">
      <div class=" d-flex justify-content-between mb-3 ">
        <h1 class="h1-title">Gist Of Our Legacy</h1>
      </div>
      <?= $company_profile['legacy'] ?>
    </div>
  </section>
  <!-- ..................... investor End.............................  -->