<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="search-container">
	<section id="search-primary" class="search-content-area">
		<main id="main" class="site-main" role="main">
		
		<?php if ( have_posts() ) : ?>
		
			<header class="search-page-header">
				<h1 class="search-page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<div class="search-separation-line"> </div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article class="search-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="search-entry-header">
						<?php the_title( sprintf( '<h2 class="search-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

						<?php if ( 'post' === get_post_type() ) : ?>
						
						<?php endif; ?>
						</header><!-- .entry-header -->

						<div class="search-entry-summary">
						<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->

						<a class="search-read-more" href="<?php echo get_permalink();?>"> Read More ⟶</a>

			</article><!-- #post-## -->
			
			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		
		</main><!-- #main -->
		
	</section><!-- #primary -->
	
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
