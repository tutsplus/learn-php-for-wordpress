<?php
	
	/* 
		echoing out text and more
	*/
	
// simple echo
echo 'Hello World';

// using a template tag
echo get_the_title();
the_title();

// echoing html
<?php get_header(); ?>
<?php // loop opens	?>
<article ID="<?php the_ID(); ?>">
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
</article>	
<?php // loop closes ?>
<?php get_sidebar(); ?>
	
<?php // alternative using echo ?>
<?php 
get_header();
// loop opens
echo '<article ID="' . get_the_ID() . '">';
	echo '<h2>' . get_the_title() . '</h2>';
	the_content();
echo '</article>';	
// loop closes
get_sidebar(); 



// internationalization
_e( 'Hello World', 'rmcc' );

// including variables and text - using echo

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

// including variables and text - not using echo

function rmcc_get_pages() {
	
	$args = array(
		'parent' => 0;
		'sort_order' => ASC,
		'sort_column' => 'menu_order'
	);
	
	$mypages = get_pages( $args ); ?>
	
	<ul class="pagelist">
	
		<?php foreach ( $mypages as $mypage ) { ?>
			
			<li>
				<a href="<?php echo get_page_link( $mypage->ID ); ?>">
					<?php echo mypage->post_title; ?>
				</a>
			</li>
			
		<?php } ?>
	
	</ul>
	
<?php }

