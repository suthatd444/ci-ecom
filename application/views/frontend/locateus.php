 <style type="text/css">
</style>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<section class="banner">
    <div class="container">
    <img src="<?= base_url('assets/frontend_assets/');?>img/image/image 27.png">
    </div>
  </section>
 <section class="locate_us_container">

        <div class="container">
          <nav aria-label="breadcrumb">

              <div id="nav" class="">

                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">locate us</li>
                </ol>
              </div>

          </nav>
        </div>



      <div class="container">
        <ul class="pt-3 pb-4 d-flex align-items-center gap-md-5 gap-sm-4 gap-3 justify-content-start list-unstyled overflow-x-scroll">
          <li class="nav-item">
            <a href="locate_us.html" class="tabBtn selected" aria-current="page">locate&nbsp;us</a>
          </li>
        </ul>
      </div>


        <div class="container">


        <div class="row ">

        	<?php foreach ($locateus as $key => $value) {?>
         <div class="col-sm-4">
              <div class="locate_box_1 ">
                <?= $value['description']?>
            </div>
        </div>
        	<?php } ?>

        </div>
       <div class="container p-top">
          <div class="inquiry_form" id="inquiry_form">
              <h2 class="pb-3">
                  Inquiry form
              </h2>
          <?php if(!empty($_GET['success'])){ if ($this->session->flashdata('succ_msg')) { ?>
                        <div class="success"> <?= $this->session->flashdata('succ_msg') ?> </div>
                        <?php }elseif($this->session->flashdata('error_msg')){ ?>
                                  <div class="danger"> <?= $this->session->flashdata('error_msg') ?> </div>
                        <?php }} ?>
             <form onsubmit="return submitUserForm();" action="<?= base_url('locate-us-form')?>" method="post" enctype="multipart/form-data">
                  
                <div class="mb-3 mt-3">
            
                  <input type="name" class="form-control myIn" placeholder="Name*" name="name" required>
                </div>
                <div class="mb-3">
        
                  <input type="email" class="form-control myIn" placeholder="Email*" name="email" required>
                </div>
                
                <div class="mb-3">
                    <input type="Contact" class="form-control myIn" placeholder="Contact No*" name="phone" required>
                  </div>

                  <div class="mb-3">
                    <textarea type="text " rows="5" class="form-control myIn" placeholder="your message*" required name="message"></textarea>
                    
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LfNKiYlAAAAAGdLUG6RErprvgoXvhm-P1b0O_ue" data-callback="verifyCaptcha"></div>
                 
                  <div id="g-recaptcha-error"></div>
                  <div class="btn_locate">
                    
                  <button type="submit" class="btn myBtn">Submit</button>
                  </div>
                
              </form>
        </div>
</div>
    </section>
    <script type="text/javascript">
  var onloadCallback = function() {
    // alert("grecaptcha is ready!");
  };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>

<script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        // return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>

<?php 
    if(!empty($_GET['success'])){

        ?>
    <script>
window.location=window.location.href+"#inquiry_form";

    </script>

        <?php
    }
    
    ?>