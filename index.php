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

        
        <?php get_template_part('categorybar'); ?>
        


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