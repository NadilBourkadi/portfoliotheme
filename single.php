<div id="wrapper">

<?php get_header(); ?>








    <div class="main-content">
        <div class="col-lg-12">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
       

            <?php if (has_post_thumbnail( $post->ID )) : ?>
            <div class="top-hero thumbnail-is-present">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="featured-image-container" style="background-image: url('<?php echo $image[0]; ?>')"></div>
            <?php else: ?>
            <div class="top-hero">
            <?php endif; ?>

          
                <div class="col-lg-12">
                    <h1 class="main-title"><a href="<?php the_permalink() ?>" rel="bookmark"> <?php the_title(); ?> </a></h1>
                    
                    <div class="tags"><?php the_tags('', '<div class="sep"> //  </div>', ''); ?></div>
                    <div class="author-box">


                    <p class="author-text"><?php the_time('F j, Y'); ?>, <?php the_time(); ?> by <a href=""><?php the_author(); ?></a></h1>
                    
                    </div>
                </div>
              
    
          
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

    <?php get_template_part( 'loop', 'recent' ); ?>
    

    <div class="col-lg-12 comments-container">
        <?php comments_template(); ?>
    </div>

    </div>
   



<?php get_footer(); ?>

</div>
