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
  <!-- .................................... btn ,.................... -->


  <!-- .......................... photo ........................  -->
  <section id="" class="team-area leader-details-preview p-top p-bottom">

    <div class="container">

      <div class="row justify-content-center">
        <div class="col-12 col-lg-4 col-md-6 team_boxs">
          <div class="contentBox text-center">
            <img src="<?= base_url('./uploads/'); ?><?= $board['image']; ?>" alt="" class="img-fluid" style="width: 100%;">
          </div>
        </div>
        <div class="col-12 col-lg-8 col-md-6 team_boxs">
          <div class="contentBox text-center">
            <div class="box-tag p-3" style="text-align: left; position: relative; padding-left: 0px !important;">
              <?= $board['description']?>
            </div>
            <p class="pTag_box" style="text-align: left;"><?= $board['main_desc']; ?></p>
          </div>
        </div>

      </div>
    </div>

  </section>



  <!-- .......................... photo ........................  -->

  <!-- .......................... new ........................  -->

  <section class="sliderSection team-slider p-bottom">
    <div class="container">
      <h1 class="h1-title mb-sm-5 mb-4">Our Leadership – One Vision One Team</h1>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            
        <?php foreach ($all_board  as $key => $value) { 
        if($value['id']==$_GET['id']){ }else{?>
          <div class="swiper-slide">
               <a style="color:black;" href="<?= base_url('leader-details?id='); ?><?= $value['id']; ?>">
            <div class="">
              <img src="<?= base_url('./uploads/'); ?><?= $value['image']; ?>" alt="">
              <?= $value['description']?>
            </div>
            </a>
          </div>
         <?php }} ?>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>
  <!-- .......................... new ........................  -->
