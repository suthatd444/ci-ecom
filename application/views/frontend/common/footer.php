<?php
$id = array('id' => 1);
$headerfooter = $this->common->getSingleRows('headerfooter', $id);
$product = $this->common->getAllDataLimit('product', 8);
$social_links = $this->common->getAllData('social_links');

?>
<section class="bw w-100">
  <img src="<?= base_url('assets/frontend_assets/'); ?>img/bw 1.png" class="img-fluid" alt="bw">
</section>


<section class="contact_sec">
  <div class="container">
    <div class="row justify-content-between align-items-center gap-md-0 gap-sm-4 gap-3">
      <div class="col-md-8 col-12">
        <h2 class="contact_title text-md-start text-center">
          Let's get in touch &<br />
          discuss your needs.
        </h2>
      </div>
      <div class="col-md-4 col-12 text-md-end text-center">
        <a href="<?= base_url('locate-us') ?>" class="cont-btn">Contact us</a>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer_top d-flex flex-wrap justify-content-center column-gap-sm-5 row-gap-sm-3 column-gap-4 row-gap-2 align-items-center">
    <!--<a href="<//?= base_url('highlight-event') ?>" class="footer_link">Event</a>-->
    <!--<a href="<//?= base_url('highlight-blog') ?>" class="footer_link">Blog</a>-->
    <a href="<?= base_url('about-company-profile') ?>" class="footer_link">Company</a>
    <a href="<?= base_url('career') ?>" class="footer_link">Career</a>
    <a href="<?= base_url('locate-us') ?>" class="footer_link">Contact Us</a>
    <a href="<?= base_url('site-map') ?>" class="footer_link">Site Map</a>
    <a href="<?= base_url('disclaimer') ?>" class="footer_link">Disclaimer</a>
    <a href="<?= base_url('subsidiarie') ?>" class="footer_link">Subsidiaries</a>
    <!--<a href="<?= base_url('csr-activity') ?>" class="footer_link">CSR Activity</a>-->
    <!--<a href="<?= base_url('quality-assurance') ?>" class="footer_link">Quality Assurance</a>-->
    <!--<a href="<?= base_url('investor-relation') ?>" class="footer_link">Investor Relation</a>-->


    <!--<a href="<?= base_url('products') ?>" class="footer_link">Product</a>-->
    <!--<a href="<?= base_url('about-company-profile') ?>" class="footer_link">About Us</a>-->
  </div>
  <div class="footer_main">
    <div class="container">
      <div class="row gap-md-0 gap-sm-5 gap-3 justify-content-between">
        <div class="col-12 col-md-6  col-xxl-3 col-xl-3 text-center">
          <img src="<?= base_url('./uploads/'); ?><?= $headerfooter['header_img'] ?>" class="img-fluid footer_logo" alt="img2" />
          <img src="<?= base_url('./uploads/'); ?><?= $headerfooter['footer_img'] ?>" class="img-fluid footer_logo" alt="img2" />
        </div>
        <div class="col-12 col-md-6 ps-xl-0 ps-md-5  col-xl-3">
          <div class="f_comman_content pe-5">
            <h6 class="f_comman_title">PRODUCTS</h6>
            <?php foreach ($product as $key => $value) { ?>
              <a href="<?php echo base_url('product-detail?id=') ?><?= $value['id'] ?>" <?= $value['title'] ?> class="product_link"><?= $value['title'] ?></a>
            <?php } ?>

          </div>
        </div>
        <div class="col-12 col-md-6  col-xl-3">
          <div class="f_comman_content mb-4">
            <h6 class="f_comman_title">REGISTERED OFFICE</h6>
            <div class="f_det_cont align-items-start">
              <?= $headerfooter['register_office'] ?>
            </div>
          </div>
          <div class="f_comman_content">
            <h6 class="f_comman_title">CORPORATE OFFICE</h6>
            <div class="f_det_cont align-items-start">
              <?= $headerfooter['corporate_office'] ?>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 ps-xl-0 ps-md-5  col-xl-3">
          <div class="f_comman_content mb-4">
            <h6 class="f_comman_title">CONTACT</h6>
            <?= $headerfooter['contact'] ?>
          </div>
          <div class="f_comman_content">
            <h6 class="f_comman_title">RATNAMANI INC</h6>
            <?= $headerfooter['ratnamani_inc'] ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer_bottom">
    <div class="wrapper">
      <div class="row justify-content-center align-items-center gap-sm-0 gap-3">
        <div class="col-12 col-md-8 px-sm-3 px-0">
          <?= $headerfooter['copy_right'] ?>
        </div>
        <div class="col-12 col-md-4 px-sm-2 px-0">
          <div class="social_icons d-flex justify-content-sm-start justify-content-center align-items-center gap-3">
             <?php if (count($social_links) > 0) {
              foreach ($social_links as $link) {
                if (!empty($link['link'])) {
            ?>
                  <a href="<?= $link['link'] ?>">
                    <img src="<?= base_url('./uploads/'); ?><?= $link['image'] ?>" class="img-fluid social_icon" alt="icon" />
                  </a>
            <?php
                }
              }
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="<?= base_url('assets/frontend_assets/'); ?>js/main.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> -->

<!-- <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script> -->

<script>
  // Show the first tab and hide the rest
//   $('ul li:first-child .tabBtn').addClass('selected');
  $('.tabContentBox').hide();
  $('.tabContentBox:first').show();

  // Click function
  $('ul li .tabBtn').click(function() {

    $('ul li .tabBtn').removeClass('selected');
    $(this).addClass('selected');
    $('.tabContentBox').show();

    var activeTab = $(this).attr('href');
    $(activeTab).fadeIn();;

    return false;
  });
</script>

<script>
  AOS.init();
</script>
<script>

  $(document).ready(function(){
  $(".submenu").click(function(){
    $(".submenu ul").slideToggle();
  });
});
  </script>
</body>

</html>