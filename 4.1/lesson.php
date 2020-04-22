<?php
/********************************************************************
Guide to writing functions in WordPress
********************************************************************/

// a basic function
function rachelmcc_say_hello() {
	
	echo 'Hello World';
	
}


// a pluggable function

if ( ! function_exists( 'rachelmcc_say_hello' ) ) {
	
	function rachelmcc_say_hello() {
	
		echo 'I\'m not in a good mood today, I\'m not going to say hello.';
		
	}
	
}