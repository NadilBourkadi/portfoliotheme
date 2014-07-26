

<body <?php body_class($class); ?>>

<header class="topbar col-lg-12">
    <div class="col-lg-6 col-md-6 col-xs-12  col-sm-6">
        <h3>
            <em>Nadil Bourkadi</em>, Designer and Developer
        </h3>
    </div>

    
<!--         <ul>
            <a href="/wordpress/about/">
                <li>About</li>
            </a>
            <a href="/wordpress/portfolio/">
                <li>Portfolio</li>
            </a>
            <a href="/wordpress/">
                <li>Blog</li>
            </a>

            
 
        </ul> -->
        <?php wp_head(); ?>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        
        <?php wp_nav_menu(array(
            'theme-location' =>  'top-menu-nav',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'col-lg-6 col-md-6 col-sm-6 col-xs-12',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s <div style="clear: both"></div></ul>',
            'depth'           => 0,
            'walker'          => ''
        )); ?>
        <div style="clear: both"></div>
        


</header>
<header class="category-bar">
<?php

$classes = get_body_class();
if (in_array('blog',$classes)){
    $is_blog = true;
}

if(is_archive() && 'dpt_portfolio' != get_post_type() or $is_blog == true){
wp_list_categories( array(
    'show_option_all'    => '',
    'orderby'            => 'count',
    'order'              => 'DESC',
    'style'              => 'list',
    'show_count'         => 1,
    'hide_empty'         => 1,
    'use_desc_for_title' => 1,
    'child_of'           => 0,
    'feed'               => '',
    'feed_type'          => '',
    'feed_image'         => '',
    'exclude'            => '',
    'exclude_tree'       => '',
    'include'            => '',
    'hierarchical'       => 1,
    'title_li'           => __( 'Categories' ),
    'show_option_none'   => __( 'No categories' ),
    'number'             => 15,
    'echo'               => 1,
    'depth'              => 0,
    'current_category'   => 0,
    'pad_counts'         => 0,
    'taxonomy'           => 'category',
    'walker'             => null
));
}
?>
</header>

