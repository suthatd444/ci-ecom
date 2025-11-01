<div class="csr-activity-main">
    <section class="banner">
        <div class="container">
            <img src="https://crs.mjw.mybluehostin.me/ratnamaniinfo/assets/frontend_assets/img/subsidiariesBanner.png" class="img-fluid aos-init" alt="" data-aos="zoom-in-left" data-aos-duration="1000">
        </div>
    </section>

    <div class="container">
        <nav aria-label="breadcrumb">

            <div id="nav" class="">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">csr activity</li>
                </ol>
            </div>

        </nav>
    </div>
    <section class="tabSection">
        <div class="container">
            <div id="nav" class="">
                <ul class="d-flex align-items-center gap-md-5 gap-sm-4 gap-3  justify-content-start list-unstyled overflow-x-scroll mb-md-5" id="myTab" role="tablist">
                    <?php foreach($csractivity_type as $key=>$cstype) {?>
                        <li class="nav-item" role="presentation">
                        <a class="tabBtn <?php echo $key==1?'active selected':'' ?> " id="" data-bs-toggle="tab" data-bs-target="#tab-pane-<?=$cstype['id']?>" type="button" role="tab" aria-controls="tab-pane-<?=$cstype['id']?>" aria-selected="true"><?= $cstype['name'] ?></a>
                    </li>
                        
                        <?php } ?>

                </ul>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="tabContentBox tab-content  " id="myTabContent" style="">

        <?php foreach($csractivity_type as $key=>$cstype) { ?>
            <div class="tab-pane fade  <?php echo $key==1?'active show':'' ?>" id="tab-pane-<?=$cstype['id']?>" role="tabpanel" aria-labelledby="tab-pane-<?=$cstype['id']?>" tabindex="0">
                <section class="csr_container">
                    <div class="container">
                        <div class="csr-activity-items csr pt-5 p-bottom">
                            <div class="row">
                                <?php 
                                 $data = array('type'=>$cstype['id']);
      
                                $csractivitynew = $this->common->getAllSingleRows('csractivity',$data);
                                foreach ($csractivitynew as $key => $value) { ?>
                                    <div class="csr_box1 col-md-6 p-2">
                                        <a href="<?= base_url('csr-details?id=') ?><?= $value['id'] ?>&type=<?=$value['type']?>">
                                            <div class="slideImg position-relative">
                                                <div class=" beforeImg beforeImg2">
                                                    <img src="<?= base_url('./uploads/'); ?><?= $value['image'] ?>" alt="" class="img-fluid">
                                                </div>
                                                <div class="imgText position-absolute">
                                                    <h2><?= $value['title'] ?></h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php } ?>

            <!-- <div class="tab-pane fade " id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <section class="csr_container">
                    <div class="container">


                        <div class="csr-activity-items csr pt-5 p-bottom">
                            <div class="row">
                            <?php foreach ($csractivity as $key => $value) { ?>
                                    <div class="csr_box1 col-md-6 p-2">
                                        <a href="<?= base_url('csr-details?id=') ?><?= $value['id'] ?>&type=SOCIAL">
                                            <div class="slideImg position-relative">
                                                <div class=" beforeImg beforeImg2">
                                                    <img src="<?= base_url('./uploads/'); ?><?= $value['image'] ?>" alt="" class="img-fluid">
                                                </div>
                                                <div class="imgText position-absolute">
                                                    <h2><?= $value['title'] ?></h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <section class="csr_container">
                    <div class="container">
                        <div class="csr-activity-items csr pt-5 p-bottom">
                            <div class="row">
                            <?php foreach ($csractivity as $key => $value) { ?>
                                    <div class="csr_box1 col-md-6 p-2">
                                        <a href="<?= base_url('csr-details?id=') ?><?= $value['id'] ?>&type=GOVERNANCE">
                                            <div class="slideImg position-relative">
                                                <div class=" beforeImg beforeImg2">
                                                    <img src="<?= base_url('./uploads/'); ?><?= $value['image'] ?>" alt="" class="img-fluid">
                                                </div>
                                                <div class="imgText position-absolute">
                                                    <h2><?= $value['title'] ?></h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div> -->

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