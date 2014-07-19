<div id="wrapper">

<?php get_header(); ?>



    <div class="main-content">
        <div class="col-lg-12">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="top-hero">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1 class="main-title"><a href="<?php the_permalink() ?>" rel="bookmark"> <?php the_title(); ?> </a></h1>
                </div>
            </div>

            
        
        <?php endwhile; ?>
        <?php else : ?>
    <h6 class="center">Not Found</h6>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>

        <div class="portfolio-entry">
           
        
        <?php if ( has_post_thumbnail() ) { ?> // check if the post has a Post Thumbnail assigned to it.
      
            <div class="col-lg-4 col-lg-offset-4 image-column">
                <div class="image-background">
                    <a href="">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <div class="image-selector-container">
                        <div class="image-selector"></div>
                        <div class="image-selector"></div>
                        <div class="image-selector"></div>
                        <div class="image-selector"></div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-lg-12 portfolio-description-container">
                <div class="portfolio-description"><?php the_content(); ?></div>
            </div>

        
        </div>



        </div>
    </div>



<?php get_footer(); ?>

</div>
