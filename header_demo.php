<!DOCTYPE html>

<html>


 <body>
 <!-- button scroll top -->
 <!-- <button id="myBtnScrollTop" onclick="scrollToTop()"><img width="32px" height="32px" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/top-up.png"/></button>
    <style>
        #myBtnScrollTop{
            display: none;
            /* display: block; */
            position: fixed;
            bottom: 50px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: rgba(0,0,0,0.3);
            color: white;
            cursor: pointer;
            /* padding: 15px; */
            padding: 30px 10px;
            border-radius: 5px;
            opacity: 0.5;
        }
        #myBtnScrollTop:hover{opacity: 1;}
    </style> -->


 <article class="main_article">

 <header >
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- <script type="text/javascript">
    ajaxurl = '<php echo admin_url('admin-ajax.php'); ?>';
</script> -->

 <!-- <php wp_head(); ?> -->



<!-- <div id="quote">

    <div class="row" >



    </div>

</div> -->



<div class="bg-header" style="height: 100px; width: 100%; background-color: #FFFFFF; z-index: 12; border: 1px solid #F5FFFA;">

    <div id="quote" style="z-index: 11; height: 26px; border: 0.2px solid white;">

            <div class="row" >

                <p class="white-text center-align">Hotline: 0906 221 468, 0981 246 958</p>

            </div>

    </div>

    <div class="container" style="height: 100%; z-index: 11;" id="logo-and-nav">

        <div class="row" id="header-menu" style="height: 100%; ">

            <div class="logo col s12 l3" >

                <?php

                    $logo= get_theme_mod('logo');

                        if(!empty($logo)) {echo '<a href="'.get_home_url().'"><img src="'.$logo.'" /></a>';}

                ?>

            </div>

            <div class="main-menu col s12 l9" id="main-menu-ID" style="z-index: 11; ">

                <!-- wp_nav_menu( array( 'theme_location' => 'my-main-menu', 'container_class' => 'my-custom-main-menu-class' ) );  -->

                <?php echo do_shortcode( '[mtlevel_menu_demo]' ); ?>

            </div>



            <div class="col s12" id="lines-button" style="" onclick="showMenu();">

                <div class="bar1"></div>

                <div class="bar2"></div>

                <div class="bar3"></div>

            </div>

        </div>

    </div>



</div>

</div>

<!-- <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("logo-and-nav").style.top = "0";
    } else {
        document.getElementById("logo-and-nav").style.top = "-50px";
    }
    prevScrollpos = currentScrollPos;
    }
</script> -->


  <!-- wp_nav_menu( array( 'theme_location' => 'my-main-menu', 'container_class' => 'my-custom-main-menu-class' ) );   -->



<!-- <div class="container" style="z-index: 6;">

     echo do_shortcode( '[woocommerce_cart]' ); 



    woocommerce_mini_cart() gio hang mini 

</div> -->



<div class="social-icons pull-right">

    <ul class="nav navbar-nav">
        <?php

            $fb= get_theme_mod( 'Facebook' );

            $fb= get_theme_mod( 'Twitter' );

            $fb= get_theme_mod( 'Linkedin' );



            if(!empty($fb)){echo '<li><a href="'.$fb.'"><i class="fa fa-facebook"></i></a></li>';}

            if(!empty($tw)){echo '<li><a href="'.$tw.'"><i class="fa fa-twitter"></i></a></li>';}

            if(!empty($ln)){echo '<li><a href="'.$ln.'"><i class="fa fa-linkdedin"></i></a></li>';}

        ?>

    </ul>

</div>



</header>



<style>

html, body {

    /* width: 100%; */

    /* height: 100%;

     */

}


</style>



<!-- <!—[if lt IE 7]>

  <link rel="stylesheet" type="text/css" href="ie6.css" />

<![endif]—> -->



<!-- <style>

@media screen and (min-width: 980px) {



    html, body { margin: 0; padding: 0; height: 100%; }

    

    .main_article {

        min-height: 100%;

        display: grid;

        grid-template-rows: auto 1fr auto;

        grid-template-columns: 100%;

        position:relative;

    }

}

</style> -->