 <section class="banner">
    <div class="container">
        <img src="<?= base_url('assets/frontend_assets/');?>img/car_banner.png" alt="">
    </div>
</section>
<div class="container">
    <nav aria-label="breadcrumb">

        <div id="nav" class="">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">home</a></li>
            <li class="breadcrumb-item active" aria-current="page">career</li>
        </ol>
        </div>

    </nav>
</div>


     <div class="second_section pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="">
                    <?= $career['description']?>           
                </div>
            </div>
        </div>
    </div>




   

    <div class="third_section p-top vacancy">
        <div class="container">
            <div class="row">
            <div class="col-md-12 ">
               
            
            <div class="accordion" id="accordionPanelsStayOpenExample">
            <?php foreach ($careerpoint as $key => $value) {?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button
                  class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne<?= $value['id']?>"
                    aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseOne"
                  >
                  <?= $value['title']?>
                </button>
                </h2>
                <div
                id="panelsStayOpen-collapseOne<?= $value['id']?>"
                  class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingOne"
                >
                  <div class="accordion-body">
                  <?= $value['description']?>
                  </div>
                </div> 
              </div>  
            <?php } ?>
            </div>
              
            <!-- <?php foreach ($careerpoint as $key => $value) {?>
                    <button class="accordion"><?= $value['title']?></button>
                    <div class="panel">
                       <?= $value['description']?>
                    </div>
                    
                <?php } ?> -->

             </div>
            </div>
        </div>
    </div>

<div class="form_section p-top">
        <div class="container">
        
            <div class="row">     
                <form action="<?= base_url('career-form')?>" method="post" enctype="multipart/form-data">
                        
                <div class="col-md-12">
                    <div class="login_form career-form" id="login_form">

                        <h3>CAREER FORM</h3>
                        <?php if ($this->session->flashdata('succ_msg')) { ?>
                        <div class="success"> <?= $this->session->flashdata('succ_msg') ?> </div>
                        <?php }elseif($this->session->flashdata('error_msg')){ ?>
                                  <div class="danger"> <?= $this->session->flashdata('error_msg') ?> </div>
                        <?php } ?>
                         <div class="pt-5">
                            <div class="input_text_name">
                                <input type="text" class="myIn " id="name" name="name" placeholder="Name*" required>
                            </div>
                            <hr>
                            <div class="input_text_name">
                                <input type="email" class="myIn " id="email" name="email" placeholder="Email id*" required>
                            </div>
                            <hr>
                            <div class="input_text_name">
                                <input type="tel" class="myIn " id="phone" name="phone" placeholder="Contact no*" required>
                            </div>
                            <hr>
                            <div class="input_text_name">
                              <label class="label" for="Fds">
                                <span>Upload Resume*</span>
                              </label>
                              <input type="file" onchange="validateSize(this)"  accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf"  name="resume" id="Fds" style="display:none" required/>
                            </div>
                            <hr>
                            <div class="input_text_name">
                                <input class="myIn text_input" type="text" id="text" name="message" placeholder="your message*"
                                    required>
                            </div>
                            <hr>
                            <button type="submit" class="myBtn form_btn btn">Submit</button>
                       
                    </div>
                    </div>
                </div>
                 </form>
            </div>
        </div>
    </div>


    <?php 
    if(!empty($_GET['success'])){

        ?>
    <script>
window.location=window.location.href+"#login_form";

    </script>

        <?php
    }
    
    ?>
<script>
    function validateSize(input) {
  const fileSize = input.files[0].size / 1024 / 1024; // in MiB
  if (fileSize > 2) {
    alert('Max file size 10 MB');
    // $(file).val(''); //for clearing with Jquery
  } else {
    // Proceed further
  }
}
</script>
