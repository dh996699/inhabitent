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
	<section class="product-page-container">

			<header class="page-header">
				 <?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

				<h1> Shop Stuff </h1>
				
					<?php $arg = [ 
					'taxonomy' => 'product-type',
					'hide_empty' => true,
					];?>
					<?php $terms =  get_terms ($arg); ?>
					
					<div class="product-header-list">
						<?php foreach ( $terms as $term ) :
							// echo '<pre>' . var_dump( $term ) . '</pre>';
						?>
						
						<a class="fp-term-link" href="<?php echo get_term_link($term);?>"> 
									<span class="fp-term-name"> <?php echo $term->name;?> </span>
						</a>
						
						<?php endforeach; ?>
					</div>
			</header><!-- .page-header -->



			<section class="archive-product-container">
			
				<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
							 <a href=" <?php echo esc_url( get_permalink());?>"><img class="product-img" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>"></a>
							 <?php endif; ?>

						<div class="product-infomation">
								<?php the_title( sprintf( '<p class="product-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
								<p class="prod-price">$<?php echo CFS()->get( 'product_price' ); ?></p>
								<?php if ( 'post' === get_post_type() ) : ?>
						</div>

						<div class="entry-meta">
							<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php // the_excerpt(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

				<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</section>

		<!-- custom query -->

		<!-- <?php $custom_query = new WP_Query('cat=-1');
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?> -->




		<!-- custom query end -->
</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
