<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ratnamani </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url('assets/');?>vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');?>vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/');?>vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url('assets/');?>vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/');?>vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url('assets/');?>js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets/');?>images/favicon.png" />
</head>
<style type="text/css">
  #example_filter{
    margin-left: 72%;
  }
  #example_previous{
    margin-left: 80%;
  }
</style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="<?= base_url('dashboard');?>">
            <h2><img src="<?= base_url('assets/');?>images/footer-logo.png"></h2>
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h3 class="welcome-sub-text">Dashboard </h3>
            
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
         <?php
         $data = array('id'=>1);
        $user = $this->common->getSingleRows('users',$data);
         ?>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="<?= base_url('./uploads/').$user['image'];?>" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="<?= base_url('./uploads/').$user['image'];?>" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold"><?= $user['user_name']?></p>
                <p class="fw-light text-muted mb-0"><?= $user['email']?></p>
              </div>
              <a href="<?= base_url('my-profile') ?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile </a>
                <a href="<?= base_url('logout');?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard');?>">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
           <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Pages</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="<?= base_url('custom-pages/0');?>">Custom Pages</a></li>
                   
                   <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-1" aria-expanded="false" aria-controls="ui-basic-1">
                    <span class="menu-title">Home</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-1">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('home');?>">Home Section</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('industry-presence');?>">Industry Presenc</a></li>
                     <li class="nav-item"> <a class="nav-link" href="<?= base_url('proudly-affirm');?>">Proudly Affirmc</a></li>
                    </ul>
                  </div>
                </li>
                
                <!--<li class="nav-item"> <a class="nav-link" href="<?= base_url('home');?>">Home Section</a></li>-->
              
                <!--<li class="nav-item"> <a class="nav-link" href="<?= base_url('industry-presence');?>">Industry Presence</a></li>-->
                <!--<li class="nav-item"> <a class="nav-link" href="<?= base_url('proudly-affirm');?>">Proudly Affirm</a></li>-->
               
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('subsidiaries');?>">Subsidiaries</a></li>

                <!--<li class="nav-item"> <a class="nav-link" href="<?= base_url('post');?>">Title highlights</a></li>-->

                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-10" aria-expanded="false" aria-controls="ui-basic-10">
                    <span class="menu-title">Investors Relations</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-10">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('investorsrelations');?>">Investors Relations Section</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('annualreports');?>">Annual Reports</a></li>
                         <li class="nav-item"> <a class="nav-link" href="<?= base_url('investorsrelations-tab');?>">Create tab</a></li>

                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('investorsrelations-tabdata');?>">Tab title</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('investorsrelations-tabcontent');?>">Tab content</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('investorsrelations-tabdoc');?>">Tab content Docs</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-2" aria-expanded="false" aria-controls="ui-basic-2">
                    <span class="menu-title">Quality Assurance</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-2">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('qualityassurance');?>">Quality Assurance Section</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('inspectiontesting');?>">Inspection & Testing</a></li>
                    </ul>
                  </div>
                </li>
                
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('quality-certifications');?>">Quality Certification</a></li>
                
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-3" aria-expanded="false" aria-controls="ui-basic-3">
                    <span class="menu-title">Career Section</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-3">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('careers');?>">Career Section</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('careers-list');?>">Career Point</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('career-form-list');?>">Career Form List</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-4" aria-expanded="false" aria-controls="ui-basic-4">
                    <span class="menu-title">About</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-4">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('company-profile');?>">Company Profile</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('milestones');?>">Milestones</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('integrity');?>">Integrity</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('board');?>">Board</a></li>
                      <!--<li class="nav-item"> <a class="nav-link" href="<?= base_url('our-leadership');?>">Our Leadership</a></li>-->
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-5" aria-expanded="false" aria-controls="ui-basic-5">
                    <span class="menu-title">Locate Us</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-5">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('locateus');?>">Locate Us</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?= base_url('inquiry-form-list');?>">Inquiry Form List</a></li>
                    </ul>
                  </div>
                </li>
                
              </ul>
            </div>
          </li>
         
          <li class="nav-item nav-category">Product</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-6" aria-expanded="false" aria-controls="ui-basic-6">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Product</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic-6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('product');?>">Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('manufacture-range');?>">Manufacture Range</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('salient-feature');?>">Salient Features</a></li>
              </ul>
            </div>
          </li>
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" href="<?= base_url('csractivity');?>">-->
          <!--    <i class="mdi mdi-grid-large menu-icon"></i>-->
          <!--    <span class="menu-title">CSR Activity</span>-->
          <!--  </a>-->
          <!--</li>-->
           <li class="nav-item nav-category">CSR Activity</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-20" aria-expanded="false" aria-controls="ui-basic-20">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">CSR Activity</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic-20">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('csractivity');?>">CSR Activity</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('csrstep');?>">CSR Steps</a></li>
                </ul>
              </div>
            </li>
            
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('post');?>">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Highlight</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('header-footer');?>">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Header & Footer</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('global-seo');?>">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Global SEO</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('social-links');?>">
              <i class="mdi mdi-web menu-icon"></i>
              <span class="menu-title">Media</span>
            </a>
          </li>
        
        </ul>
      </nav>