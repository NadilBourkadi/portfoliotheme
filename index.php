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
                <h3 class="sub-title">Filter by <span class="toggle-on" href="">Tag</span> / <span class="toggle-on" href="">Category</span></h3>



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



    


<?php get_template_part('paginationbar'); ?>
 
</div>

    
<?php get_footer(); ?>

</div>