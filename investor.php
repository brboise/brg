<?php
/**
 * Template Name: Investor
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

        <?php wpex_hook_primary_before(); ?>

        <div id="primary" class="content-area clr" style="min-height:1200px;">

            <?php wpex_hook_content_before(); ?>

            <div id="content" class="clr site-content" role="main">

                <?php wpex_hook_content_top(); ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <article class="entry-content entry clr">

                        <?php the_content(); ?>

                    </article><!-- #post -->

                 <?php endwhile; ?>

                <?php get_template_part( 'partials/post-edit' ); ?>

                <?php wpex_hook_content_bottom(); ?>

            </div><!-- #content -->

            <?php wpex_hook_content_after(); ?>

        </div><!-- #primary -->
   <?php dynamic_sidebar( 'investor-sidebar' ); ?>

    </div><!-- #content-wrap -->

<?php
// Get site footer
get_footer(); ?>