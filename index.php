<div id="wrapper">

<?php get_header(); ?>



<div class="main-content">
    <div class="col-lg-12">

        <div class="top-hero">
            <div class="col-lg-12">
                <h1 class="main-title">Blog</h1>
                <h3 class="sub-title">Some posts, lovingly crafted by ya boi.</h3>
            </div>
        </div>

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