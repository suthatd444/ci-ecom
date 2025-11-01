<style type="text/css">
  .slide-title {
    color: #009da4;
    text-transform: unset;
    /* font-family: 'Exo'; */
    font-size: 28px;
    line-height: 30px;
    margin-bottom: 35px;
    position: relative;
    margin-top: 30px;
  }

  .cd-faq-categories {
    box-shadow: 0 1px 2px rgba(0, 0, 0, .08);
    padding: 0;
  }

  .cd-faq-categories li {
    list-style-type: none;
  }

  .cd-faq-categories .selected {
    background: #009da4;
    color: #fff;
  }

  .cd-faq-categories a {
    position: relative;
    display: block;
    overflow: hidden;
    height: 50px;
    line-height: 50px;
    padding: 0 28px 0 16px;
    padding: 0 24px;
    -webkit-transition: background .2s, padding .2s;
    -moz-transition: background .2s, padding .2s;
    transition: background .2s, padding .2s;
    background-color: #f2f2f2;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #333;
    font-weight: 600;
    white-space: nowrap;
    border-bottom: 1px solid #bababa;
    text-overflow: ellipsis;
  }

  .cd-faq-categories a::before {
    display: block;
    top: 0;
    right: auto;
    left: 0;
    height: 100%;
    width: 4px;
    background-color: #b3559f;
    opacity: 0;
    -webkit-transition: opacity .2s;
    -moz-transition: opacity .2s;
    transition: opacity .2s;
  }

  .cd-faq-categories .selected::before {
    opacity: 1;
  }

  .tabSection ul li {
    width: unset;
  }
</style>
<section class="banner">
  <div class="container">
    <img src="<?= base_url('assets/frontend_assets/'); ?>img/investorBanner.png" class="img-fluid" alt="" data-aos="fade-up" data-aos-duration="1000" />
  </div>
</section>

<div class="container">
  <nav aria-label="breadcrumb">
    <div id="nav" class="">

      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">home</a></li>
        <li class="breadcrumb-item active" aria-current="page">investors relations</li>
      </ol>
    </div>
  </nav>
</div>

<section class="tabSection">
  <div class="container">
    <div id="nav" class="">
      <ul class="d-flex align-items-center justify-content-between list-unstyled overflow-x-scroll" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="tabBtn" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><?= $investor_relation['tab_1'] ?></a>
        </li>
        <li class="nav-item" role="presentation">
          <a id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" class="tabBtn"><?= $investor_relation['tab_2'] ?></a>
        </li>
        <li class="nav-item" role="presentation">
          <a id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false" class="tabBtn"><?= $investor_relation['tab_3'] ?></a>
        </li>
        <li class="nav-item" role="presentation">
          <a id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" class="tabBtn"><?= $investor_relation['tab_4'] ?></a>
        </li>
        <?php if ($custom_tab) {
          foreach ($custom_tab as $custom) {
        ?>
            <li class="nav-item" role="presentation">
              <a id="tab_id-<?= $custom['id'] ?>" data-bs-toggle="tab" data-bs-target="#tab-id-<?= $custom['id'] ?>-pane" type="button" role="tab" aria-controls="tab-id-<?= $custom['id'] ?>-pane" aria-selected="false" class="tabBtn"><?= $custom['tab_name'] ?></a>

          <?php
          }
        } ?>
      </ul>

      <div class="tabContentBox tab-content py-sm-5 py-4" id="myTabContent">
        <div id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0" class="tab-pane fade show active">
          <?= $investor_relation['tab_desc_1'] ?>
        </div>
        <div id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0" class="tab-pane fade">
          <?= $investor_relation['tab_desc_2'] ?>
        </div>
        <div id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0" class="tab-pane fade">
          <?= $investor_relation['tab_desc_3'] ?>
        </div>
        <div id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0" class="tab-pane fade">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Annual Reports
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <div class="rowLine position-relative">
                    <?php foreach ($reports1limit as $key => $value) { ?>
                      <a download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>">
                        <div class="downBox">
                          <img src="<?= base_url('assets/frontend_assets/'); ?>img/dwonImg.png" class="img-fluid mb-3" alt="">
                          <p class="mt-1 text-center"><span class="d-block text-lowercase">annual reports</span>
                            <span class="d-block"><?= $value['year'] ?></span>
                          </p>
                        </div>
                      </a>
                    <?php } ?>
                    <?php if (count($reports1) > 5) { ?>
                      <div class="posBox border-0 p-0 ms-auto">
                        <div class="dropdown">
                          <button class="dropdown-toggle dropBtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Archive
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php foreach ($reports1 as $key => $value) { ?>
                              <li><a class="dropdown-item" download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>"><?= $value['year'] ?></a></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Quarterly Results
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <div class="rowLine position-relative">
                    <?php foreach ($reports2limit as $key => $value) { ?>
                      <a download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>">
                        <div class="downBox">
                          <img src="<?= base_url('assets/frontend_assets/'); ?>img/dwonImg.png" class="img-fluid mb-3" alt="">
                          <p class="mt-1 text-center"><span class="d-block text-lowercase">annual reports</span>
                            <span class="d-block"><?= $value['year'] ?></span>
                          </p>
                        </div>
                      </a>
                    <?php } ?>
                    <?php if (count($reports2) > 5) { ?>
                      <div class="posBox border-0 p-0 ms-auto">
                        <div class="dropdown">
                          <button class="dropdown-toggle dropBtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Archive
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php foreach ($reports2 as $key => $value) { ?>
                              <li><a class="dropdown-item" download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>"><?= $value['year'] ?></a></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Subsidiaries Financial
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  <div class="rowLine position-relative">
                    <?php foreach ($reports3limit as $key => $value) { ?>
                      <div class="downBox">
                        <a download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>"><img src="<?= base_url('assets/frontend_assets/'); ?>img/dwonImg.png" class="img-fluid mb-3" alt=""></a>
                        <p class="mt-1 text-center"><span class="d-block text-lowercase">annual reports</span>
                          <span class="d-block"><?= $value['year'] ?></span>
                        </p>
                      </div>
                    <?php } ?>
                    <?php if (count($reports3) > 5) { ?>
                      <div class="posBox border-0 p-0 ms-auto">
                        <div class="dropdown">
                          <button class="dropdown-toggle dropBtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Archive
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php foreach ($reports3 as $key => $value) { ?>
                              <li><a class="dropdown-item" download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>"><?= $value['year'] ?></a></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                  Investor Presentation
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                <div class="accordion-body">
                  <div class="rowLine position-relative">
                    <?php foreach ($reports4limit as $key => $value) { ?>
                      <div class="downBox">
                        <a download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>"><img src="<?= base_url('assets/frontend_assets/'); ?>img/dwonImg.png" class="img-fluid mb-3" alt=""></a>
                        <p class="mt-1 text-center"><span class="d-block text-lowercase">annual reports</span>
                          <span class="d-block"><?= $value['year'] ?></span>
                        </p>
                      </div>
                    <?php } ?>
                    <?php if (count($reports4) > 5) { ?>
                      <div class="posBox border-0 p-0 ms-auto">
                        <div class="dropdown">
                          <button class="dropdown-toggle dropBtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Archive
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php foreach ($reports4 as $key => $value) { ?>
                              <li><a class="dropdown-item" download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>"><?= $value['year'] ?></a></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                  Conference Calls Transcripts
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                <div class="accordion-body">
                  <div class="rowLine position-relative">
                    <?php foreach ($reports5limit as $key => $value) { ?>
                      <div class="downBox">
                        <a download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>"><img src="<?= base_url('assets/frontend_assets/'); ?>img/dwonImg.png" class="img-fluid mb-3" alt=""></a>
                        <p class="mt-1 text-center"><span class="d-block text-lowercase">annual reports</span>
                          <span class="d-block"><?= $value['year'] ?></span>
                        </p>
                      </div>
                    <?php } ?>
                    <?php if (count($reports5) > 5) { ?>
                      <div class="posBox border-0 p-0 ms-auto">
                        <div class="dropdown">
                          <button class="dropdown-toggle dropBtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Archive
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php foreach ($reports5 as $key => $value) { ?>
                              <li><a class="dropdown-item" download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>"><?= $value['year'] ?></a></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                  Conference Calls Recordings
                </button>
              </h2>
              <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                <div class="accordion-body">
                  <div class="rowLine position-relative">
                    <?php foreach ($reports6limit as $key => $value) { ?>
                      <div class="downBox">
                        <a download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>"><img src="<?= base_url('assets/frontend_assets/'); ?>img/dwonImg.png" class="img-fluid mb-3" alt=""></a>
                        <p class="mt-1 text-center"><span class="d-block text-lowercase">annual reports</span>
                          <span class="d-block"><?= $value['year'] ?></span>
                        </p>
                      </div>
                    <?php } ?>
                    <?php if (count($reports6) > 5) { ?>
                      <div class="posBox border-0 p-0 ms-auto">
                        <div class="dropdown">
                          <button class="dropdown-toggle dropBtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Archive
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php foreach ($reports6 as $key => $value) { ?>
                              <li><a class="dropdown-item" download href="<?= base_url('./uploads/'); ?><?= $value['pdf'] ?>"><?= $value['year'] ?></a></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php if ($custom_tab) {
          foreach ($custom_tab as $custom) {
            $titles = $this->common->getAllSingleRows('investors_relations_tabdata', array('investors_relations_tab_id' => $custom['id']));

        ?>

            <div id="tab-id-<?= $custom['id'] ?>-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0" class="tab-pane fade">
              <section class="govt">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="sidebar">
                        <ul class="cd-faq-categories">
                          <?php if (count($titles) > 0) {
                            foreach ($titles as $title) {
                          ?>
                              <li>
                                <a id="title_id<?= $title['id'] ?>" class="" href="#title_id<?= $title['id'] ?>"><?= $title['title'] ?></a>
                              </li>
                          <?php
                            }
                          }
                          ?>

                        </ul>
                      </div>
                    </div>
                    <div class="col-md-8">

                      <?php if (count($titles) > 0) {
                        foreach ($titles as $title) {
                          $tabcontents = $this->common->investors_relations_tabcontent_list($title['id']);
                      ?>
                          <div id="<?= $title['title'] ?>_tab" class="cd-faq-group">
                            <h2 class="slide-title"><?= $title['title'] ?></h2>

                            <?php if (count($tabcontents) > 0) {
                              foreach ($tabcontents as $key => $tabcontent) {


                            ?>
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading-<?= str_replace(" ", "", $tabcontent['title']) . $key ?>">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?= str_replace(" ", "", $tabcontent['title']) . $key ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse<?= str_replace(" ", "", $tabcontent['title']) . $key ?>">
                                        <?= $tabcontent['title'] ?> </button>
                                    </h2>

                                    <div id="panelsStayOpen-collapse<?= str_replace(" ", "", $tabcontent['title']) . $key ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-collapse<?= str_replace(" ", "", $tabcontent['title']) . $key ?>">
                                      <div class="accordion-body">


                                        <div class="accordion">
                                          <?php

                                          $tabcontentsinner = $this->common->investors_relations_tabcontent_list_ungroup(array('irtc.title' => $tabcontent['title']));

                                          if (count($tabcontentsinner) > 0) {
                                            foreach ($tabcontentsinner as $key => $tabcontentinner) {
                                          ?>

                                              <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-heading-<?= str_replace(" ", "", $tabcontentinner['subtitle']) . $key ?>">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?= str_replace(" ", "", $tabcontentinner['subtitle']) . $key ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse<?= str_replace(" ", "", $tabcontentinner['subtitle']) . $key ?>">
                                                    <?= $tabcontentinner['subtitle'] ?> </button>
                                                </h2>

                                                <div id="panelsStayOpen-collapse<?= str_replace(" ", "", $tabcontentinner['subtitle']) . $key ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo" style="">
                                                  <div class="accordion-body">
                                                    <?php
                                                    $tabcontentsinner = $this->common->investors_relations_tabcontent_list_ungroup(array('irtc.id' => $tabcontent['id']));
                                                    if (!empty($tabcontentinner['docs'])) {

                                                      if (count(explode(",", $tabcontentinner['docs'])) > 0) {
                                                        foreach (explode(",", $tabcontentinner['docs']) as $key => $doc) {
                                                    ?>

                                                          <div class="rowLine position-relative">
                                                            <a download="" href="<?= base_url() ?>./uploads/<?= $doc ?>">
                                                              <div class="downBox">
                                                                <img src="<?= base_url() ?>assets/frontend_assets/img/dwonImg.png" class="img-fluid mb-3" alt="">
                                                                <p class="mt-1 text-center"><span class="d-block text-lowercase"><?= str_replace("_", " ", $doc) ?></span>

                                                                </p>
                                                              </div>
                                                            </a>
                                                          </div>
                                                          <hr />
                                                    <?php }
                                                      }
                                                    } ?>
                                                  </div>
                                                </div>
                                              </div>

                                          <?php }
                                          } ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                       
                  <?php
                              }
                            }
                          }
                        }
                  ?>



                    </div>
                  </div>
                </div>
              </section>
            </div>
        <?php
          }
        } ?>
      </div>
    </div>
  </div>
</section>