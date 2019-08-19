<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<section class="front-page-container">
<div class="front-banner"> </div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>
                


            <?php endwhile; // End of the loop. ?>
            
		<!-- custom query -->
        
                <h2> Shop Stuff </h2>
                <section class="front-page-shop">
                        <?php $arg = [ 
                        'taxonomy' => 'product-type',
                        'hide_empty' => true,
                        ];?>
                        <?php $terms =  get_terms ($arg); ?>
                        
                        <?php foreach ( $terms as $term ) :
                            // echo '<pre>' . var_dump( $term ) . '</pre>';
                                    echo '<div class="front-page-shop-item">';
                                    $icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';?>
                                        <?php echo '<img class="fp-term-img" src="' . $icon . '" />'; ?>
                                        <p class="fp-term-desc"> <?php echo $term->description; ?> </p>
                                        <a class="fp-term-link" href="<?php echo get_term_link($term);?>"> 
                                            <span class="fp-term-name"> <?php echo $term->name; echo ' Stuff'?> </span>
                                        </a>
                                    </div>
                        <?php endforeach; ?>
                
                </section>


        <section class="front-page-journal">         
                    
                    <h2> Inhabitent Journal </h2>
        
                    <div class="front-page-journal-container"> 
                    <?php $custom_query = new WP_Query('posts_per_page=3');
                    while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        
                        <div class="front-page-journal-item"> 
                            <div class="<?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <img class="fp-journal-img" src=<?php the_post_thumbnail()?>
                                    <div class="fp-journal-item-meta">
                                        <p class="fp-journal-comment"><?php 
                                            the_date(); 
                                            echo ' / ';
                                            echo get_comments_number();
                                            echo ' comments';
                                            ?></p>
                                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                        <p><a  class="fp-journal-readmore" href="<?php the_permalink(); ?>">Read Entry</a></p>
                                    </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    </div>

        </section>
<?php wp_reset_postdata(); // reset the query ?>


		<!-- custom query end -->



		</main><!-- #main -->
    </div><!-- #primary -->
    </section>
<?php get_footer(); ?>