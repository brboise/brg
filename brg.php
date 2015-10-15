<?php
/**
 * Template Name: brghome
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

    <div id="content-wrap" class="home clr">

 
       
        


    <div id="primary" class="clr">
        

   

        <main id="content" class="site-content clr" role="main">
    
            <?php the_content(); ?>
          <br />
            <div class="brgholder">
            <div class="brgnews">
      
         
                
                
                <?php dynamic_sidebar( 'home-sidebar' ); ?>
                
                
                <div><a href="<?php get_site_url(); ?>/news/">View More...</a>            
                
                
                </div>
                </div></div>
    </main>
       

        <?php wpex_hook_content_after(); ?>

    </div><!-- #primary -->



</div><!-- .container -->

<?php get_footer(); ?>
