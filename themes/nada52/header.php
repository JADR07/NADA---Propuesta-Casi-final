<!-- <style>
.site-header .navbar-light .no-logo .navbar-brand--sitename {border:0px!important;margin-left:0px}
.site-header .navbar-light .no-logo .nada-site-title {font-size:18px;}
.navbar-brand {
    height: 90px;
    width: auto;
}
</style> -->

<style>

#containerNavbar{
    flex: 1;
    justify-content: center;
}

.logo-one{
    margin-left: auto;
}


.navbar a img {
  width: 100%;
   clip-path: inset(1px);
}
 .navbar-collapse {
    white-space: nowrap;
 }


 .navbar-collapse {
    text-align: center;
 }

@media (max-width:750px){

    .wb-navbar > .container-fluid{
        display:flex;
        flex-wrap:wrap;
        align-items:center;
    }

    /* Botón */
    .navbar-toggler{
        order:1;
        margin-left:initial;
        /*  width: 20px;
        height: 20px;
        background-size: 20px 20px; */
    }

    .navbar-toggler-icon {
        width: 20px;
    }

    /* Menú */
    #containerNavbar{
        order:4;
        flex:0 0 100%;
        width:100%;
    }

    /* Logo ANDA */
    .navbar-brand:first-of-type{
        order:2;
        width:25%;
        margin-right:auto;
        /* margin-left: 10px; */
    }

    /* Logo ONE */
    .navbar-brand:last-of-type{
        order:3;
        width:25%;
        margin-left:auto;
    }
}

/*@media (max-width: 767px) {
   .anda-logo {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: nowrap;
    }

    .logo-one {
        order: 2;
    }

    .wb-navbar-button-toggler {
        order: 3;
        margin-left: auto;
    }
}*/



</style>
<header class="site-header">
    <?php /*?>
    <div class="container-fluid wb-user-bar">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <?php //require 'user-bar.php';?>
                </div>
            </div>
        </div>
    </div>
    <?php */ ?>

    <?php //language bar ?>
    <?php require 'lang-bar.php';?>

    <div class="container-fluid px-0">
        <div class="row"> 
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light rounded navbar-toggleable-md">
                    <div class="container-fluid">
                        <a class="navbar-brand mr-4" href="<?php echo site_url(); ?>">
                            <img src="<?php echo base_url();?>themes/nada52/images/anda-logo-header.png"
                            class="anda-logo"
                            alt="ANDA Logo">
                        </a>
                        <?php /**
                         * 
                         * LOGO + Text
                         **/  ?>
                        <?php /* ?>
                        <div class="navbar-brand">
                            <div class="navbar-brand--logo">
                                <img src="<?php echo base_url();?>themes/nada52/images/logo.svg" >
                            </div>
                            <div class="navbar-brand--sitename">
                                <div><a class="nada-site-title" href="<?php echo site_url(); ?>"><?php echo $this->config->item("website_title"); ?></a></div>
                                <div class="nada-site-subtitle">An Online Microdata Catalog</div>
                            </div>
                        </div>
                        <?php */ ?>


                        <?php /**
                         * 
                         * text only 
                         **/  ?>
                        <?php /**/ ?>
                    <!--  <div class="navbar-brand no-logo">
                            <div class="navbar-brand--sitename">
                                <div><a class="nada-site-title" href="<?php echo site_url(); ?>"><?php echo $this->config->item("website_title"); ?></a></div>
                                <div class="nada-site-subtitle">Data Catalog</div>
                            </div>
                        </div>
                        <?php /**/?> -->
                        

                      <button class="navbar-toggler navbar-toggler-right collapsed wb-navbar-button-toggler" type="button" data-toggle="collapse" data-target="#containerNavbar"
                        aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                            <!-- Start menus -->
                            <?php require 'nav-menu.php'; ?>
                            <!-- Close Menus -->
                        
    
                        <a class="navbar-brand mr-4" href="https://www.one.gob.do">
                            <img src="<?php echo base_url();?>themes/nada52/images/one-logo-header.png"
                            class="logo-one"
                            alt="ONE Logo">
                        </a>
                    </div>
                </nav> 
                <!-- </nav> -->
            </div>

        </div>
        <!-- /row -->

    </div>

</header>