<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>


<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h2 class="page-title">
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Archive for <span>%s</span>', 'compass' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Archive for <span>%s</span>', 'compass' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Archive for <span>%s</span>', 'compass' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php post_type_archive_title(); ?>
<?php endif; ?>
			</h2>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts(); ?>

<?php while ( have_posts() ) : the_post(); /* start the loop */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	
	<?php if ( has_post_thumbnail() ) { ?>
				
		<a href="<?php the_permalink(); ?>">
	
			<?php the_post_thumbnail( 'medium', array(
				'class' => 'left',
				'alt'	=> get_the_title()
				) );
			?>
		
		</a>
	
	<?php } ?>
				


	<section class="entry-meta">
			<?php the_date(); ?>
	</section><!-- .entry-meta -->

	<section class="entry-summary">
		<?php the_excerpt(); ?>
	</section><!-- .entry-content -->
</article>


<?php endwhile; /* end the loop*/ ?>

<?php compass_page_links(); /* Display navigation to next/previous pages when applicable */ ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>