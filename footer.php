

<div style="margin-top: 50px;">

<footer id="footer" style="background-color: #F6F6F6; bottom: 0;">

        <div class="container" style="height: 50px;">

                <div class="row" id="footer-menu" style="height: 100%; ">

                        <div class="bottom-menu col s12" id="bottom-menu-ID" style="z-index: 9; ">

                                <!-- <php wp_nav_menu( array( 'theme_location' => 'my-main-menu', 'container_class' => 'my-custom-main-menu-class' ) ); ?> -->

                                <!-- <php echo do_shortcode( '[mtlevel_menu_bottom]' );?>  -->

                                <?php echo do_shortcode( '[mtlevel_menu_demo]' );?>

                        </div>

                </div>
                <a id="btn_Home" href="" ><img style="width: 32px; height: 32px; " src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/house-black-building-shape.png"/></a>
                <!-- <button id="myBtnScrollTop" onclick="scrollToTop()"><img width="32px" height="32px" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/top-up.png"/></button> -->
                <style>
                #btn_Home img{margin-top: 10px;}
                #btn_Home:hover{opacity: 0.7;}
                
                </style>
        </div>
        

        <div><hr></div>

        <div class="container">

                <div class="row">

                        <div class="col s12">

                                <div class="col s12 l4 footer-so-1" style=" text-align:center; ">

                                <!-- <div class="six columns"> Skeleton -->

                                        <div style="width: 100%; margin-top: 20px;">

                                                <?php if ( is_active_sidebar( 'footer-1' ) ) : dynamic_sidebar( 'footer-1' ); endif; ?>

                                        </div>

                                </div>

                                <div class="col s12 l4 footer-so-2" style=" text-align:center; ">

                                <!-- <div class="six columns"> -->

                                        <div style="width: 100%; margin-top: 20px;">

                                                <?php if ( is_active_sidebar( 'footer-2' ) ) : dynamic_sidebar( 'footer-2' ); endif; ?>

                                        </div>

                                </div>

                                <div class="col s12 l4 footer-so-3" style=" text-align:center; ">

                                <!-- <div class="six columns"> -->

                                        <div style="width: 100%; margin-top: 20px;">

                                                <?php if ( is_active_sidebar( 'footer-3' ) ) : dynamic_sidebar( 'footer-3' ); endif; ?>

</div>

                                </div>

                        </div>

                </div>

        </div>

        <div id="quote">

                <div class="row" >

                        <!-- <div class="copyright" > -->

                        <!-- © php echo date('Y'); ?> php bloginfo( 'sitename' ); ?>. 

                        php _e('All rights reserved', 'tansang2'); ?>. php _e('This website is proundly to use WordPress', 'tansang2'); ?> -->

                        <!-- </div> -->



                        <div class="copyright" >

                        <?php _e('Copyright © ', 'VNPMEDIA'); ?><?php echo date('Y');?> <?php bloginfo( 'sitename' ); ?><?php _e(', All Rights Reserved.', 'VNPMEDIA'); ?>

                        </div>

                </div>

        </div>
</footer>


</div>

</article>

<!-- call ajax script -->
<?php require get_template_directory() . '/template-parts/all_ajax_script.php'; ?>

    
<?php wp_footer(); ?>


</body>

</html>

