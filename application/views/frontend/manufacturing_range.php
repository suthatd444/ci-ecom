<style>

.specification-grade {
   
    position: relative;
}
.main-img img {
    width: 100%;
    padding: 0px 0px;
    /* height: 673px; */
}
.s4-heading {
    padding-left: 0px;
}

  @media (max-width:1200px)
{
    .contentBox:nth-child(3) .s-part1::after,
  .contentBox:nth-child(4) .s-part1::after {
    content: initial;
  }
}
</style>
    <!-------------------- section2 start ---------------->

    <section class="section2 manu-feature">
        <div class="container">
            <div class="main-section">
                <div class="row">
                    <div class="col-12">
                        <div class="main-img">
                            <img class="img-fluid" src="<?= base_url('./uploads/');?><?= $manufacturing_range['image']?>" alt="">

                        </div>

                    </div>

                </div>

            </div>



        </div>

    </section>

    <!-------------------- section2 end ---------------->
    <!-------------------- section3 start --------------->


<?php 
$id = array('id'=>$_GET['pid']);
$product = $this->common->getSingleRows('product',$id);
?>
    <section class="section3-tube">
        <div class="container">
            <div class="s4-heading">
                <h2><a href="#"> home</a><span><a href="<?= base_url('products') ?>"> / products</a></span><span><a href="<?= base_url('product-detail?id=').$_GET['pid'] ?>"> / <?= $product['title']?></a></span><span><a href="#"> / <?= $manufacturing_range['title']?></a></span></h2>
            </div>
          
             <div class="product-page-title pt-5  ">
                <h1 class="title pb-5"><?= $manufacturing_range['title']?></h1>

                 <h2 class="fw-bold pb-5">SALIENT FEATURES</h2>    

                <div class="row">
                    
                    <?php 
                    $id = array('multi_manu_rang_id'=>$_GET['id']);
                    $salent_feature = $this->common->getAllSingleRowsLike('salent_feature',$id);
                    foreach($salent_feature as $row){
                    ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="tube-info"> 
                            <?= $row['description']?>
                        </div>

                    </div>
                    <?php } ?>
                    


                </div>


            </div>


        </div>
    </section>


    <!-------------------- section3 end --------------->
    <!-------------------- section4 start----------- -->

    <section class="specification">
        <div class="container">
            <div class="specification-info">
                <h3>Specification</h3>
                <div class="row">
                    <div class="col-12">
                        <div class="specification-table">
                            <div class="row">
                                <div class="contentBox col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2">
                                    <div class="s-part1">
                                        <h2>Product</h2>
                                        <h4><?= $manufacturing_range['title']?></h4>

                                    </div>
                                </div>
                                <div class="contentBox col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2">
                                    <div class="s-part1">
                                        <h2>Size/Range</h2>
                                        
                                        <h4><?= $manufacturing_range['size_range']?></h4>
                                        

                                    </div>
                                </div>

                                <div class="contentBox col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2">
                                    <div class="s-part1">
                                        <h2>Thickness</h2>
                                        <h4><?= $manufacturing_range['thickness']?></h4>
                                        
                                       

                                    </div>
                                </div>
                                <div class="contentBox col-12 col-sm-12 col-md-12 col-xl-6">
                                    <div class="s-part1">
                                        <h2>Specification</h2>
                                        <?= $manufacturing_range['specification']?>
                                    </div>

                             </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="specification-grade">
                            <p>Grades: <?= $manufacturing_range['grades']?></p>  </div>
                    </div>

                </div>

            </div>

        </div>


    </section>

    <!---------------------------- section4 end ----------------->
    <!----------------------- section5 start ------------------->
    
    <section class="section-5-heading">
        <div class="container">
            <div class="s-heading">
                <h3>Application</h3>
            </div>

        </div>

    </section>

    <section class="section5-application">
        <div class="container">
            <div class="application-info">
              

                <?= $manufacturing_range['application']?>
                

            </div>

        </div>

    </section>



