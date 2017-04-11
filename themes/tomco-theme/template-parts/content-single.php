<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
		<div class="title section the-title-section">
			<?php the_title( '<h1 class="entry-title the-entry-title" id="the-entry-titles">', '</h1>' ); ?>
		</div>
		<div class="blog-image-container the-image-container">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</div>
		<div class="product-info">
			<?php the_title('<p class="product-title">'); ?>
			<?php echo CFS()->get( 'name' ); ?>
		</div>

	</article>
	<!-- #post-## -->