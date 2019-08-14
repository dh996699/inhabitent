<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>
                


            <?php endwhile; // End of the loop. ?>
            
		<!-- custom query -->

		<?php $custom_query = new WP_Query('posts_per_page=3');
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <img src=<?php the_post_thumbnail()?>
        <p><?php 
            the_date(); 
            echo ' / ';
            echo get_comments_number();
            echo ' comments';
             ?></p>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

<section class="front-page-shop">

<h2> Shop Stuff </h2>

<?php $arg = [ 
'taxonomy' => 'product-type',
'hide_empty' => true,
];?>
<?php $terms =  get_terms ($arg); ?>

<?php foreach ( $terms as $term ) {
    // echo '<pre>' . var_dump( $term ) . '</pre>';

    $icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg'; }?>
    // var_dump( file_exists( $icon ) );
    // var_dump( $icon );

<div class="front-page-shop-item">

    <?php echo '<img src="' . $icon . '" />'; ?>
    <p> <?php echo $term->description; ?> </p>
    <button class=front-page-do href="<?php echo $term->get_term_link;?>"> <?php echo $term->name; ?> </button>

</div>

?>
</section>
		<!-- custom query end -->



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>