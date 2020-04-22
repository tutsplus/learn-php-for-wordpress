<?php
/********************************************************************
Guide to writing functions in WordPress
********************************************************************/

// a basic function
function rachelmcc_say_hello() {
	
	echo 'Hello World';
	
}
add_action( 'compass_after_header', 'rachelmcc_say_hello', 20 );

function rmcc_today_date() {
	
	echo date( 'l jS F Y');
	
}
add_action( 'compass_after_header', 'rmcc_today_date', 10 );


// a pluggable function

if ( ! function_exists( 'rachelmcc_grumpy' ) ) {
	
	function rachelmcc_grumpy() {
		
		echo 'I\'m not in a good mood today, I\'m not going to say hello.';
		
	}	
		
}
add_action( 'compass_after_header', 'rachelmcc_grumpy', 30 );


function rachelmcc_register_widgets() {
	
	// Sidebar widget area.
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'rachelmcc' ),
		'id' => 'sidebar-widget-area',
		'description' => __( 'Widget area that appears in the sidebar.', 'rachelmcc' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'rachelmcc_register_widgets' );



echo apply_filters( 'rmcc_new_filter', '<h3>Latest posts</h3>' );

function rmcc_new_heading() {
	
	'<h3>My Latest Posts</h3>'
	
}
add_filter( 'rmcc_new_filter', 'rmcc_new_heading' );