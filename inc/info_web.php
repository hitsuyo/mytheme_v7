<?php
function info_web( $wp_customize ) {
 
 $wp_customize->add_section (
 'section_b',
 array(
 'title' => 'Tùy biến thông tin website',
 'description' => 'Tùy chỉnh các thông tin của website',
 'priority' => 25 ));
 

 $wp_customize->add_setting( 'logo' );
 $wp_customize->add_control(
 new WP_Customize_Image_Control( $wp_customize, 'logo', array(
 'label' => 'Logo website',
 'section' => 'section_b',
 'settings' => 'logo'))
 );

$wp_customize->add_setting ('Email', array('default' => '') );
 $wp_customize->add_control ('control_Facebook', array(
 'label' => 'Địa chỉ Email',
 'section' => 'section_b',
 'type' => 'text',
 'settings' => 'Facebook'));
 
 
 $wp_customize->add_setting ('Phone', array('default' => '') );
 $wp_customize->add_control ('control_Facebook', array(
 'label' => 'Số điện thoại',
 'section' => 'section_b',
 'type' => 'text',
 'settings' => 'Facebook'));
 
 }
 add_action( 'customize_register', 'info_web' );