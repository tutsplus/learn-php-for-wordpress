<?php // the Loop for the books archive page
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'book', 'left', 'one-third' ) ); ?>>
  
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				
	<?php if ( has_post_thumbnail() ) { ?>
	
		<a href="<?php the_permalink(); ?>">
	
			<?php the_post_thumbnail( 'medium', array(
				'class' => 'left',
				'alt'	=> get_the_title()
				) );
			?>
		
		</a>
	
	<?php }?>
	
			
	<?php the_excerpt(); ?>
	
	<div class="button"><a href="<?php the_permalink(); ?>">Explore the Book</a></div>
	
</article>