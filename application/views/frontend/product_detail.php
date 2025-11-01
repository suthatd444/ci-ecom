     <section class="section2">
        <div class="container">
            <div class="main-section">
                <div class="row">
                    <div class="col-12">
                        <div class="main-img">
                        <img class="img-fluid" src="<?= base_url('./uploads/');?><?= $product['product_banner']?>" alt="">
                            <!-- <img class="img-fluid" src="<?= base_url('assets/frontend_assets/');?>img/product-inside-main-page-img1.png" alt=""> -->

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>

    <!-------------------- section2 end ---------------->
    <!-------------------- section3 start --------------->



    <section class="section3-ss product-detail-sec1">
        <div class="container">
            <!--<div class="s4-heading">-->
            <!--    <h2><a href="#"> home</a><span><a href="<?= base_url('products') ?>"> / products</a></span><span><a href="#"> / <?= $product['title']?></a></span></h2>-->
            <!--</div>-->
            <nav aria-label="breadcrumb">
                <div class="">
                    <div id="nav" class="">

                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">home</a></li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="<?= base_url('products') ?>"> products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="#">  <?= $product['title']?></a>
                        </li>
                        </ol>
                    </div>
                </div>
            </nav>
            <div class="section3-info pt-4 pb-5 product-page-title">
                 <h1 class="title pb-4"><?= $product['sub_title']?></h1>
                <p><?= $product['description']?>
                </p>

            </div>



        </div>
    </section>


    <!-------------------- section3 end --------------->
    <!-------------------- section4=----------------- -->
    
    <section class="section-pro-image product-detail-pro-image">
        <div class="container">
            <div class="main-section4">
                <div class="row">
                    <div class="col-12">
                        <div class="main-img4">
                            <img class="img-fluid" src="<?= base_url('./uploads/');?><?= $product['image']?>" alt="">

                        </div>

                    </div>

                </div>

            </div>



        </div>

    </section>



    <!------------------- section4 end ----------------->



    <section class="section5-manufacturing p-top">
        <div class="container">
            <div class="manufacturing">
                <div class="m-heading">
                      <h2 class="fw-bold">Manufacturing range</h2>
                </div>

                <div class="row">
                    
                     <?php 
                    $id = array('multi_product_id'=>$_GET['id']);
                    $manufacturing_ranges = $this->common->getAllSingleRowsLike('manufacturing_range',$id);
                    // print_r($manufacturing_ranges);
                    // exit;
                    foreach ($manufacturing_ranges as $key => $value) {?>
                    
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <a href="<?= base_url('manufacturing-range?id=')?><?= $value['id']?>&pid=<?= $product['id']?>">
                        <div class="manufacturing-img">
                            <img src="<?= base_url('./uploads/');?><?= $value['image']?>" alt="" class="m-img1">
                            <div class="overlay">
                                <h2><?= $value['title']?></h2>

                            </div>
                        </div>
                         </a>
                    </div>
                   
                    <?php } ?>
                    
                </div>

            </div>
        </div>

    </section>

    <!-------------------- section4 end ---------------->
    <!-------------------- section-5 start ------------->

    <section class="other-product p-top">
        <div class="container">
            <div class="other-product1">

                <div class="p-heading">
                    <h2 class="text-uppercase">other produts</h2>
                </div>
                <div class="row">
                    <?php foreach ($recent_product as $value){
                    if($value['id']==$_GET['id']){ }else{ ?>
                    <div class="col-lg-6 col-md-6">
                          <a href="<?= base_url('product-detail?id=');?><?= $value['id'];?>">
                        <div class="other-product-info">
                            <div class="other-product-img">
                              
                                <img src="<?= base_url('./uploads/');?><?= $value['image'];?>" alt="">

                               
                              
                            </div>
                            <h2><?= $value['title'];?></h2>
                        </div>
                         </a>
                    </div>
                    
                    <?php } } ?>

                </div>

            </div>

        </div>

    </section>




    <!-------------------- section-5 end ------------->
  