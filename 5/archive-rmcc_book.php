<?php
/**
 * The template for displaying Books Archive pages.
 *
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<h2>Books</h2>

<?php
	
$count = 0;

// first loop
while( have_posts() ) : the_post();

if ( has_term( 'division-bell', 'tutsplus_series' ) ) {
	
	$count +=1;
	
}

endwhile;

//second loop
if ( $count > 0 ) {
	
	rewind_posts(); ?>
	<section class="series">
		<h3>The Division Bell Trilogy</h3>
		
		<?php while( have_posts() ) : the_post();
			
			if( has_term( 'division-bell', 'tutsplus_series' )) {
				
				get_template_part( 'loop', 'book' );
				
			}
			
		endwhile; ?>
		
	</section>
	
<?php }


// third loop
rewind_posts();
$count = 0;

while( have_posts() ) : the_post();

if ( has_term( 'the-village', 'tutsplus_series' ) ) {
	
	$count +=1;
	
}

endwhile;


//fourth loop
if ( $count > 0 ) {
	
	rewind_posts(); ?>
	<section class="series">
		<h3>The Village Trilogy</h3>
		
		<?php while( have_posts() ) : the_post();
			
			if( has_term( 'the-village', 'tutsplus_series' )) {
				
				get_template_part( 'loop', 'book' );
				
			}
			
		endwhile; ?>
		
	</section>
	
<?php }
	
	
// fifth loop
rewind_posts();
$count = 0;

while( have_posts() ) : the_post();

if ( has_term( 'other', 'tutsplus_series' ) ) {
	
	$count +=1;
	
}

endwhile;


//sixth loop
if ( $count > 0 ) {
	
	rewind_posts(); ?>
	<section class="series">
		<h3>Other books, stories and novellas</h3>
		
		<?php while( have_posts() ) : the_post();
			
			if( has_term( 'other', 'tutsplus_series' )) {
				
				get_template_part( 'loop', 'book' );
				
			}
			
		endwhile; ?>
		
	</section>
	
<?php } ?>
	
</div>


<?php get_sidebar('full'); ?>
<?php get_footer(); ?>