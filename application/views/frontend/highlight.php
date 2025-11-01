

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

<div class="section-3-advertise pt-5">
    <div class="container">

        <div class="section3-add-img">
            <img class="img-fluid" src="<?= base_url('./uploads/'); ?><?= $highlight['image'] ?>" alt="">
        </div>


    </div>
</div>



<!-------------------- section3 end ---------------->

<!-------------------- section4 start ---------------->

<div class="section-4-add-info pt-5 p-bottom">
    <div class="container">
        <div class="add-info">
            <?= $highlight['description'] ?>
        </div>

    </div>
</div>



<!-------------------- section4 end ---------------->