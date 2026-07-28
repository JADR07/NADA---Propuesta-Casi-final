<style>
.full-row-footer-black-components  {
    background-color: #17436F !important; 
    color: #fff;
    padding: 20px 0;
}

.logo-one-container div img {                  
     clip-path: inset(1px);
}

img {
    clip-path: inset(1px);
    width: 50px !important;
}

@media (max-width: 820px) {
    .footer-query {
        display: none !important;
    }
}


</style>

<footer>
    <!-- footer top section -->
    <?php //include_once 'footer_top.php';?>
    <!-- End footer top section -->

    <div class="footer-query container-fluid home-grid-section d-flex justify-content-center align-items-center" style="background: #fdfdfd; border-radius: 24px; padding: 28px; margin-top: 60px;">
    <div class="row gy-4">
        <div class="logo-one-container col-lg-5">
            <a href="#" class="d-flex align-items-center justify-content-center">
                <img src = "<?php echo base_url();?>themes/nada52/images/megaphone-footer-icon.png" class="img-responsive" style="width: 75px;">
                <p class="text-nowrap mb-0">Politica de divulgacion</p>
            </a>
        </div>
         <div class="col-lg-2 d-flex justify-content-center">
            <div class="vertical-bar"></div>
        </div>
        <div class="logo-one-container col-lg-5">
            <a href="#" class="d-flex align-items-center justify-content-center">
                <img src = "<?php echo base_url();?>themes/nada52/images/question-footer-icon.png" class="img-responsive" style="width: 75px;">
                <p class="text-nowrap mb-0">Consulta de datos</p>
            </a>
        </div>
    </div>
   
</div>
    <!-- footer bottom section -->
    <div class="full-row-footer-black-components">
        <div class="container">
            <div class="footer">
                <div class="row">

                    <!-- / footer logo -->
                    <!-- <div class="col-12 col-md-6">

                        <div class="text-center text-lg-left mt-2">
                        <?php /* logo ?>
                        <a href="<?php echo site_url();?>" class="g01v1-logo nada-logo">
                            <img style="width:50px;" title="<?php echo $this->config->item("website_title");?>" src="<?php echo base_url().$bootstrap_theme; ?>/images/logo-placeholder.png" class="img-responsive">                            
                        </a>
                        <?php */?>

                        <?php /* text only */ ?>
                        <a href="<?php echo site_url();?>" style="color:white;padding-top:20px;" >
                            <?php echo $this->config->item("website_title");?>
                        </a>                        
                        <?php /* */?>
                        </div>

                    </div> -->
                    <!-- / footer logo -->

                    <!-- Copyrights-->
                    <div class=" col-12 col-md-6 footer-bottom-right">
                        <div class="">
                            <div class="footer-copy-right">

                                <p class="text-center text-lg-right">

                                    <small>
                                        ©
                                        <script language="JavaScript">
                                            var time = new Date();
                                            var year = time.getYear();
                                            if (year < 2000)
                                                year = year + 1900 + ", ";
                                            document.write(year); // End -->
                                        </script> <!-- <?php echo $this->config->item("website_title");?>, All Rights Reserved. -->
                                                        <?php echo $this->config->item("website_title");?>, All Rights Reserved | Oficina Naional de Estadistica (ONE)
                                    </small>

                                </p>

                            </div>

                        </div>
                    </div>
                    <!-- / Copyrights  -->

                     <div class="logo-one-container col-12 col-md-6">
                        <div class="text-center text-lg-right mt-2">
                            <img src="<?php echo base_url();?>themes/nada52/images/one-footer.png" class="img-responsive" style="width: 100px;">
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</footer>