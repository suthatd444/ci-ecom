




    <section class="banner">
      <div class="container">
          <img src="<?= base_url('assets/frontend_assets/');?>img/image/image 27.png">
      </div>
    </section>

    <div class="container">
          <nav aria-label="breadcrumb">

              <div id="nav" class="">

                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">quality certifications</li>
                </ol>
              </div>

          </nav>
        </div>
  <section class="container">











    </section>

    <section class="tabSection quality-certification-tab">

      <div id="nav" class="">
      <div class="container">

        <ul class="d-flex align-items-center justify-content-between list-unstyled overflow-x-scroll mb-0" id="myTab" role="tablist">

          <li class="nav-item" role="presentation">

            <a class="tabBtn active selected" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Accreditations for the Organization </a>

          </li>

          <li class="nav-item" role="presentation">

            <a class="tabBtn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" tabindex="-1">Accreditations for the SS Division </a>

          </li>

          <li class="nav-item" role="presentation">

            <a class="tabBtn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false" tabindex="-1">Accreditations for the CS Division </a>

          </li>

          <!-- <li class="nav-item">

            <a href="#tab4" class="tabBtn">Ravi&nbsp;Techno&nbsp;orge</a>

          </li> -->

        </ul>
</div>



    <div class="tabContentBox tab-content  pb-4" id="myTabContent" style="">

            <div class="tab-pane fade active show" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

               <section class="container p-top">

      <div class="iso_img_box">
        <div class="row">

          <?php foreach ($quality_certification as $key => $value){ if($value['tab']=='Tab 1'){  ?>
            <div class="col-sm-3">
            <div class="iso_img_box_1">

              <div class="iso_img_box_1_img">

                <img src="<?= base_url('./uploads/') ?><?= $value['image']?>">

              </div>

              <div class="iso_img_box_1_text"><span><?= $value['description']?></span></div>

            </div>
        </div>
        <?php } } ?>
        </div>



      </div>



    </section>

            </div>

            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                <section class="container p-top">


       <div class="iso_img_box">
       <div class="row">

          <?php foreach ($quality_certification as $key => $value){ if($value['tab']=='Tab 2'){  ?>
            <div class="col-sm-3">
        <div class="iso_img_box_1">

          <div class="iso_img_box_1_img">

            <img src="<?= base_url('./uploads/') ?><?= $value['image']?>">

          </div>

          <div class="iso_img_box_1_text"><span><?= $value['description']?></span></div>

        </div>
        </div>
        <?php } } ?>


        </div>
      </div>

    </section>

            </div>

            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

                <section class="container p-top">

      <div class="iso_img_box">
            <div class="row">
          <?php foreach ($quality_certification as $key => $value){ if($value['tab']=='Tab 3'){  ?>
            <div class="col-sm-3">
        <div class="iso_img_box_1">

          <div class="iso_img_box_1_img">

            <img src="<?= base_url('./uploads/') ?><?= $value['image']?>">

          </div>

          <div class="iso_img_box_1_text"><span><?= $value['description']?></span></div>

        </div>
        </div>
        <?php } } ?>
        </div>


      </div>

    </section>

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





    </section>