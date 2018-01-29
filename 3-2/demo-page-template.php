<?php
/******************************************************************
	* Template Name : Demo Page Template
	* The template for displaying demo pages
	* Accompanies part 3.2 of tuts+ course on PHP and WordPress
******************************************************************/

get_header();

if( have_posts() ) {
	
	while( have_posts() ) {
		
		the_post();
		
		//method 1 for adding html - by closing php tags
		?>
	
		<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
	
	<?php	
		
		// method 2 for adding html - by echoing out the markup
		echo '<article id="' . the_ID() . '"' . post_class() . '>';
			the_content();
		echo '</article>';
	}
	
}
else {
	// what happens if there are no posts
}

get_sidebar();
get_footer();