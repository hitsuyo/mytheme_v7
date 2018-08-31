<?php
add_action('wp_ajax_load_tuyendung_more', 'load_tuyendung_more');
add_action('wp_ajax_nopriv_load_tuyendung_more', 'load_tuyendung_more');

function load_tuyendung_more()
{
    // ob_start();
    header("Content-Type: text/html");

            echo '<span style="color: #1E90FF; font-weight: bold;">Yêu cầu công việc:</span>';
            echo '<p>– Có tinh thần làm việc nhóm.</p>';
            echo '<p>– Có khả năng làm việc độc lập và nhóm.</p>';
            echo '<p>– Bình tĩnh và tự tin khi xử lý những tình huống khó.</p>';
            echo '<p>– Thân thiện, lịch sự, nhiệt tình giúp đỡ.</p>';
            echo '<p>– Trung thực và đáng tin cậy.</p>';
            echo '<p>– Tiếng anh giao tiếp.</p>';

            echo '<span style="color: #1E90FF; font-weight: bold;">Thời gian làm việc:</span>';
            echo '<p> – Làm việc ít nhất 6h/ngày và 6 ngày/tuần.</p>';
            echo '<p>– Làm việc theo ca:</p>';
            echo '<ul>';
            echo '<li>+ Ca sáng – 8.00 đến 14.30</li>' ;   
            echo '<li>+ Ca chiều – 14.30 đến 21.00</li>' ;   
            echo '</ul>';

            echo '<span style="color: #1E90FF; font-weight: bold;">Địa chỉ gửi hồ sơ:</span>';
            echo '<p>– HN: Tuấn (093.789.1656) – tuanpm@gmail.com</p>';
            echo '<p>– HCM: Hiền (097.456.9396) – hiennt@gmail.com</p>';

            echo '<span>Mọi thắc mắc xin liên hệ: 043.550.1635</span>';

    // die();
}

// -------------------------------------


add_action('wp_ajax_all_ajax_script', 'all_ajax_script');
add_action('wp_ajax_nopriv_all_ajax_script', 'all_ajax_script');




// -----------------------------------

function load_post_by_taxanomy_all_more(){

    header("Content-Type: text/html");
    
    if($terms != 'all'){
        $args = array(
                        'post_type' => 'my_post',
                                            'order'=>'asc',
                                            'orderby'=>'title',
                        'offset' => 8,
                        'posts_per_page' => 8
                        // 'posts_per_page' => wp_count_posts('my_post')->publish
                    );
      }
      else{
          $args = array(
                        'post_type' => 'my_post',
                          'order'=>'asc',
                          'orderby'=>'title',
                          'offset' => 8,
                          'posts_per_page' => 8
                        // 'posts_per_page' => wp_count_posts('my_post')->publish
                      
                    );
      }

	$the_query = new WP_Query( $args );
?>
	<div class="no-container my_post_all_more" style="">
		<div class="row">
			<div class="col s12">
	<?php
				 // The Loop
                 if ( $the_query->have_posts() ) {
                    
                    echo '<ul class="list-my_post ">';
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        
                        echo '<li class="col s12 m6 l3 item-post" style="position: relative;">';
                            echo the_post_thumbnail('thumbnail');
                            echo '<div class="title-post"><a style="color: white; font-weight: bold;  text-shadow: 1px 1px #004A85; width: 68%; z-index: 2;" href="'.get_the_permalink( $post->ID).'">' . get_the_title() . '</a></div>';
                        echo '</li>';
                    }
                    echo '</ul>';
                    wp_reset_postdata();
                } else {
                }
	?>
			</div>
    	</div>

    </div>
    <div class="all_mypost_ajax_more" style="width: 15%; margin: 0 auto;" 
        onclick="load_taxanomy_all_more()"><span style="font-weight: bold; font-size: 2rem; text-decoration: underline; color: #696969;">XEM THÊM CÁC TIN CÒN LẠI<span></div>
    <style>

        #row-my_post{margin-bottom: 0;}
        .post-title {height: 100%;}
        .post-title img {width: 100%; height: auto; }

        ul.list-my_post li img {width: 70%; height: auto; border: 7px solid #F6F6F6;}

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
    
	exit;
}
add_action('wp_ajax_load_post_by_taxanomy_all_more', 'load_post_by_taxanomy_all_more');
add_action('wp_ajax_nopriv_load_post_by_taxanomy_all_more', 'load_post_by_taxanomy_all_more');
