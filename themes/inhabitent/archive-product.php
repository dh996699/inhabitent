<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
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
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<!-- custom query -->

		<?php $custom_query = new WP_Query('cat=-1');
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>




		<!-- custom query end -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
