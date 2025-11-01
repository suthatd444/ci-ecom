

<!-------------------- section2 start ---------------->

<section class="section2-highlight">
  <div class="container">
    <div class="highlight-section1">
      <div class="row">
        <div class="col-12">
          <div class="highlight-img">
            <img src="<?= base_url('assets/frontend_assets/'); ?>img/highlights-page-main-img-1.png" alt="">

          </div>

        </div>

      </div>

    </div>



  </div>

</section>

<!-------------------- section2 end ---------------->



<!-------------------- section3 start ---------------->
<div class="container">
    <nav aria-label="breadcrumb">
      <div id="nav" class="">

        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">home</a></li>
          <li class="breadcrumb-item active" aria-current="page">highlights</li>
          </li>
        </ol>
      </div>
    </nav>
  </div>


    <!-- Nav pills -->
    <div class="container pt-4 pb-5">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="pill" href="#event">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="pill" href="#blog">BLOG</a>
        </li>

      </ul>
    </div>

    <!-- Tab panes -->
    <div class="container">
    <div class="tab-content">

      <div id="event" class=" tab-pane active"><br>
        <section class="section3">


          <div class="product-event  highlight-event">
            <div class="row">

              <?php foreach ($event as $key => $value) { ?>
              <a href="<?= base_url('highlight-details?id='); ?><?= $value['id'] ?>">
                <div class="col-lg-6 col-md-6">
                  <div class="product-event1">
                    <div class="product-img-1">
                      <img src="<?= base_url('./uploads/'); ?><?= $value['image'] ?>" alt="">
                    </div>
                    <div class="product-info-1">
                        <?= $value['title'] ?>
                      <?= $value['description'] ?>

                    </div>
                  </div>
                </div>
                </a>
              <?php } ?>

            </div>

          </div>

        </section>


      </div>


      <div id="blog" class="tab-pane fade"><br>
        <section class="section3">


          <div class="product-event highlight-event">
            <div class="row">

              <?php foreach ($blog as $key => $value) { ?>
              <a href="<?= base_url('highlight-details?id='); ?><?= $value['id'] ?>">
                <div class="col-lg-6 col-md-6">
                  <div class="product-event1">
                    <div class="product-img-1">
                      <img src="<?= base_url('./uploads/'); ?><?= $value['image'] ?>" alt="">
                    </div>
                    <div class="product-info-1">
                          <?= $value['title'] ?>
                      <?= $value['description'] ?>

                    </div>
                  </div>
                </div>
                </a>
              <?php } ?>

            </div>

          </div>

        </section>

      </div>

    </div>
  </div>




</div>
</div>
</div>


<!-------------------- section3 end ---------------->