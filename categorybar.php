<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<?php


$classes = get_body_class();
if (in_array('blog',$classes)){
    $is_blog = true;
}

if(is_archive() && 'dpt_portfolio' != get_post_type() or $is_blog == true){
?>

<div class="category-bar col-lg-12">

        <ul class="">
        <div class="category-dropdown"><h3>Category Filter</h3><i class="fa fa-search"></i></div>    
            <?php
        wp_list_categories( array(

            'show_option_all'    => '',
            'orderby'            => 'count',
            'order'              => 'DESC',
            'style'              => 'list',
            'show_count'         => 0,
            'hide_empty'         => 1,
            'use_desc_for_title' => 1,
            'child_of'           => 0,
            'feed'               => '',
            'feed_type'          => '',
            'feed_image'         => '',
            'exclude'            => '',
            'exclude_tree'       => '',
            'include'            => '',
            'hierarchical'       => 0,
            'title_li'           => __( '' ),
            'show_option_none'   => __( 'No categories' ),
            'number'             => 10,
            'echo'               => 1,
            'depth'              => 0,
            'current_category'   => 0,
            'pad_counts'         => 0,
            'taxonomy'           => 'category',
            'walker'             => null
        ));
        ?></ul></div><?php
        }
        ?>