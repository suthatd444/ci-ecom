 
  <!-- .................................... nav ,.................... -->
  <section class="banner">
    <div class="container">
      <img src="<?= base_url('assets/frontend_assets/'); ?>img/banner3_on.png" class="img-fluid" alt="" data-aos="zoom-in-left" data-aos-duration="1000" />
    </div>
  </section>
  <nav aria-label="breadcrumb">
    <div id="nav" class="container">

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


  <!-- ............................ banner2 Start .....................  -->
 <?php
      if (count($is_primay_board) > 0) {
      ?>
  <section class="banner2 p-bottom">
    <div class="container position-relative wrapper-img" style="border-radius: 50px;width: 96vw;">
        
      <div class="image-blurred-edge d-flex align-items-center justify-content-end">
     
        <img src="<?= base_url('./uploads/'); ?><?= $is_primay_board[0]['image']; ?>" class="img-fluid" alt="" data-aos="zoom-in-left" data-aos-duration="1000">

      </div>
     
       <div class="titleBox position-absolute" style="color: #fff;">
         <?= $is_primay_board[0]['description']; ?>
      </div> 
    </div>
  </section>
   <?php
      }?>
  <!-- ............................ banner2 End .....................  -->


  <!-- ............................ team Start .....................  -->
  <section id="team" class="team-area">

    <div class="container">

      <div class="row justify-content-center">

        <?php foreach ($board as $key => $value) { ?>

          <div class="col-12 col-lg-4 col-md-6 team_boxs">
            <a style="color:black;" href="<?= base_url('leader-details?id='); ?><?= $value['id']; ?>">
              <div class="contentBox text-center">
                <img src="<?= base_url('./uploads/'); ?><?= $value['image']; ?>" alt="" class="img-fluid">
                <div class="box-tag p-3">
                  <?= $value['description']; ?>
                </div>
              </div>
            </a>
          </div>

        <?php } ?>

      </div>
    </div>

  </section>
  <!-- ............................ team End .....................  -->