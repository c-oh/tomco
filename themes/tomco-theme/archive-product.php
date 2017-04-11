<?php
/**
 * The template for displaying archive product pages.
 *
 * @package tomco_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			
<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>
				<?php /* Start the Loop */ ?>
						<?php echo do_shortcode( '[wmls name="first" id="2"]' ); ?>
				<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
		</main>
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>