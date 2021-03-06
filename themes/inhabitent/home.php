<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<section class="journal-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
<div class="journal">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="journal-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'small' );
			?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="journal-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="journal-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="journal-body">
		<?php the_excerpt(); ?>
		<a class="read-more" href="<?php echo get_permalink();?>"> Read More ⟶</a>
	</div><!-- .entry-content -->
	<div class="continue-read">
</div>
</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

</section>
<?php get_footer(); ?>
