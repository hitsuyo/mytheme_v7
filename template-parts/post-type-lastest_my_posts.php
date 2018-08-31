<?php
/*
Template Name: 
*/
// get_header();
?>

<?php

$args = array('post_type' => 'my_post', 'posts_per_page' => 3 );      
// $args = array('post_type' => 'my_post');                                 
$the_query = new WP_Query( $args );
?>

<div class="no-container post_type_my_post-lastest" style="position: relative; height: 100%;">
    <div class="row">
        <br>
        <br>
        <h5 style="text-align: center; font-weight: bold;">BÀI VIẾT MỚI NHẤT</h5>
        <div class="col s12">
<?php
            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<ul class="list-my_post-lastest" id="list-my_post-ID">';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<li class="col s12 m6 l4 item-post-lastest" style="">';
                    // echo '<li class="col s12 s6 m4 l3 item-post" style="position: relative;">'; #ff0000
                        // echo '<div class="post-image" style="position: absolute; margin: 0 auto;">' . the_post_thumbnail('thumbnail') .'</div>';
                        echo the_post_thumbnail('thumbnail');
                        // echo the_excerpt();
                        // echo '<div>' . get_the_title() . '</div>';
                        echo '<div class="title-post-lastest"><a style="color: black; font-family: Arial, Helvetica, sans-serif; width: 68%; z-index: 2;" href="'.get_the_permalink($post->ID).'">' . get_the_title() . '</a></div>';
                    echo '</li>';
                }
                echo '</ul>';
                // endwhile;
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }
?>
        </div>

        <div style=" width: 100%; " class="load_post_here"></div>
        <div class="more_posts" style="text-align: center; font-weight: bold; color: orange; z-index: 2;" id="more_posts-ID" onclick="loadMorePost()">XEM THÊM CÁC TIN TỨC KHÁC</div>
        

    </div>
</div>




<!-- <style type="text/css">
    ul.list-book{
        list-style-type: none;
    }

    ul.list-book li{border: 1px solid black ;}

    ul.list-book li img{
        width: 150px;
        height: 150px;
    }

    
</style> -->

<style>

    .post_type_my_post-lastest {margin-bottom: 200px;}
	.post-title {height: 100%;}
	.post-title img {width: 100%; height: auto; }

    ul.list-my_post-lastest li img {width: 70%; height: auto;}

    .item-post-lastest img{margin-left:16.5%;}
    .item-post-lastest img:hover {
        /* opacity: 0.7; */
        /* filter: brightness(40%); */
        /* transform: scale(1.1); low speed */
        -webkit-transition: 0.2s; /*For Safari 3.1 to 6.0 */
        transition: 0.2s;
        
        overflow: hidden;
        /* transition: transform 0.35s; */
        /* webkit-transition: -webkit-transform 0.35s; */
    }

    .title-post-lastest{margin-left:16.5%;  width: 68%; 
        /* position: absolute;  */
        /* overflow: hidden;  */
        /* white-space: nowrap; */
        /* word-wrap: break-word; */
    }

    .more_posts:hover{cursor: pointer;}
</style>



<?php
// get_footer();