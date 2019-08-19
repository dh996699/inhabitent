<?php
/**
 * The template for displaying all single posts.
 * Template Name: Product
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="single-product-page-container">
				<?php while ( have_posts() ) : the_post(); ?>
		
					<article class="single-product-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="single-product-img">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</div><!-- .entry-header -->

						<div class="single-product-info">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<div class="single-product-price">
								$<?php echo CFS()->get( 'product_price' ); ?>
							</div>
							<?php the_content(); ?>
							<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
								'after'  => '</div>',
							) );
							?>

						</div><!-- .entry-content -->
					

					</article><!-- #post-## -->
									
			<?php the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
