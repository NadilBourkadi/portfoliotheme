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

</div>

<?php get_footer(); ?>

</div>