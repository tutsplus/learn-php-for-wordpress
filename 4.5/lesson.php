<?php
	
	/* 
		working with variables
	*/
	
// a simple text variable
$message = 'Hello World';
echo $message;

// using a variable with a function
$date = date( 'l jS F Y' );
echo $date;

// using variables to store results of a database call
$args = array(
		'parent' => 0;
		'sort_order' => ASC,
		'sort_column' => 'menu_order'
	);
	
$mypages = get_pages( $args );

if ( $mypages ) {
	
	
	echo '<ul class="pages">';
	
		foreach $mypages as $mypage {
			
			$mypageID = $mypage->ID;
			
			echo '<li><a href="' . get_page_link( $mypageID ) . '">' . $mypage->post_title . '</a></li>';
			
		}
		
	echo '</ul>';
	
}

// putting it all together - can only run in the loop
$message = 'Hello everybody';
//$date = date( 'l jS F Y' ); // commented as this has already been set eralier in the file so you don't have to repeat it
$mood = get_post_meta( get_the_ID(), 'mood', true );

echo $message . ', today\'s date is ' . $date . ' and I\'m feeling ' $mood '.';


// putting it all together v2
$args = array(
		'posts_per_page' => 5
	);
	
$myposts = get_posts( $args );

if ( $myposts ) {	
	
	$message = 'Hello everybody';
	 
	
	echo '<ul class="posts">';
	
		foreach $myposts as $mypost {
			
			$mypostID = $mypost->ID;
			$mood = get_post_meta ( $mypostID, 'mood', true );
			$date = get_the_date( 'l jS F Y', $mypostID );
			
			echo '<li>' .  $message . ', I wrote this post on ' . $date . ' and was feeling ' $mood '.</li>';
			
		}
		
	echo '</ul>';
	
}

