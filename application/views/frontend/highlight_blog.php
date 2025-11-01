
  <!-------------------- section2 start ---------------->

  <section class="section2-highlight">
    <div class="container">
      <div class="highlight-section1">
        <div class="row">
          <div class="col-12">
            <div class="highlight-img">
              <img src="<?= base_url('assets/frontend_assets/');?>img/highlights-page-main-img-1.png" alt="">

            </div>

          </div>

        </div>

      </div>



    </div>

  </section>

  <!-------------------- section2 end ---------------->



  <!-------------------- section3 start ---------------->
  <div class="section-3-advertise">
    <div class="container">
      <div class="s3-heading">
        <h2><a href="<?= base_url();?>"> home</a><span><a href="<?= base_url('highlight');?>"> / highlights</a></span></h2>
      </div>


      <!-- Nav pills -->
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="pill" href="#event">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="pill" href="#blog">BLOG</a>
        </li>

      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

        <div id="event" class=" tab-pane  fade"><br>
          <section class="section3">


            <div class="product-event">
              <div class="row">

                <?php foreach ($event as $key => $value) {?>
                <div class="col-lg-6 col-md-6">
                  <div class="product-event1">
                    <div class="product-img-1">
                      <img src="<?= base_url('./uploads/');?><?= $value['image']?>" alt="">
                    </div>
                    <div class="product-info-1">
                      <?= $value['description']?>

                    </div>
                  </div>
                </div>
              <?php } ?>

              </div>

            </div>

          </section>


        </div>


        <div id="blog" class="tab-pane active"><br>
          <section class="section3">


            <div class="product-event">
              <div class="row">

                 <?php foreach ($blog as $key => $value) {?>
                <div class="col-lg-6 col-md-6">
                  <div class="product-event1">
                  <div class="product-img-1">
                      <img src="<?= base_url('./uploads/');?><?= $value['image']?>" alt="">
                    </div>
                    <div class="product-info-1">
                     <?= $value['description']?>

                    </div>
                  </div>
                </div>
                <?php } ?>

              </div>

            </div>

          </section>

        </div>

      </div>
    </div>




  </div>
  </div>



  <!-------------------- section3 end ---------------->
