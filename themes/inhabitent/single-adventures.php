<?php
/**
 * The template for displaying all single posts.
 * Template Name: Adventures
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="single-advantures-page-container">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="single-advantues-img"> 
						<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
					</div>

					<article class="single-advantues-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="single-advantures-info">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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
