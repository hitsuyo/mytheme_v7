<?php
/*
Template Name: Chinhsachs
*/
// get_header();
?>

<?php

$args = array('post_type' => 'chinhsach' );                                              
$the_query = new WP_Query( $args );
?>

<div class="container post_type_chinhsach" style="position: relative;">
    <div class="row">
        <div class="col s12">
<?php
            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<ul class="list-chinhsach ">';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<li class="col s12 m4 style="border-radius: 50%;">';
                        echo '<div>' . the_post_thumbnail('thumbnail') .'</div>';
                        // echo '<div>' . get_the_title() . '</div>';
                        echo '<div><a style="color: white; margin-left: 20%;" href="'.get_the_permalink($post->ID).'">' . get_the_title() . '</a></div>';
                    echo '</li>';
                }
                echo '</ul>';
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }
?>
        </div>
    </div>
</div>


<style type="text/css">
    ul.list-book{
        list-style-type: none;
    }

    ul.list-book li{border: 1px solid black ;}

    ul.list-book li img{
        width: 150px;
        height: 150px;
    }

    .post_type_book {margin-bottom: 200px;}

    ul.list-chinhsach li img{border-radius: 50%; border: 2px solid black; margin-left: 20%;}
    ul.list-chinhsach li div:nth-child(2) a{margin-left: 20%;}
</style>

<?php
// get_footer();