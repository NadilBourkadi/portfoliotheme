<div id="wrapper">

<?php get_header(); ?>



    <div class="main-content">
        <div class="col-lg-12">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="top-hero">
                <div class="col-lg-8">
                    <h1 class="main-title"><a href="<?php the_permalink() ?>" rel="bookmark"> <?php the_title(); ?> </a></h1>
                    <div class="tags"><?php the_tags('', '<div class="sep"> //  </div>', ''); ?></div>
                </div>
                <?php if ( has_post_thumbnail() ) { ?> 
      
                <div class="col-lg-4 image-column">
                    <div class="image-background">
                        <a href="">
                            <?php the_post_thumbnail('featured'); ?>
                        </a>
                    </div>
                </div>
            <?php } ?>
            </div>

            
        
        <?php endwhile; ?>
        <?php else : ?>
    <h6 class="center">Not Found</h6>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>

        <div class="portfolio-entry article-body">
           
        
        
            <div class="col-lg-12 portfolio-description-container">
                <div class="portfolio-description"><?php the_content(); ?></div>
            </div>

        
        </div>



        </div>
    </div>



<?php get_footer(); ?>

</div>
