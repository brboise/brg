<?php
/**
 * The Template for displaying all portfolio posts.
 *
 * @package     Total
 * @subpackage  Templates
 * @author      Alexander Clarke
 * @copyright   Copyright (c) 2015, WPExplorer.com
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 * @version     2.1.0
 */
get_header(); ?>

    <div id="content-wrap" class="container clr">
        <div id="primary" class="clr">
        

        <?php wpex_hook_content_before(); ?>

        <main id="content" class="site-content clr" role="main">

   <?php wpex_hook_content_top(); ?>
            
         
            
            <?php   global $query_string;
                    query_posts( $query_string . '&orderby=title' . '&order=ASC' . '&post_status=publish' . '&showposts=-1' ); 
            ?>
            
             <div class="property-list">
                 <?php $counter =0; ?>
                 <?php $counter2 =0; ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php
                  ++$counter;
                  if($counter == 3) {
                        $postclass = 'property end';
                        $counter = 0;
                  } 
                  else { $postclass = 'property'; }
                 ?>
                 <?php
                  ++$counter2;
                  if($counter2 == 3) {
                        $postclass2 = '<div class="clear"></div>';
                        $counter2 = 0;
                  } 
                  else { $postclass2 = ''; }
                 ?>
            <?php $bluerock_highlights3 = get_post_meta( get_the_ID(), 'bluerock_highlights3', true); ?>
                <div id="post-<?php the_ID(); ?>" class="<?php echo $postclass; ?>">
             
                 <a href="<?php echo get_permalink(); ?>" class="propertylink">
                    <?php the_post_thumbnail( 'brg-portfolio-thumby' ); ?>
                            <h2 class="property-heading">
                                <?php the_title(); ?> 
                            </h2><!-- .single-post-title -->
                                    <div class="property-location">
                                        <?php $bluerock_location = get_post_meta( get_the_ID(), 'bluerock_location', true); ?>
                                        <?php echo $bluerock_location; ?>

                                    </div>
                </a>
                  

                                <?php
                                // Link pages when using <!--nextpage-->
                                wp_link_pages( array(
                                    'before'        => '<div class="page-links clr">',
                                    'after'         => '</div>',
                                    'link_before'   => '<span>',
                                    'link_after'    => '</span>',
                                ) );

                                // get_template_part( 'partials/social', 'share' ); // Social sharing links - disabled by default

                                // Get the post comments & comment_form
                             ?>

                                <?php wpex_hook_content_bottom(); ?>
                 </div> <?php echo $postclass2; ?>
                 
            <?php endwhile; ?>
            <div class="clear"></div>
              <?php wpex_pagination(); ?>
            </div>
        </main><!-- #content -->

        <?php wpex_hook_content_after(); ?>

    </div><!-- #primary -->

        
              

</div><!-- .container -->

<div class="portfolio-footer-wrap">
    <?php dynamic_sidebar( 'portfolio-footer' ); ?>
</div>

<?php get_footer(); ?>