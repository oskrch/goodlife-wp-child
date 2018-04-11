
<?php
/*
*   
* TGB: Added two sidebars
* April 11, 2019
* Middle_banner
* Header_banner
*/

function thb_register_sidebars_tbg() {

	register_sidebar(array('name' => esc_html__('Header_banner', 'goodlife'), 'id' => 'header_banner', 'description' => esc_html__('Header - banner column', 'goodlife'), 'before_widget' => '<div id="%1$s" class="widget cf %2$s">', 'after_widget' => '</div>', 'before_title' => '<strong>', 'after_title' => '</strong>'));

	register_sidebar(array('name' => esc_html__('Middle_banner', 'goodlife'), 'id' => 'middle_banner', 'description' => esc_html__('Middle - banner column', 'goodlife'), 'before_widget' => '<div id="%1$s" class="widget cf %2$s">', 'after_widget' => '</div>', 'before_title' => '<strong>', 'after_title' => '</strong>'));
	
}

add_action( 'widgets_init', 'thb_register_sidebars_tbg' );
