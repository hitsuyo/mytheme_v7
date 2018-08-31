<?php

add_theme_support( 'menus' );



// register_nav_menus(

//  array(

//  'main-nav' => 'Menu chính' ) );



// register_nav_menus(

//     array(

//         'my-main-menu' => __('Menu chính'),

//         'my-main-menu-demo' => __('Menu Demo'),

//         'footer-nav-1' => __('Menu chan trang 1'),

//         'footer-nav-2' => __('Menu chan trang 2')

//         )

// );

// add_action( 'init', 'register_my_menu' );







/*----------------------------------------------------*/

function multilevel_menu_demo( $atts_demo)

{

    ob_start();

?>

        <div class="my-custom-main-menu-class-demo" style="position: relative; z-index: 11;">

            <ul id="menu-2" class="nav_main_demo" style=" -webkit-transition: opacity 3s;">

<?php 

            $menuLocations_demo = get_nav_menu_locations(); 

            $menuID_demo = $menuLocations_demo['my-main-menu-demo']; 

            $primaryNav_demo = wp_get_nav_menu_items($menuID_demo); 

            $id_parent_demo =0;

            foreach ( (array) $primaryNav_demo as $navItem_demo ) {

                if($navItem_demo -> menu_item_parent == $id_parent_demo){

                    echo '<li class="menu-item'.$navItem_demo ->ID.'"><p class="link link_and_icon" href="'.$navItem_demo->url.'" title="'.$navItem_demo->title.'">'.$navItem_demo->title.'</p>'.'<img class="link_and_icon" id="icon_down" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/if_triangle-down_16x16.png" />'; 
                    // echo '<img class="link_and_icon" id="icon_down" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/if_triangle-down_16x16.png" />';

                    $sub_demo="";

                    foreach ( (array) $primaryNav_demo as $navItem2_demo ) { 

                    if($navItem2_demo -> menu_item_parent == $navItem_demo ->ID){

                    $sub_demo .= '<li class="menu-item '.$navItem2_demo ->ID.'"> <p class="link" href="'.$navItem2_demo->url.'" title="'.$navItem2_demo->title.'">'.$navItem2_demo->title.'</p>';

                    $sub2_demo="";

                    foreach ( (array) $primaryNav_demo as $navItem3_demo ) { 

                        if($navItem3_demo -> menu_item_parent == $navItem2_demo ->ID){

                        $sub2_demo .= '<li class="menu-item ' .$navItem3_demo ->ID.'"> <p class="link" href="'.$navItem3_demo->url.'" title="'.$navItem3_demo->title.'">'.$navItem3_demo->title.'</p></li>';

                    } 

                    }

                    $sub_demo .= '<ul>'.$sub2_demo.'</ul>'; 

                    $sub_demo .= '</li>';

                    } 

                }

                echo '<ul>'.$sub_demo.'</ul>';

                echo '</li>';

                }

        }

?>

            </ul>

        </div>



        <!-- <style>

            .show {display:block;  visibility: visible; transition-delay: 0.1s, 0.1s, 0.3s;}
            .hide {display: none;}

            li a.link.active { color:blue; }

        </style> -->


<style>
    .my-custom-main-menu-class-demo   {
        height: 30px; /* set to the height you want your menu to be */
        margin: 0 0 10px; /* just to give some spacing */
    }
    .my-custom-main-menu-class-demo ul    {
        margin: 0; padding: 0; /* only needed if you have not done a CSS reset */
    }
    .my-custom-main-menu-class-demo li    {
        display: block;
        /* float: left; */
        float: none;
        line-height: 30px; /* this should be the same as your #main-nav height */
        height: 30px; /* this should be the same as your #main-nav height */
        margin: 0; padding: 0; /* only needed if you don't have a reset */
        position: relative; /* this is needed in order to position sub menus */
    }
    .my-custom-main-menu-class-demo li a  {
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 0 15px;
    }
    .my-custom-main-menu-class-demo .current-menu-item a, .my-custom-main-menu-class-demo .current_page_item a, .my-custom-main-menu-class-demo a:hover {
        color: #000;
        background: #ccc;
    }

    /* ------------------------ */

    .my-custom-main-menu-class-demo ul ul { /* this targets all sub menus */
        display: none; /* hide all sub menus from view */
        position: absolute;
        top: 30px; /* this should be the same height as the top level menu -- height + padding + borders */
        z-index: 99;
    }
    .my-custom-main-menu-class-demo ul ul li { /* this targets all submenu items */
        float: none; /* overwriting our float up above */
        /* width: 150px; set to the width you want your sub menus to be. This needs to match the value we set below */
        width: 250px;
    }
    .my-custom-main-menu-class-demo ul ul li a { /* target all sub menu item links */
        padding: 5px 10px; /* give our sub menu links a nice button feel */
    }

    .my-custom-main-menu-class-demo ul li:hover > ul {
        display: block; /* show sub menus when hovering over a parent */
    }
    .my-custom-main-menu-class-demo ul ul li ul {
        /* target all second, third, and deeper level sub menus */
        left: 250px; /* this needs to match the sub menu width set above -- width + padding + borders */
        top: 0; /* this ensures the sub menu starts in line with its parent item */
    }
    /* ----------------------------------------------------------------------------------------------------------- */
    /* .my-custom-main-menu-class-demo {
        background: blue;
    } */

    /* CUSTOMIZE */
    .my-custom-main-menu-class-demo ul ul li p {
        background: black;
        color: white;
        cursor: pointer;
    }
    .my-custom-main-menu-class-demo li p{
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 0 15px;
        cursor: pointer;
    }
    .my-custom-main-menu-class-demo .current-menu-item p, .my-custom-main-menu-class-demo .current_page_item p, .my-custom-main-menu-class-demo p:hover {
        color: #000;
        background: #ccc;
        cursor: pointer;
    }
    .my-custom-main-menu-class-demo ul ul li p { 
        padding: 5px 10px; 
        cursor: pointer;
    }

    .link_and_icon{
        display: inline-block;
        vertical-align: text-top;
    }
    #icon_down{  position: absolute; margin: 0; padding: 0; margin-left: 40px; margin-top: -10px; display: none;}

    @media screen and (min-width: 1024px) { 
        .my-custom-main-menu-class-demo li {float: left;} 
        #icon_down{display: block;}
        }

</style>

<script>
    // jQuery(.my-custom-main-menu-class-demo a)

    jQuery("div.my-custom-main-menu-class-demo ul li ul").on("click",function(){
        alert('clicked');
    }

    // var item_demo = document.getElementById()
</script>

<?php 

return ob_get_clean();

}

add_shortcode( 'mtlevel_menu_demo', 'multilevel_menu_demo' );
?>