<?php
$id = array('id'=>1);
$globalseo = $this->common->getSingleRows('globalseo',$id);
$id1 = array('id'=>1);
$headerfooter = $this->common->getSingleRows('headerfooter',$id1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $globalseo['description']?>">
  <meta name="keywords" content="<?= $globalseo['keyword']?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $globalseo['title']?></title>

  <link rel="shortcut icon" href="<?= base_url('assets/');?>images/favicon.png" />

  <!-- <link rel="stylesheet" href="<?//= base_url('assets/frontend_assets/');?>css/common.css"> -->
  <!-- <link rel="stylesheet" href="<?//= base_url('assets/frontend_assets/');?>css/highlight.css"> -->
  <!-- <link rel="stylesheet" href="<?//= base_url('assets/frontend_assets/');?>css/csr.css"> -->
  <!-- <link rel="stylesheet" href="<?//= base_url('assets/frontend_assets/');?>css/quaity-aus.css"> -->
  <!-- <link rel="stylesheet" href="<?//= base_url('assets/frontend_assets/');?>css/locate-us.css"> -->
  <!-- <link rel="stylesheet" href="<//?= base_url('assets/frontend_assets/');?>css/product/product.css">
  <link rel="stylesheet" href="<//?= base_url('assets/frontend_assets/');?>css/product/product2.css"> -->
  <!-- <link rel="stylesheet" href="<?//= base_url('assets/frontend_assets/');?>css/about.css"> -->
  <!-- <link rel="stylesheet" href="<?//= base_url('assets/frontend_assets/');?>css/hedfoot.css"> -->
  <!-- <link rel="stylesheet" href="<//?= base_url('assets/frontend_assets/');?>css/product/product3.css"> -->
  <!-- <link rel="stylesheet" href="<? // =base_url('assets/frontend_assets/');?>css/old.css"> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/frontend_assets/');?>css/others.css">
  <link rel="stylesheet" href="<?= base_url('assets/frontend_assets/');?>css/style.css">

<style>
  

    /* @media only screen and (max-width: 1024px) {
      section.contact_sec {
        background-color: #3b42f8;
        padding: 130px 0px;
        margin-top: 50;
        margin-top: 100px;
      }
    } */
    #menu{
        height:100vh;
        overflow-y:scroll;
    }
ul.mobileMenu {
    list-style: none;
    padding-left: 10px;
    display:none;
}
ul.mobileMenu li > a {
    line-height: 2;
    padding: 7px 15px;
    display: block;
    color:#000;
    border-bottom: 1px solid #fbfbfb;
}
 nav#menu ul > li > a > i {
    float: right;
}
</style>

</head>

<body>
  <header class="py-xxl-5 py-4">
    <div class="wrapper">
      <div class="row align-items-center">
        <div class="col-sm-3 col-5" data-aos="fade-right" data-aos-duration="1000">
          <div class="logo">
            <a href="<?= base_url()?>" ><img src="<?= base_url('./uploads/');?><?= $headerfooter['header_img']?>" class="img-fluid" alt="logo" ></a>
          </div>
        </div>
        <div class="col-sm-9 col-7 ms-auto" data-aos="fade-left" data-aos-duration="1000">
          <div class="menu d-flex justify-content-end gap-xxl-5 gap-xl-4 gap-sm-3 gap-2">
            <img src="<?= base_url('assets/frontend_assets/');?>img/flag.svg" alt="flag" class="flagIcon img-fluid">
            <div class=" d-flex gap-xxl-4 gap-xl-3 gap-sm-2 gap-1 align-items-center">
              <a href="<?= base_url('locate-us')?>" class="contact_btn linkBtn active ">Contact Us</a>
              <a href="" class="down_btn linkBtn ">Download Brochure</a>
            </div>
            <img onclick="showMenu()" src="<?= base_url('assets/frontend_assets/');?>img/toggle.svg" alt="toggle" class="toggleIcon">

          </div>
        </div>
      </div>
    </div>
    <nav id="menu">
              <div class="logoImg">
                   <a href="<?= base_url()?>" ><img src="<?= base_url('./uploads/');?><?= $headerfooter['header_img']?>" class="img-fluid" alt="logo" ></a>
              </div>
               <div class="nav-inner">
                <span id="nav-close"><img src="https://crs.mjw.mybluehostin.me/ratnamani/uploads/close.png" alt=""></span>
                   <ul class="nav-list">
                         <li class="nav-item"><a class="nav-link-btn" href="<?= base_url('')?>">Home</a></li>
                          <li class="nav-item submenu"><a class="nav-link-btn" href="javascript:void(0);">About us<i class="fa-solid fa-chevron-down"></i></a>
                          <ul class="mobileMenu">
                              <li>
                                  <a href="<?= base_url('about-company-profile')?>">
                                      Company profile
                                  </a>
                              </li>
                               <li>
                                  <a href="<?= base_url('about-milestones')?>">
                                      Milestones
                                  </a>
                              </li>
                               <li>
                                  <a href="<?= base_url('about-integrity')?>">
                                      Values & Integrity
                                  </a>
                              </li>
                               <li>
                                  <a href="<?= base_url('about-board')?>">
                                     On the board
                                  </a>
                              </li>
                          </ul>



                          </li>
                          <li class="nav-item"><a class="nav-link-btn" href="<?= base_url('products')?>">Products</a></li>
                          <li class="nav-item"><a class="nav-link-btn" href="<?= base_url('csr-activity')?>">CSR</a></li>
                          <li class="nav-item"><a class="nav-link-btn" href="<?= base_url('investor-relation')?>">Investors</a></li>
                          <li class="nav-item"><a class="nav-link-btn" href="<?= base_url('quality-certification')?>">Quality Certifications</a></li>
                          <li class="nav-item"><a class="nav-link-btn" href="<?= base_url('quality-assurance')?>">Quality Assurance</a></li>
                          <li class="nav-item"><a class="nav-link-btn" href="<?= base_url('subsidiarie')?>">Subsidiaries</a></li>
                          <li class="nav-item"><a class="nav-link-btn" href="<?= base_url('highlight')?>">Highlights</a></li>
                          <li class="nav-item"><a class="nav-link-btn" href="<?= base_url('career')?>">Career</a></li>
                          <li class="nav-item"><a class="nav-link-btn" href="<?= base_url('locate-us')?>">Locate us</a></li>
                  </ul>
              </div>
            </nav>
  </header>