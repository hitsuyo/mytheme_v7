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



function multilevel_menu( $atts)

{

    ob_start();

?>

        <div class="my-custom-main-menu-class" style="position: relative; z-index: 11;">

            <ul id="menu-1" class="nav_main" style=" -webkit-transition: opacity 3s;">

<?php 

            $menuLocations = get_nav_menu_locations(); 

            $menuID = $menuLocations['my-main-menu']; 

            $primaryNav = wp_get_nav_menu_items($menuID); 

            $id_parent =0;

            foreach ( (array) $primaryNav as $navItem ) {

                if($navItem -> menu_item_parent == $id_parent){

                    echo '<li class="menu-item '.$navItem ->ID.'"><a class="link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>'; 

                    $sub="";

                    foreach ( (array) $primaryNav as $navItem2 ) { 

                    if($navItem2 -> menu_item_parent == $navItem ->ID){

                    $sub .= '<li class="menu-item '.$navItem2 ->ID.'"> <a class="link" href="'.$navItem2->url.'" title="'.$navItem2->title.'">'.$navItem2->title.'</a>';

                    $sub2="";

                    foreach ( (array) $primaryNav as $navItem3 ) { 

                        if($navItem3 -> menu_item_parent == $navItem2 ->ID){

                        $sub2 .= '<li class="menu-item ' .$navItem3 ->ID.'"> <a class="link" href="'.$navItem3->url.'" title="'.$navItem3->title.'">'.$navItem3->title.'</a></li>';

                    } 

                    }

                    $sub .= '<ul>'.$sub2.'</ul>'; 

                    $sub .= '</li>';

                    } 

                }

                echo '<ul>'.$sub.'</ul>';

                echo '</li>';

                }

    }

?>

            </ul>

        </div>



        <style>

            .show {display:block;  visibility: visible; transition-delay: 0.1s, 0.1s, 0.3s;}
            .hide {display: none;}

            li a.link.active { color:blue; }

        </style>

<?php 

	return ob_get_clean();

}

add_shortcode( 'mtlevel_menu', 'multilevel_menu' );



/*----------------------------------------------------*/

// function multilevel_menu_bottom( $atts)
function multilevel_menu_bottom( $atts)

{

    ob_start();

?>

        <div class="my-custom-main-menu-class_bottom" style="position: relative; z-index: 11;">

            <ul id="menu-1" class="nav_main_bottom" style=" -webkit-transition: opacity 3s;">

<?php 

            $menuLocations = get_nav_menu_locations(); 

            $menuID = $menuLocations['footer-nav-1']; 

            $primaryNav = wp_get_nav_menu_items($menuID); 

            $id_parent =0;

            foreach ( (array) $primaryNav as $navItem ) {

                if($navItem -> menu_item_parent == $id_parent){

                    echo '<li class="menu-item'.$navItem ->ID.'"> <a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>'; 

                    $sub="";

                    foreach ( (array) $primaryNav as $navItem2 ) { 

                    if($navItem2 -> menu_item_parent == $navItem ->ID){

                    $sub .= '<li class="menu-item'.$navItem2 ->ID.'"> <a href="'.$navItem2->url.'" title="'.$navItem2->title.'">'.$navItem2->title.'</a>';

                    $sub2="";

                    foreach ( (array) $primaryNav as $navItem3 ) { 

                        if($navItem3 -> menu_item_parent == $navItem2 ->ID){

                        $sub2 .= '<li class="menu-item' .$navItem3 ->ID.'"> <a href="'.$navItem3->url.'" title="'.$navItem3->title.'">'.$navItem3->title.'</a></li>';

                    } 

                    }

                    $sub .= '<ul>'.$sub2.'</ul>'; 

                    $sub .= '</li>';

                    } 

                }

                echo '<ul>'.$sub.'</ul>';

                echo '</li>';

                }

    }

?>

            </ul>

        </div>



        <style>

            .show {display:block;  visibility: visible; transition-delay: 0.1s, 0.1s, 0.3s;}

        </style>

<?php 

	return ob_get_clean();

}

add_shortcode( 'mtlevel_menu_bottom', 'multilevel_menu_bottom' );


// ---------------------------------------

