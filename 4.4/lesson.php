<?php
	
	/*
	The Loop
	*/
	
// standard loop

if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php the_content(); ?>
		
	</article>
	
<?php endwhile() : endif(); 
	
	
// nonstandard loop

function rmcc_get_pages() {
	
	$args = array(
		'parent' => 0;
		'sort_order' => ASC,
		'sort_column' => 'menu_order'
	);
	
	$mypages = get_pages( $args );
	
	echo '<ul class="pagelist">';
	
		foreach ( $mypages as $mypage ) {
			
			echo '<li><a href="' . get_page_link( $mypage->ID ) . '">' . $mypage->post_title . '</a></li>';
			
		}
	echo '</ul>';
	
}