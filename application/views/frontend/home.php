

<section class="banner">
  <div class="wrapper position-relative">
    <div class="image-wrapper">
    <img src="<?= base_url('./uploads/'); ?><?= $home['home_img'] ?> " class="img-fluid" alt="" data-aos="fade-up" data-aos-duration="1000">
    </div>

    <div class="titleBox position-absolute" data-aos="fade-up" data-aos-duration="1000">
      <?= $home['home_desc'] ?>
    </div>
  </div>
</section>

<section class="aboutUs">
  <div class="wrapper d-flex flex-column justify-content-center align-items-center">
    <h2 class="h2-title text-center mb-sm-4 mb-2">About Us</h2>
      <div class="w-75 text-center mb-3"><?= $home['about_us_title'] ?></div>
    <a href="<?= base_url('about-company-profile') ?>" class="linkBtn  d-inline-block text-center">Read More</a>
  </div>
</section>

<section class="sliderSection position-relative home-product-slider">
  <div class="wrapper position-relative">
    <h2 class="h2-title mb-1">Explore What Interests You The Most</h2>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <?php foreach ($product as $key => $value) { ?>
          <div class="swiper-slide mb-4">
            <a onclick = desplay_product('<?= base_url('./uploads/');?><?= $value['image']?>','<?= base_url('product-detail?id=').$value['id'] ?>');>
              <div class="exBox" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="400">
                <div class="mb-xxl-0 mb-2">
                  <h3 class=""><?= $value['title'] ?></h3>
                </div>
                <p><?= substr_replace($value['sub_title'], '', 150) ?></p>
              </div>
            </a>
          </div>
        <?php } ?>


      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
</section>

<section class="banner">
  <div class="wrapper position-relative">
    <div class="scleImg desplay_product "><img src="<?= base_url('assets/frontend_assets/'); ?>img/banner2.png" class="img-fluid" alt=""></div>
    <div class="display_url"> <a href="<?= base_url('products') ?>" class="linkBtn bnrBtn position-absolute">More Details</a></div>
  </div>
</section>

<section class="sliderSection2 industry-presense">
  <h2 class="h2-title mb-4 text-center">Industry presence</h2>
  <h6 class="text-center w-75 ms-auto mx-auto">Established nearly 4 decades ago ratnamani has now grown and prospered into
    one of the leading,
    most reliable metals and tubes manufacturing company in the world.</h6>
  <div class="swiper mySwiper2">
    <div class="swiper-wrapper">

      <?php foreach ($industry_presence as $key => $value) { ?>
        <div class="swiper-slide " data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="600">
          <div class="w-100 imgBox">
            <div class="scleImg mb-3">
              <img src="<?= base_url('./uploads/'); ?><?= $value['image'] ?>" class="img-fluid " alt="slideImg1">
            </div>
            <?= $value['description'] ?>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>

<section class="vision">
  <div class="container">
    <div class="row  justify-content-center ">
      <div class="col-lg-4 col-md-6 col-12">
        <div class="colBox card" data-aos="fade-up" data-aos-duration="1500">
          <div class="svgBox d-flex align-items-center justify-content-center mb-3"><img src="<?= base_url('assets/frontend_assets/'); ?>img/vision.svg" class="img-fluid" alt=""></div>
          <?= $home['vision_desc'] ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="colBox card" data-aos="fade-up" data-aos-duration="1500">
          <div class="svgBox d-flex align-items-center justify-content-center mb-3"><img src="<?= base_url('assets/frontend_assets/'); ?>img/mission.svg" class="img-fluid" alt=""></div>
          <?= $home['mission_desc'] ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="colBox card" data-aos="fade-up" data-aos-duration="1500">
          <div class="svgBox d-flex align-items-center justify-content-center mb-3"><img src="<?= base_url('assets/frontend_assets/'); ?>img/Union.svg" class="img-fluid" alt=""></div>
          <?= $home['philosophy_desc'] ?>
        </div>
      </div>


    </div>
</section>

<section class="affrimSection">
  <div class="container">
    <h2 class="h2-title text-center text-capitalize mb-sm-5 mb-2">we proudly affirm</h2>
    <div class="row g-sm-5">

      <?php foreach ($proudly_affirm as $key => $value) { ?>
        <div class="col-md-6 col-12">
          <div class="scleImg mb-3"><img src="<?= base_url('./uploads/'); ?><?= $value['image'] ?>" class="img-fluid " alt=""></div>
          <div class="ps-3 pe-3">
            <?= $value['description'] ?>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>

<section class="performance">
  <div class="wrapper text-center">
    <img src="<?= base_url('assets/frontend_assets/'); ?>img/title.png" class="img-fluid" alt="title">
  </div>
</section>

<section class="highlight">
  <div class="container">
    <div class="highlight-content">
      <h3 class="h2-title text-center mb-sm-5 mb-3">Ratnamani Highlights</h3>
      <div class="row align-items-center mt-2 gap-lg-0 gap-3">
        <div class="col-lg-6 col-12 text-center">

            <a href="<?= base_url('highlight-details?id='); ?><?= $recent_post[0]['id'] ?>">
              <div class="scleImg">
                <img src="<?= base_url('./uploads/'); ?><?= $recent_post[0]['image'] ?>" class="img-fluid" alt="">
              </div>
            </a>

        </div>
        <div class="col-lg-6 col-12">
          <div class="imgContent d-flex flex-column align-items-start">
            <?= $recent_post[0]['description'] ?>
            <a href="<?= base_url('locate-us')?>" class="linkBtn">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="investor">
  <div class="container">
    <div class="investorTitle d-flex justify-content-between mb-3">
      <h2 class="h2-title ">Our Intellegent Investors Growing With Ratnamani</h2>
      <div class="buttons d-flex gx-md-5 gap-sm-3 gap-1 align-items-center">
        <a href="https://www.bseindia.com/stock-share-price/ratnamani-metals--tubes-ltd/ratnamani-metal/520111/" class="linkBtn smallBtn">BSE</a>
        <a href="https://www1.nseindia.com/live_market/dynaContent/live_watch/get_quote/GetQuote.jsp?symbol=RATNAMANI" class=" linkBtn smallBtn">NSE</a>
      </div>
    </div>
    <?= $home['intellegent_investors_desc'] ?>
    <div class="presence-count">
      <div class="row g-4 mt-md-5 mb-md-5">
        <div class="col-lg-4 col-md-6 col-12">
          <div class=" card" data-aos="zoom-in" data-aos-duration="1500">
            <?= $home['our_product_desc'] ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class=" card" data-aos="zoom-in" data-aos-duration="1500">
            <?= $home['our_presence_desc'] ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class=" card" data-aos="zoom-in" data-aos-duration="1500">
            <?= $home['customer_base_desc'] ?>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>

<section class="home-csr csr mt-sm-5 mt-2 p-bottom">
  <div class="wrapper mb-sm-5 mb-2">
    <div class="investorTitle d-flex justify-content-between align-items-cente
      <h2 class="h2-title ">Our Contribution Towards Society's Welfare</h2>
      <a href="<?= base_url('csr-activity') ?>" class="linkBtn">View&nbsp;CSR&nbsp;Activity</a>
    </div>
  </div>
  <div class="swiper mySwiper3">
    <div class="swiper-wrapper">
      <?php foreach ($csractivity as $key => $value) { ?>

        <div class="swiper-slide">
            <a href="<?= base_url('csr-details?id=')?><?= $value['id'] ?>&type=<?= $value['type'] ?>" >
          <div class="slideImg position-relative">
            <!-- <div class=" beforeImg beforeImg2">  -->
            <div class=" beforeImg beforeImg2">
              <img src="<?= base_url('./uploads/'); ?><?= $value['image'] ?>" class="img-fluid" alt="">
            </div>
            <div class="imgText position-absolute">
              <h3><?= $value['title'] ?></h3>
              <p><?= $value['description'] ?></p>
            </div>
          </div>
          </a>
        </div>

      <?php } ?>

    </div>
  </div>
</section>

<script>
    function desplay_product(img,id){
        $('.desplay_product').html('<img src="'+img+'" class="img-fluid" alt="">');
        $('.display_url').html('<a href="'+id+'" class="linkBtn bnrBtn position-absolute" ">More Details</a>');
    }
</script>