<?php

/**

 * The Template for displaying all single custom posts.

 *

 * @package Mytheme

 * @author tansang

 

 */



get_header();

?>



<div class="wrap">

	<div id="primary" class="content-area chinhsach-area">

		<main id="main" class="site-main-chinhsach" role="main">

			<div class="container chinhsach-container">

				<?php

				/* Start the Loop */

				while ( have_posts() ) : the_post();

				

					echo '<div ><p style='.'" font-size: 2rem; text-align: center; margin-top: 100px;"'.'>' . get_the_title() . '</p></div>';

					// echo '<div class='.'"thumnail_post"'.'style='.'"width: 200px; height: 200px;"'.'>';

					// 	the_post_thumbnail('thumbnail');

					// echo '</div>';

				?>

					<div style="">

						<?php the_post_thumbnail(array(200,200));?>

					</div> 

				<?php

					// $my_book_title = get_post_meta( get_the_ID(), 'Tên custom field', true);

					// $my_book_price = get_post_meta( get_the_ID(), 'Giá bán', true);

					// $my_book_author = get_post_meta( get_the_ID(), 'Tác giả', true);

					// $my_book_page_volumn = get_post_meta( get_the_ID(), 'Số trang', true);

					// $my_book_size = get_post_meta( get_the_ID(), 'Size', true);

					// $my_book_size_centi = get_post_meta( get_the_ID(), 'Kích thước', true);

					

					// if( ! empty( $my_book_price) ) {echo '<h5>Giá bán: ' . $my_book_price . '</h5>';}



					// if(  ! empty( $my_book_author ) ) {echo '<h5>Tác giả: ' . $my_book_author . '</h5>';}



					// if( !empty( $my_book_page_volumn )) {echo '<h5>Số trang: ' . $my_book_page_volumn . '</h5>';}



					// if( !empty( $my_book_size )) {echo '<h5>Size: ' . $my_book_size . '</h5>';}



					// if( !empty( $my_book_size_centi )) {echo '<h5>Kích thước: ' . $my_book_size_centi . '</h5>';}

					

					echo '<div class="entry-content">';

						the_content();

					echo '</div>';



					echo get_post_meta($post->ID, 'key', true);





					// get_template_part( 'template-parts/post/content', get_post_format() );



					// If comments are open or we have at least one comment, load up the comment template.

					// if ( comments_open() || get_comments_number() ) :

					// 	comments_template();

					// endif;



				endwhile; // End of the loop.

				?>

			</div>



		</main><!-- #main -->

	</div><!-- #primary -->

	<!-- php get_sidebar();  -->

</div><!-- .wrap -->



<?php get_footer();



// Omit Closing PHP Tags