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

 
           <?php
                // Display featured image
                if ( has_post_thumbnail() ) : ?>

                    <div id="post-media" class="clr">
                        <?php echo do_shortcode('[gallery link="none" orderby="menu_order" columns="0" size="thumbnail" itemtag="li" icontag="div"]'); ?>
                        <?php
                        // Dislpay full featured image
                        // wpex_post_thumbnail( array( 'size'  => 'full', 'alt'   => wpex_get_esc_title(), ) ); ?>
        
                    </div><!-- #post-media -->
<br />
                <?php endif; ?>
        


    <div id="primary" class="content-area clr">
        

        <?php wpex_hook_content_before(); ?>

        <main id="content" class="site-content clr" role="main">

            <?php wpex_hook_content_top(); ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <?php 
                    $bluerock_location = get_post_meta( get_the_ID(), 'bluerock_location', true); 
                    $bluerock_address1 = get_post_meta( get_the_ID(), 'bluerock_address1', true);
                    $bluerock_address2 = get_post_meta( get_the_ID(), 'bluerock_address2', true); 
                    $bluerock_address3 = get_post_meta( get_the_ID(), 'bluerock_address3', true); 
                    $bluerock_address4 = get_post_meta( get_the_ID(), 'bluerock_address4', true); 
                    $bluerock_squarefeet = get_post_meta( get_the_ID(), 'bluerock_squarefeet', true);
                    $bluerock_units = get_post_meta( get_the_ID(), 'bluerock_units', true);
                    $bluerock_yearbuilt = get_post_meta( get_the_ID(), 'bluerock_yearbuilt', true);
                    $bluerock_partner = get_post_meta( get_the_ID(), 'bluerock_partner', true);
                    $bluerock_description = get_post_meta( get_the_ID(), 'bluerock_description', true);
                    $bluerock_highlights = get_post_meta( get_the_ID(), 'bluerock_highlights', true);
                    $bluerock_highlights2 = get_post_meta( get_the_ID(), 'bluerock_highlights2', true);
                ?>
            
            <article class="entry clr">
                 
                     <?php if( ! empty( $bluerock_address1 ) ) { ?>
                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress">
                                <h2 class="property-head">
                                    <?php echo the_title(); ?>
                                </h2>
                                <?php if( ! empty( $bluerock_address1 ) ) { ?>
                                    <span><?php echo $bluerock_address1; ?></span><br />
                                <?php } ?>
                            </span>

                            <?php if( ! empty( $bluerock_address2 ) ) { ?>
                                <span itemprop="addressLocality">
                                    <?php echo $bluerock_address2; ?>,
                                </span>
                            <?php } ?>
                            <?php if( ! empty( $bluerock_address3 ) ) { ?>
                                <span itemprop="addressRegion">
                                    <?php echo $bluerock_address3; ?>
                                </span>
                            <?php } ?>
                            <?php if( ! empty( $bluerock_address4 ) ) { ?>
                                <span itemprop="postalCode">
                                    <?php echo $bluerock_address4; ?>
                                </span>
                            <?php } ?>
                            
                        </div>
                    <?php } ?>
                
                   
                        
                    <?php if( ! empty( $bluerock_squarefeet ) ) { ?>
            <strong>Square Feet:</strong> <?php echo $bluerock_squarefeet; ?>
                    <?php } ?><br />
            <?php if( ! empty( $bluerock_units ) ) { ?>
            <strong>Units:</strong> <?php echo $bluerock_units; ?>
                    <?php } ?><br />
            <?php if( ! empty( $bluerock_yearbuilt ) ) { ?>
            <strong>Year Built:</strong> <?php echo $bluerock_yearbuilt; ?>
                    <?php } ?><br />
            <?php if( ! empty( $bluerock_partner ) ) { ?>
            <strong>Joint Venture Operating Partner:</strong> <?php echo $bluerock_partner; ?><br />
                <?php } ?><br />
            <?php if( ! empty( $bluerock_description ) ) { ?>
                     <?php echo $bluerock_description; ?>
                    <?php } ?><br /><br />
            <h3>Features, Highlights and Amenities</h3>
            <?php if( ! empty( $bluerock_highlights ) ) { ?>
                     <?php echo $bluerock_highlights; ?><br />
                    <?php } ?><br />
            <?php if( ! empty( $bluerock_highlights2 ) ) { ?>
                     <?php echo $bluerock_highlights2; ?><br />
                    <?php } ?><br />
                 <?php the_content(); ?>
                <div class="property-border">
                <?php echo do_shortcode('[pw_map address="'.$bluerock_address1.', '.$bluerock_address2.'"]');?>    
                </div>


                
                   
                </article><!-- .entry -->

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
                comments_template(); ?>

                <?php wpex_hook_content_bottom(); ?>

            <?php endwhile; ?>

        </main><!-- #content -->

        <?php wpex_hook_content_after(); ?>

    </div><!-- #primary -->

   <?php dynamic_sidebar( 'portfolio-sidebar' ); ?>
        
              

</div><!-- .container -->

<?php get_footer(); ?>