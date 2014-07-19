<?php

add_theme_support( 'post-thumbnails' ); 
add_image_size('featured', 500, 250, true);
add_image_size( 'single-post-thumbnail', 1600, 300 );

// Register style sheet.



function register_dils_portfolio_styles() {
    wp_register_style( 'dils-portfolio-main-styles', get_template_directory_uri() . '/css/main-styles.css'  );
    wp_register_style( 'dils-portfolio-bootstrap', get_template_directory_uri() . '/css/bootstrap.css'  );
    wp_register_style( 'dils-portfolio-bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css'  );
    wp_register_style( 'dils-portfolio-footer', get_template_directory_uri() . '/css/footer.css'  );
    wp_register_style( 'dils-portfolio-mixins', get_template_directory_uri() . '/css/mixins.css'  );
    wp_register_style( 'dils-portfolio-portfolio-entry', get_template_directory_uri() . '/css/portfolio-entry.css'  );
    wp_register_style( 'dpt_single-styles', get_template_directory_uri() . '/css/single.css');
}
add_action( 'wp_enqueue_scripts', 'register_dils_portfolio_styles' );


function enqueue_dils_portfolio_styles(){

    wp_enqueue_style( 'dils-portfolio-main-styles' );
    wp_enqueue_style( 'dils-portfolio-bootstrap');
    wp_enqueue_style( 'dils-portfolio-bootstrap-theme'  );
    wp_enqueue_style( 'dils-portfolio-footer');
    wp_enqueue_style( 'dils-portfolio-mixins');
    wp_enqueue_style( 'dils-portfolio-portfolio-entry'  );
    wp_enqueue_style('dpt_single-styles');
}
add_action( 'wp_enqueue_scripts', 'enqueue_dils_portfolio_styles' );







function dpt_register_post_type()
{
    register_post_type(
        'dpt_portfolio',
        array(
            'labels'        => array(
                'name'               => __('Portfolio', 'text_domain'),
                'singular_name'      => __('Portfolio', 'text_domain'),
                'menu_name'          => __('Portfolio', 'text_domain'),
                'name_admin_bar'     => __('Portfolio Item', 'text_domain'),
                'all_items'          => __('All Items', 'text_domain'),
                'add_new'            => _x('Add New', 'dpt_portfolio', 'text_domain'),
                'add_new_item'       => __('Add New Item', 'text_domain'),
                'edit_item'          => __('Edit Item', 'text_domain'),
                'new_item'           => __('New Item', 'text_domain'),
                'view_item'          => __('View Item', 'text_domain'),
                'search_items'       => __('Search Items', 'text_domain'),
                'not_found'          => __('No items found.', 'text_domain'),
                'not_found_in_trash' => __('No items found in Trash.', 'text_domain'),
                'parent_item_colon'  => __('Parent Items:', 'text_domain'),
            ),
            'public'        => true,
            'menu_position' => 5,
            'supports'      => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'custom-fields',
            ),
            'taxonomies'    => array(
                'dpt_portfolio_categories',
            ),
            'has_archive'   => 'portfolio',
            'rewrite'       => array(
                'slug' => 'portfolio',
            ),
        )
    );
}

add_action('init', 'dpt_register_post_type');
// http://tutsmix.com/how-to-create-custom-post-types-and-taxonomies-in-wordpress/ see this article


add_action('init', 'do_output_buffer');
function do_output_buffer() {
        ob_start();
}

?>