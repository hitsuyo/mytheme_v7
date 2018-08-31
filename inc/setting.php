<?php

// function bbloomer_remove_sidebar_product_pages() {

// if ( is_product() ) {

//     remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

//     }

// }

// add_action( 'wp', 'bbloomer_remove_sidebar_product_pages' );

 

function bbloomer_remove_storefront_sidebar() {

    if ( is_product() ) {

        remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );

    }

}

// add_action( 'get_header', 'bbloomer_remove_storefront_sidebar' );

/*------------------------------------------------*/



function theme_slug_custom_meta_box() {

    add_meta_box( 'ABC', esc_html__( 'ABC', 'theme-textdomain' ), 'theme_slug_team_designation', array( 'book' ) ); 

    add_meta_box( 'Checkbox', esc_html__( 'Size', 'theme-textdomain' ), 'cd_meta_box_cb', array( 'book' ) );

}

 

add_action( 'add_meta_boxes', 'theme_slug_custom_meta_box' );



function theme_slug_team_designation( $post ) {

    $team_designation     = get_post_custom( $post -> ID );

    $team_designation_box = isset( $team_designation[ 'ABC' ] ) ? esc_attr( $team_designation[ 'ABC' ][ 0 ] ) : '';

 

    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    ?>

 

    <p>

        <input type="text" class="widefat" name="ABC" id="abc" value="<?php echo $team_designation_box; ?>"/>

    </p>

    <?php

}

function cd_meta_box_cb()
{

    // $post is already set, and contains an object: the WordPress post

    global $post;

    $values = get_post_custom( $post->ID );

    $text = isset( $values['my_meta_box_text'] ) ? $values['my_meta_box_text'] : '';

    $selected = isset( $values['my_meta_box_select'] ) ? esc_attr( $values['my_meta_box_select'] ) : '';

    $check = isset( $values['my_meta_box_check'] ) ? esc_attr( $values['my_meta_box_check'] ) : '';

     

    // We'll use this nonce field later on when saving.

    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    ?>

    <!-- <p>

        <label for="my_meta_box_text">Text Label</label>

        <input type="text" name="my_meta_box_text" id="my_meta_box_text" value=" php echo $text; ?>" />

    </p> -->

     

    <p>

        <label for="my_meta_box_select">Size</label>

        <select name="my_meta_box_select" id="my_meta_box_select">

            <option value="S" <?php selected( $selected, 's' ); ?>>S</option>

            <option value="M" <?php selected( $selected, 'm' ); ?>>M</option>

            <option value="L" <?php selected( $selected, 'l' ); ?>>L</option>

        </select>

        <label>Giá trị sẽ được lưu khi bạn bấm "Cập nhật"</label>

    </p>

     

    <p>

        <input type="checkbox" id="my_meta_box_check" name="my_meta_box_check" <?php checked( $check, 'on' ); ?> />

        <label for="my_meta_box_check">Do not check this</label>

    </p>

    <?php    

}



function theme_slug_meta_save( $post_id ) {

    // Return/Bail out if doing autosave

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {return;}

 

    // Checking if the nonce isn't there, or we can't verify it, then we should return

    if ( ! isset( $_POST[ 'meta_box_nonce' ] ) || ! wp_verify_nonce( $_POST[ 'meta_box_nonce' ], 'my_meta_box_nonce' ) ) {return;}

 

    // Checking if the current user can't edit this post, then we should return

    if ( ! current_user_can( 'edit_posts' ) ) {return;}

 

    // Saving the data in meta box

    // Saving the team designation in the meta box

    if ( isset( $_POST[ 'abc' ] ) ) {

        update_post_meta( $post_id, 'ABC', sanitize_text_field( $_POST[ 'abc' ] ) ); 

    }



    if ( isset( $_POST[ 'my_meta_box_select' ] ) ) {

        update_post_meta( $post_id, 'Size', sanitize_text_field( $_POST[ 'my_meta_box_select' ] ) ); 

    }



    // if ( isset( $_POST[ 'my_meta_box_select' ] ) ) {

    //     update_post_meta( $post_id, 'Kích thước', sanitize_text_field( $_POST[ 'my_meta_box_select' ] ) ); 

    // }

}

 

add_action( 'save_post', 'theme_slug_meta_save' );

/*--------------------------*/



register_nav_menus(

    array(

        'my-main-menu' => __('Menu chính'),

        'my-main-menu-demo' => __('Menu Demo'),

        'footer-nav-1' => __('Menu chan trang 1'),

        'footer-nav-2' => __('Menu chan trang 2')

        )

);
