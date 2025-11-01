

<div class="product-main">
<section class="section2">
    <div class="container">
        <div class="main-section">
            <div class="row">
                <div class="col-12">
                    <div class="main-img">
                        <img src="<?= base_url('assets/frontend_assets/');?>img/main-img-product-page.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section3">
<div class="container">
    <nav aria-label="breadcrumb">
      <div id="nav" class="">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">home</a></li>
          <li class="breadcrumb-item active" aria-current="page">products</li>
        </ol>
      </div>
    </nav>
    <div class="product-gallery pt-5">
        <div class="row">

            <?php foreach ($product as $key => $value) { ?>
            <div class="col-lg-6 col-md-6 pb-4">
               <a href="<?= base_url('product-detail?id=').$value['id'] ?>"><div class="product-detail pb-3">
                   <div class="product-img">
                        <img src="<?= base_url('./uploads/');?><?= $value['image'] ?>" alt="">
                   </div>
                   <div class="product-info">
                    <h3 class="text-uppercase pt-3"> <?= $value['title'] ?></h3>

                       <p> <?= $value['sub_title'] ?></p>

                   </div>
               </div></a>
            </div>
        <?php } ?>

        </div>
    </div>
</div>

</section>
</div>