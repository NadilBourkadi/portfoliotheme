<?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
            <?php the_post(); ?>

            <?php $testvariable = ($xyz++%2); ?>           
           
            <?php if ($testvariable == 0): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class="portfolio-entry">
                    <div class="col-lg-12">
                        <h1 class="portfolio-entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark">
                            <?php the_title(); ?></a></h1>
                        <hr>
                    </div>
                
                    
                    <div class="col-lg-3 col-lg-offset-1 image-column">
                        <div class="image-background">
                            <a href="<?php the_permalink(); ?>">
                                <div class="featured-image" style="background-image: url('<?php echo $image[0]; ?>')">
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-7 portfolio-description-container">
                        <div class="portfolio-description"><?php the_excerpt(); ?></div>
                    </div>

                
                </div>
                <?php else: ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            
                <div class="portfolio-entry temporary-odd-entry">
                    <div class="col-lg-12">
                        <h1 class="portfolio-entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                        <hr>
                    </div>

                    <div class="col-lg-7 col-lg-offset-1 portfolio-description-container">
                        <div class="portfolio-description">
                           <?php the_excerpt(); ?>
                        </div>
                    </div>

                    <div class="col-lg-3 image-column">
                        <div class="image-background">
                            <a href="<?php the_permalink(); ?>">
                                <div class="featured-image" style="background-image: url('<?php echo $image[0]; ?>')">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
    <?php endwhile; ?>
<?php else: ?>
    <h1 class="page-title">No Postsd Found</h1>
<?php endif; ?>