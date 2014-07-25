            <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
            <?php the_post(); ?>
            

            <?php $testvariable = ($xyz++%2); ?>           
           
            <?php if ($testvariable == 0): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured' ); ?>
                <div class="portfolio-entry">
                    <div class="col-lg-12">
                        <h1 class="portfolio-entry-title">
                            <a class="zonal" href="<?php the_permalink(); ?>" rel="bookmark"></a>
                            <?php the_title(); ?></h1>
                        <hr>
                    </div>
                
                    
                    
                    <div class="col-lg-3 col-lg-offset-1 featured-image-container">
                        <a class="col-lg-12" href="<?php the_permalink(); ?>">
                        <div class="featured-image" style="background-image: url('<?php echo $image[0]; ?>')">
                        
                        </div>
                        </a>

                        <div class="col-lg-12 post-meta-container">
                            <p>by <span class="post-meta-author"><?php the_author(); ?></span></p>
                            <p>at <span class="post-meta-time"><?php the_time(); ?>, </span><span class="post-meta-date"><?php the_date(); ?></span></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-7  portfolio-description-container">
                        <div class="portfolio-description">
                        <h2 class="subtitle"><?php the_secondary_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <p class="read-more">
                           <a href="<?php the_permalink(); ?>">Read More</a>
                        </p>
                        </div>

                    </div>

                </div>
                <?php else: ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured' ); ?>
            
            
                <div class="portfolio-entry temporary-odd-entry">
                    <div class="col-lg-12">
                        <a class="zonal" href="<?php the_permalink(); ?>" rel="bookmark"></a>
                        <h1 class="portfolio-entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                        <hr>
                    </div>

                    <div class="col-lg-7 col-lg-offset-1 portfolio-description-container">
                        <div class="portfolio-description">
                            <h2 class="subtitle"><?php the_secondary_title(); ?></h2>
                           <?php the_excerpt(); ?>
                           <p class="read-more">
                           <a href="<?php the_permalink(); ?>">Read More</a>
                           </p>
                        </div>
                    </div>
                    <div class="col-lg-3 featured-image-container">
                        <a class="col-lg-12" href="<?php the_permalink(); ?>">
                            <div class="featured-image" style="background-image: url('<?php echo $image[0]; ?>')">
                        
                            </div>
                        </a>

                        <div class="col-lg-12 post-meta-container">
                            <p>by <span class="post-meta-author"><?php the_author(); ?></span></p>
                            <p>at <span class="post-meta-time"><?php the_time(); ?>, </span><span class="post-meta-date"><?php the_date(); ?></span></p>
                        </div>
                    </div>

                </div>
                <?php endif; ?>

    <?php endwhile; ?>
<?php else: ?>
    <h1 class="page-title">No Posts Found</h1>
<?php endif; ?>