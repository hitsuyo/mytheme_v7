
<?php

/*

Template Name: Blog

*/





// get_header();


wp_reset_query();
?>

	<div class="no-container" style="">

			<div class="row">

				<div class="col s12">

<?php

				$myposts = get_posts('');

				foreach($myposts as $post) :

					setup_postdata($post);

?>

				<div class="post-item col s12 m3" style="min-height: 325px; ">
				<!-- style="display: inline-block;" -->

					<div class="post-info" style="">
							<div class="post-title" style=" ">
								<?php
									if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
									// the_post_thumbnail( 'full' ); // size
									the_post_thumbnail( 'thumbnail' );
									// the_post_thumbnail( 'medium' );
									}
								?>
								<!-- <br> -->
							</div>
						
							<div class="" style="z-index: 2; height: 100%; color: white; "><a style="color: black;" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?></a>
							</div>
					</div>

					<!-- <p class="post-meta">Posted by <?php the_author(); ?></p> -->


					<!-- <div class="post-content"> -->

					<!-- ?php the_content(); ?> -->

					<!-- </div> -->

				</div>

<!-- php comments_template();  -->

				<?php endforeach; wp_reset_postdata(); ?>

				</div>

			</div>

	 </div>

<style>
	.post-title {height: 100%;}
	.post-title img {width: 100%; height: auto; }
</style>

<!-- $myposts = get_posts('');

foreach($myposts as $post) :

setup_postdata($post);

?>

 php the_title(); 

 php the_content(); ?>

php endforeach; wp_reset_postdata();  -->





<?php

	// get_sidebar();

	// get_footer(); 



