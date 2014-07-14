<?php 

function prefix_register_post_type()
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
            'has_archive'   => true,
            'rewrite'       => array(
                'slug' => 'portfolio',
            ),
        )
    );
}

add_action('init', 'dpt_register_post_type');
?>