<style>

footer {
margin-top: 150px;
}

.full-row-footer-black-components  {
    background-color: #17436F !important; 
    color: #fff;
    padding: 20px 0;
}

.logo-one-container {
    margin-left:auto;
}
.logo-one-container div img {                  
     clip-path: inset(1px);
}

.logo-one-container-f img {
    clip-path: inset(1px);
    width: 50px !important;
}

.hacienda-footer-container-f {
    clip-path: inset(1px);
}


.hacienda-footer-container-f,
.one-footer-container-f,
.worldbank-footer-container-f,
.hacienda-footer-container-f a,
.one-footer-container-f a,
.worldbank-footer-container-f a {
    background: transparent !important;
    border: none !important;
    box-shadow: none !important;
    padding: 0 !important;
}

.footer-logo-img {
    background: transparent !important;
    border: none !important;
    box-shadow: none !important;
}
@media (max-width: 990px) {
    .logo-one-container-f img {
        width: 4px !important;
    }

    .logo-one-container-f p {
        font-size: 14px;
    }

    .vertical-bar {
        height: 35px;
    }

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

    <div class="footer-query container-fluid home-grid-section d-flex justify-content-center align-items-center" style="background:
     #fdfdfd; border-radius: 24px; padding: 28px ; margin-top: 60px; ">
    <div class="row gy-4" style="margin-right: 5px;">
        <div class="logo-one-container-f col-5">
            <a href="#" class="d-flex align-items-center justify-content-center">
                <img src = "<?php echo base_url();?>themes/nada52/images/megaphone-footer-icon.png" class="img-responsive" style="width: 75px;">
                <p class="text-nowrap mb-0">Politica de divulgacion</p>
            </a>
        </div>
         <div class="col-2 d-flex justify-content-center">
            <div class="vertical-bar"></div>
        </div>
        <div class="logo-one-container-f col-5">
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
            <div class="row justify-content-center align-items-center footer-logos">

                <div class="hacienda-footer-container-f col-auto">
                    <a href="#" class="d-flex align-items-center justify-content-center">
                        <img src="<?php echo base_url();?>themes/nada52/images/hacienda-footer.png" class="img-responsive footer-logo-img">
                    </a>
                </div>

                <div class="one-footer-container-f col-auto">
                    <a href="#" class="d-flex align-items-center justify-content-center">
                        <img src="<?php echo base_url();?>themes/nada52/images/one-footer.png" class="img-responsive footer-logo-img">
                    </a>
                </div>

                <div class="col-auto d-flex justify-content-center">
                    <div class="vertical-bar"></div>
                </div>

                <div class="worldbank-footer-container-f col-auto">
                    <a href="#" class="d-flex align-items-center justify-content-center">
                        <img src="<?php echo base_url();?>themes/nada52/images/worldbank-footer.png" class="img-responsive footer-logo-img">
                    </a>
                </div>

            </div>
            <!-- / footer logos -->

            <!-- Copyrights -->
            <div class="row justify-content-center mt-2">
                <div class="col-12">
                        <p class="text-center text-light">

                            <small>
                                ©
                                <script language="JavaScript">
                                    var time = new Date();
                                    var year = time.getYear();
                                    if (year < 2000)
                                        year = year + 1900 + ", ";
                                    document.write(year); // End -->
                                <!-- </script> <!-- <?php echo $this->config->item("website_title");?>, All Rights Reserved. -->
                                                <?php echo $this->config->item("website_title");?>, All Rights Reserved | Oficina Naional de Estadistica (ONE)
                            </small>

                        </p>
                </div>
            </div>
            <!-- / Copyrights -->

        </div>
    </div>
</div>
