<div id="wrapper">

<?php get_header(); ?>



<div class="main-content">
    <div class="col-lg-12">

        <div class="top-hero">


            <div class="col-lg-12">
                <h1 class="main-title"><?php  
                    if ( have_posts() ){
                        the_post();
                        if (get_queried_object()->name == ''){ 
                            echo "Blog";
                            rewind_posts(); 
                        }
                        elseif(is_category()){
                            $category = get_the_category(); 
                            echo $category[0]->cat_name;
                        }
                        else{
                            $post_type = get_post_type( $post->ID );
                            echo post_type_archive_title();
                        }
                        rewind_posts(); 
                    }
                ?></h1>
                <h3 class="sub-title">This is a filler sentence to see how it looks.</h3>



            </div>
        </div>
               <?php

        $classes = get_body_class();
        if (in_array('blog',$classes)){
            $is_blog = true;
        }

        if(is_archive() && 'dpt_portfolio' != get_post_type() or $is_blog == true){
        ?>
        
        <div class="category-bar col-lg-12">

        <ul class="">
            <h3>Filter by category:</h3>
            <?php
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
            'hierarchical'       => 0,
            'title_li'           => __( '' ),
            'show_option_none'   => __( 'No categories' ),
            'number'             => 15,
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
        


        <?php 
        if( get_post_type( get_the_ID()) == 'dpt_portfolio'){
            get_template_part('loop', 'dpt_portfolio');
        }
        else{
            get_template_part('loop', 'index');
        }
        ?>



    </div>



    <div class="pagination col-lg-12">
        <div class="nav-previous alignleft col-lg-6 col-sm-12"><?php next_posts_link( '<i class="fa fa-chevron-left"></i><span class="older">Older</span>' ); ?></div>
        <div class="nav-next alignright col-lg-6"><?php previous_posts_link( '<span class="newer">Newer</span> <i class="fa fa-chevron-right"></i>' ); ?></div>
    </div>
</div>

    
<?php get_footer(); ?>

</div>