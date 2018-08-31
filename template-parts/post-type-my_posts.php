<?php
/*
Template Name: 
*/
// get_header();
?>

<?php

// $args_a = array(
//     'orderby' => 'name',
//     'hide_empty' => 0,
//     'taxonomy' => 'taxannomy_1'
// ); 

// $custom_term = get_terms( array(
//     $post->ID,
//     'taxonomy' => 'taxanomy_1',
// ) );
    // wp_reset_query();
    // echo $custom_term->name;
    // var_dump($custom_term);

    $terms = 'taximailinh';
    if($terms != 'all'){
        $args =
            array('post_type' => 'my_post',
            'posts_per_page' => 8,
                // 'tax_query' => array(
                //     array(
                //         'taxanomy' => 'taxanomy_1',
                //         'field' => 'slug', //type: id, name, slug
                //         'terms' =>  $terms,
                //         // 'post__not_in' => array($post->ID),
                //         // 'terms' =>  $custom_term->slug,
                //         // 'terms' =>  $custom_term->name,
                //         // 'operator' => 'IN'
                    
                //     )
                // )
            );
    }
    else{
        $args = array(
                      'post_type' => 'my_post',
                    //   'showposts'=>$posts,
                                //   'paged'=>$paged,
                        'order'=>'asc',
                        'orderby'=>'title',
                    
                  );
    }
        $the_query = new WP_Query( $args );
    ?>

    <div class="no-container post_type_my_post" style="position: relative; ">
        <div class="row" id="row-my_post">
            <div class="col s12">
    <?php
                // The Loop
                if ( $the_query->have_posts() ) {
                    // echo '<h2>'.$custom_term->name.'</h2>';
                    
                    echo '<ul class="list-my_post ">';
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        // global $post;
                        
                        echo '<li class="col s12 m6 l3 item-post" style="position: relative;">';
                        // echo '<li class="col s12 s6 m4 l3 item-post" style="position: relative;">'; #ff0000
                            // echo '<div class="post-image" style="position: absolute; margin: 0 auto;">' . the_post_thumbnail('thumbnail') .'</div>';
                            echo the_post_thumbnail('thumbnail');
                            // echo '<div>' . get_the_title() . '</div>'; $post->ID, get_the_permalink , get_the_title
                            echo '<div class="title-post"><a style="color: white; font-weight: bold;  text-shadow: 1px 1px #004A85; width: 68%; z-index: 2;" href="'.get_the_permalink( $post->ID).'">' . get_the_title() . '</a></div>';
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

    /* .post_type_my_post {margin-bottom: 200px;} */
</style>

<style>

    #row-my_post{margin-bottom: 0;}
	.post-title {height: 100%;}
	.post-title img {width: 100%; height: auto; }

    /* ul.list-my_post li img {width: 70%; height: auto; border: 7px solid #FD4084;} */

    .item-post img{margin-left:16.5%;}
    .item-post img:hover {opacity: 0.7;
        filter: brightness(40%);
        transform: scale(1.1);
        -webkit-transition: 0.2s; /*For Safari 3.1 to 6.0 */
        transition: 0.2s;

        overflow: hidden;
        /* transition: transform 0.35s; */
        /* webkit-transition: -webkit-transform 0.35s; */
    }

    .title-post{margin-left:16.5%; position: absolute; z-index: 2; margin-top: -40%; width: 68%; 
        /* position: absolute;  */
        /* overflow: hidden;  */
        /* white-space: nowrap; */
        /* word-wrap: break-word; */
    }
</style>

<?php
// get_footer();