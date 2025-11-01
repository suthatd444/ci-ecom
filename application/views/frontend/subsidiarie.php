

<section class="banner">
      <div class="container">
        <img
          src="<?= base_url('assets/frontend_assets/');?>img/subsidiariesBanner.png"
          class="img-fluid"
          alt=""
          data-aos="zoom-in-left"
          data-aos-duration="1000"
        />
      </div>
</section>

<div class="container">
  <nav aria-label="breadcrumb">

      <div id="nav" class="">

        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Subsidiaries</li>
        </ol>
      </div>

  </nav>
</div>

<!--<ul class="nav nav-tabs" id="myTab" role="tablist">-->
<!--  <li class="nav-item" role="presentation">-->
<!--    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>-->
<!--  </li>-->
<!--  <li class="nav-item" role="presentation">-->
<!--    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>-->
<!--  </li>-->
<!--  <li class="nav-item" role="presentation">-->
<!--    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>-->
<!--  </li>-->
<!--  <li class="nav-item" role="presentation">-->
<!--    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>-->
<!--  </li>-->
<!--</ul>-->
<!--<div class="tab-content" id="myTabContent">-->
<!--  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>-->
<!--  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>-->
<!--  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>-->
<!--  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>-->
<!--</div>-->
    <section class="tabSection">
      <div class="container">
      <div id="nav" class="">
        <ul
          class="d-flex align-items-center gap-md-5 gap-sm-4 gap-3  justify-content-start list-unstyled overflow-x-scroll mb-md-5"
         id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="tabBtn active selected" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><?= $subsidiaries['tab_1'] ?></a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="tabBtn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><?= $subsidiaries['tab_2'] ?></a>
          </li>
          <li class="nav-item" role="presentation">
            <a  class="tabBtn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><?= $subsidiaries['tab_3'] ?></a>
          </li>
          <!-- <li class="nav-item">
            <a href="#tab4" class="tabBtn">Ravi&nbsp;Techno&nbsp;orge</a>
          </li> -->
        </ul>
</div>
</div>
    <div class="container">
    <div class="tabContentBox tab-content py-sm-5 py-4" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="row gap-xl-4 flex-xl-nowrap row-gap-4 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="scleImg"><img src="<?= base_url('./uploads/')?><?= $subsidiaries['tab_img_1'] ?>" class="img-fluid tbImg" alt=""></div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="d-flex align-items-center gap-md-4 gap-2 mb-xxl-5 mb-sm-4 mb-2">
                             <img src="<?= base_url('./uploads/')?><?= $subsidiaries['tab_1_logo'] ?>" class="img-fluid tblogo" alt="">
                            <h2 class="text-uppercase "><?= $subsidiaries['tab_title_1'] ?></h2>
                        </div>
                        <?= $subsidiaries['tab_desc_1'] ?>
                    </div>
                </div>
            </div>
            <div  class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="row gap-xl-4 flex-xl-nowrap row-gap-4 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="scleImg"><img src="<?= base_url('./uploads/')?><?= $subsidiaries['tab_img_2'] ?>" class="img-fluid tbImg" alt=""></div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="d-flex align-items-center gap-md-4 gap-2 mb-xxl-5 mb-sm-4 mb-2">
                              <img src="<?= base_url('./uploads/')?><?= $subsidiaries['tab_2_logo'] ?>" class="img-fluid tblogo" alt="">
                            <h2 class="text-uppercase "><?= $subsidiaries['tab_title_2'] ?></h2>
                        </div>
                        <?= $subsidiaries['tab_desc_2'] ?>
                    </div>
                </div>
            </div>
            <div  class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="row gap-xl-4 flex-xl-nowrap row-gap-4 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="scleImg"><img src="<?= base_url('./uploads/')?><?= $subsidiaries['tab_img_3'] ?>" class="img-fluid tbImg" alt=""></div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="d-flex align-items-center gap-md-4 gap-2 mb-xxl-5 mb-sm-4 mb-2">
                           <img src="<?= base_url('./uploads/')?><?= $subsidiaries['tab_3_logo'] ?>" class="img-fluid tblogo" alt="">
                            <h3 class="text-uppercase "><?= $subsidiaries['tab_title_3'] ?></h3>
                        </div>
                        <?= $subsidiaries['tab_desc_3'] ?>
                    </div>
                </div>
            </div>
            <!-- <div id="tab4" class="tabContent" data-aos="zoom-in-left"
            data-aos-duration="1000">
                <div class="row gap-xl-4 flex-xl-nowrap row-gap-4 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="scleImg"><img src="img/boxImg3.png" class="img-fluid tbImg" alt=""></div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="d-flex align-items-center gap-md-4 gap-2 mb-xxl-5 mb-sm-4 mb-2">
                            <img src="img/tblogo.svg" class="img-fluid tblogo" alt="">
                            <h1 class="text-uppercase tbTitle">Ashky</h1>
                        </div>
                        <p class="tbPara">Ravi Technoforge Private Limited (RTL) was established in 1990 by the Founder and Chairman Mr. Amrutlal Bharadia. RTL is IATF 16949:2016, ISO 14001:2015 & ISO 45001:2018 certified company having state of the art manufacturing facilities coupled with cutting edge</p>
                    </div>
                </div>
            </div> -->
    </div>
      </div>
      </div>


    </section>

    <script>// Show the first tab and hide the rest
      $('ul li:first-child .tabBtn').addClass('selected');
      $('.tabContent').hide();
      $('.tabContent:first').show();

      // Click function
      $('ul li .tabBtn').click(function(){

        $('ul li .tabBtn').removeClass('selected');
        $(this).addClass('selected');
        $('.tabContent').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).fadeIn();;

        return false;
      });</script>