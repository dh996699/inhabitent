<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<section class="taxonomy-product-container">
		<?php if ( have_posts() ) : ?>

			<header class="taxonomy-page-header">

				<h1 class="taxonomy-title"><?php single_term_title()?></h1>
				<?php
					the_archive_description( '<div class="taxonomy-desc">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="taxonomy-product-item">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
							 <a href=" <?php echo esc_url( get_permalink());?>"><img class="taxonomy-product-img" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>"></a>
							 <?php endif; ?>

						<div class="taxonomy-product-infomation">
								<?php the_title( sprintf( '<p class="taxonomy-product-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
								<p class="taxonomy-prod-price">$<?php echo CFS()->get( 'product_price' ); ?></p>
								<?php if ( 'post' === get_post_type() ) : ?>
						</div>

						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php // the_excerpt(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; ?>

			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
