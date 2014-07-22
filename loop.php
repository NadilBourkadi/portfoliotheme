            <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
            <?php the_post(); ?>

            <?php $testvariable = ($xyz++%2); ?>           
           
            <?php if ($testvariable == 0): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured' ); ?>
                <div class="portfolio-entry">
                    <div class="col-lg-12">
                        <h1 class="portfolio-entry-title">
                            <?php the_title(); ?></h1>
                        <hr>
                    </div>
                <div class="row">
                    <a class="zonal" href="<?php the_permalink(); ?>" rel="bookmark"></a>
                    
                    <div class="col-lg-4 col-lg-offset-1 image-column">
                        <div class="image-background" >
                            <a href="">
                                <img class="featured-image" src="<?php echo $image[0]; ?>">
                            </a>
                   
                        </div>
                    </div>
                    <div class="col-lg-6 portfolio-description-container">
                        <div class="portfolio-description"><?php the_excerpt(); ?></div>
                    </div>

                </div>
                </div>
                <?php else: ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured' ); ?>
            
            
                <div class="portfolio-entry temporary-odd-entry">
                    <div class="col-lg-12">
                        <h1 class="portfolio-entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                        <hr>
                    </div>
                    <a class="zonal" href="<?php the_permalink(); ?>" rel="bookmark"></a>

                    <div class="col-lg-6 col-lg-offset-1 portfolio-description-container">
                        <div class="portfolio-description">
                           <?php the_excerpt(); ?>
                        </div>
                    </div>

                    <div class="col-lg-4 image-column">
                        <div class="image-background">
                            <a href="">
                                <img class="featured-image" src="<?php echo $image[0]; ?>">
                            </a>

 
                        </div>
                    </div>
                </div>
                <?php endif; ?>
    <?php endwhile; ?>
<?php else: ?>
    <h1 class="page-title">No Posts Found</h1>
<?php endif; ?>