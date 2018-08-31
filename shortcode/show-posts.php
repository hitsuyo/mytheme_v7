<?php

function show_post($atts){
    ob_start();
?>


     <div class="homeInfo">
        <h2>Blog Posts</h2>
        <?php 
        $blogPost = new WP_query();
        $blogPost->query('showposts=1');
        while($blogPost->have_posts()) : $blogPost->the_post(); ?>
        <p><?php the_content_rss('&hellip;', false, '', 40);?></p>
        <a href="<?php the_permalink(); ?>">Read More &hellip;</a>
        <?php endwhile;?>
    </div>
<?php
	return ob_get_clean();
}
add_shortcode( 'sh_post', 'show_post');