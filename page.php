<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mytheme
 * 
 * page.php & single.php --> use for show post in blog page
 */

get_header();
?>
	<div style="height: 200px;"></div>
	<div id="primary" class="content-area" style="width: 80%;">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			// get_template_part( 'template-parts/page');

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

			// echo apply_filters('page',$wp_query->post->post_content);
			the_content();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
