<?php 

// Remove unnecssary scripts from parent theme
// Add custom styles from child theme
function bluerockre_scripts() {
    
    wp_deregister_script( 'wpex-sticky' );
    wp_deregister_script( 'wpex-hoverintent' );
    wp_deregister_script( 'wpex-animsition' );    
    wp_deregister_script( 'wpex-tipsy' );  
    wp_deregister_script( 'wpex-images-loaded' );   
    wp_deregister_script( 'wpex-isotope' );  
    wp_deregister_script( 'wpex-leanner-modal' );  
   
    wp_deregister_script( 'wpex-sliderpro-customthumbnails' );  
    wp_deregister_script( 'wpex-touch-swipe' );  
    wp_deregister_script( 'wpex-owl-carousel' );  
    wp_deregister_script( 'wpex-count-to' );  
    wp_deregister_script( 'wpex-appear' );  
    wp_deregister_script( 'wpex-custom-select' );  
    wp_deregister_script( 'wpex-mousewheel' ); 
    wp_deregister_script( 'wpex-match-height' ); 
    wp_deregister_script( 'wpex-scrolly' ); 
    wp_deregister_script( 'wpex-ilightbox' ); 
    wp_dequeue_style( 'wpa-css' ); // Dequeue admin stylesheet from WP-Attachment Plugin
    wp_dequeue_style( 'wpex-style' ); 
    wp_dequeue_style( 'wpex-responsive' ); 
    wp_enqueue_style ( 'style', get_theme_root_uri() . '/brg/style.css' );
    wp_enqueue_style ( 'brg', get_theme_root_uri() . '/brg/css/brg.css' );
    wp_enqueue_style ( 'responsive', get_theme_root_uri() . '/brg/css/responsive.css' );
    
}
add_action( 'wp_enqueue_scripts', 'bluerockre_scripts', 100 );


// Re-enqueue WP-Attachment Plugin stylesheet as admin only
function wpa_admin_style() {
    wp_enqueue_style ( 'wpa', content_url() . '/plugins/wp-attachment/styles/o/wpa.css' );

}
add_action( 'admin_enqueue_scripts', 'wpa_admin_style' );

// Remove Windows Live Writer tags from the head
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// Remove WP RSS Aggregator Pagination
remove_filter( 'wprss_pagination', 'wprss_pagination_links' );



// Disable Emojis
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

// Remove subheading
function my_remove_author_subheading( $subheading ) {
 
    // Set subheading to empty

        $subheading = '';

    // Return the subheading
    return $subheading;
    
}
add_filter( 'wpex_post_subheading', 'my_remove_author_subheading' );

// Register Investor Sidebar
function brg_investor_sidebar() {
    register_sidebar( array(
        'name' => __( 'Investor Sidebar', 'Bluerockre' ),
        'id' => 'investor-sidebar',
        'description' => __( 'Widgets in this area will be shown on all investor pages.', 'Bluerockre' ),
        'before_widget' => '<aside id="sidebar"><div id="sidebar-inner"><div class="sidebar-box widget_nav_menu ">',
	'after_widget'  => '</div></div></aside>',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>',
    ) );
}

add_action( 'widgets_init', 'brg_investor_sidebar' );

// Register Homepage Sidebar
function brg_home_sidebar() {
    register_sidebar( array(
        'name' => __( 'Homepage Sidebar', 'Bluerockre' ),
        'id' => 'home-sidebar',
        'description' => __( 'Widgets in this area will be shown on the homepage.', 'Bluerockre' ),
        'before_widget' => '<div class="home-widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>',
    ) );
}

add_action( 'widgets_init', 'brg_home_sidebar' );

// Register Portfolio Page Sidebar/Footer
function brg_portfolio_sidebar() {
    register_sidebar( array(
        'name' => __( 'Portfolio Footer', 'Bluerockre' ),
        'id' => 'portfolio-footer',
        'description' => __( 'Widgets in this area will be shown at the bottom of the portfolio pages.', 'Bluerockre' ),
        'before_widget' => '<div class="portfolio-footer">',
	'after_widget'  => '</div>',
	'before_title'  => '',
	'after_title'   => '',
    ) );
}

add_action( 'widgets_init', 'brg_portfolio_sidebar' );




