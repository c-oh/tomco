<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
<div class= "title section the-title-section">
	<?php the_title( '<h1 class="entry-title the-entry-title">', '</h1>' ); ?>
	<p class= "info the-blog-info"> <?php red_starter_posted_on(); ?> <?php red_starter_posted_by(); ?> </p>
	</div>
	<div class= "blog-image-container the-image-container">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</div>

	<div class="blog-entry-content the-entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
