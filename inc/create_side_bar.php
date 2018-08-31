<?php

//Tạo widget
add_action( 'widgets_init', 'new_widget' );
function new_widget() {
register_widget('tdc_widget');
}

register_sidebar(array(
	'name' => 'Footer 1',
	'id' => 'footer-1',
	'description' => 'Footer so 1',
	'before_widget' => '<div id="new-products_block_right" class="block products_block">',
	'after_widget' => '</div>',
	// 'before_title' => '<h4 class="title_block" style="text-align: center;font-size: 15px;font-weight: bold;color: #f12a43;">'
	// 'after_title' => '</h4>'
  ));

register_sidebar(array(
'name' => 'Footer 2',
'id' => 'footer-2',
'description' => 'Footer so 2',
'before_widget' => '<div id="new-products_block_right" class="block products_block">',
'after_widget' => '</div>',
// 'before_title' => '<h4 class="title_block" style="text-align: center;font-size: 15px;font-weight: bold;color: #f12a43;">'
// 'after_title' => '</h4>'
));

register_sidebar(array(
	'name' => 'Footer 3',
	'id' => 'footer-3',
	'description' => 'Footer so 3',
	'before_widget' => '<div id="new-products_block_right" class="block products_block">',
	'after_widget' => '</div>',
	// 'before_title' => '<h4 class="title_block" style="text-align: center;font-size: 15px;font-weight: bold;color: #f12a43;">'
	// 'after_title' => '</h4>'
));


class tdc_widget extends WP_Widget {
	function __construct() {
		parent::__construct (
			'id_widget',
			'Tên Widget',
			 array(
				  'description' => 'Widget chua thong tin trang web' // mô tả
				   )
			  );
	}
	 function form( $instance ) {
		$num_post = ! empty( $instance['num_post'] ) ? $instance['num_post'] : esc_html__( '5'); ?>

		<p> <label for="<?php echo esc_attr( $this->get_field_id( 'num_post' ) ); ?>">Số bài hiển thị</label>
		
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'num_post' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'num_post' ) ); ?>" 
		type="number" value="<?php echo esc_attr( $num_post ); ?>"> </p> <?php
	}
	 function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['num_post'] = ( ! empty( $new_instance['num_post'] ) ) ? strip_tags( $new_instance['num_post'] ) : '';
		return $instance;
	}
	 function widget( $args, $instance ) {
		extract($args); 
		$post_number = $instance['num_post']; 
		$numpost_query = new WP_Query('posts_per_page='.$post_number); 
		// echo $before_title; 
		echo "Đây là tiêu đề widget"; 
		// echo $after_title; 
		echo $before_widget; 
		if ($numpost_query->have_posts()): 
		  echo "<ul>"; 
		  while( $numpost_query->have_posts() ) : $numpost_query->the_post(); ?>
			
			 <li><a href="<?php the_permalink(); ?>" ></a></li>  
		  <?php endwhile; 
		  echo "</ul>"; 
		endif; 
		echo $after_widget;
	}
}