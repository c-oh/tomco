<?php
/**
*Template Name: single product Page 
 * @package tomco_Theme
 */
get_header(); ?>
	<section id="primary" class="content-area-sp">
		<main id="main" class="site-mainsproduct" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
            <div class= "breadcrumbs">	 <?php the_breadcrumb(); ?> </div>

			<section class="sp-container">
				<div class="sp-thumbnail">
					<?php the_post_thumbnail( 'image1'); ?>
				</div>
				<div class="sp-info">
					<h2 class="single-product-title">
						<?php the_title();?>
					</h2>
					<p class="sp-price">
						<?php echo CFS()->get( 'name' ); ?>
					</p>
					<p class="sp-description" <?php the_content();?> </>
				</div>
			</section>
			<?php
			?>
				<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
	</section>
	<!-- #primary -->
	<?php get_footer(); ?>