<div class="csr-detail-contain">

    <section class="section2-esg">

        <div class="container">

            <div class="esg-section1">

                <div class="row">

                    <div class="col-12">
                        <div class="esg-img">
                            <img src="<?= base_url('./uploads/'); ?><?= $csractivity['image'] ?>" alt="">
                        </div>

                    </div>

                </div>

            </div>

        </div>



    </section>



    <div class="container">

        <nav aria-label="breadcrumb">

            <div id="nav" class="">



                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="#">home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">csr activity</li>

                    <li class="breadcrumb-item active" aria-current="page">

                        <?= $csractivity['title'] ?></a>

                    </li>

                </ol>

            </div>

        </nav>

    </div>

    <div class="section-3-esg">

        <div class="container">

            <div class="pt-5 pb-5">

                <?= $csractivity['description'] ?>

            </div>



            <!-- Tab panes -->


            <div class="s3-esg-img  pt-3 pb-5">
                <div class="row">

                    <?php if (!empty($csractivity['listing_image'])) {
                        foreach (explode(",", $csractivity['listing_image']) as $row) {
                    ?>
                            <div class="col-md-4"> <img src="<?= base_url('./uploads'); ?>/<?= $row ?>" alt="">
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>



            <div class="pt-5 pb-5">

                <?= $csractivity['description'] ?>

            </div>



        </div>

    </div>

</div>