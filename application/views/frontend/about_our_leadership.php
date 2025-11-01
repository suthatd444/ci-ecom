   
<!-- .................................... nav ,.................... -->
  <section class="banner">
    <div class="container">
      <img src="<?= base_url('assets/frontend_assets/'); ?>img/banner3_on.png" class="img-fluid" alt="" data-aos="zoom-in-left" data-aos-duration="1000" />
    </div>
  </section>
  <nav aria-label="breadcrumb">
    <div id="nav" class="wrapper">

      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">home</a></li>
        <li class="breadcrumb-item active" aria-current="page">about us</li>
        <li class="breadcrumb-item active" aria-current="page">
          on the board
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
  <!-- ............................ banner End .....................  -->


  <!-- .......................... photo ........................  -->
  <section id="team" class="team-area">

    <div class="container">

      <div class="row justify-content-center">
        <div class="col-12 col-lg-4 col-md-6 team_boxs">
          <div class="contentBox text-center">
            <img src="<?= base_url('./uploads/').$aboutourleadership['image'];?>" alt="" class="img-fluid" style="width: 100%;">
          </div>
        </div>
        <div class="col-12 col-lg-8 col-md-6 team_boxs">
          <div class="contentBox text-center">
            <div class=" p-3" style="text-align: left; position: relative; padding-left: 0px !important;">
              <?= $aboutourleadership['description']?>
            </div>
           
          </div>
        </div>

      </div>
    </div>

  </section>



  <!-- .......................... photo ........................  -->

  <!-- .......................... new ........................  -->

  <section class="sliderSection">
    <div class="container">
      <h1 class="h1-title mb-sm-5 mb-4">Our Leadership – One Vision One Team</h1>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <?php foreach ($ourleadership as $key => $value) {?>
          <div class="swiper-slide">
            <div class="">
              <img src="<?= base_url('./uploads/').$value['image'];?>" alt="">
              <div class="mb-xxl-0 mb-4">
                <?= $value['description']?>
              </div>
              
            </div>
          </div>
        <?php }?>
       

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>
  <!-- .......................... new ........................  -->
