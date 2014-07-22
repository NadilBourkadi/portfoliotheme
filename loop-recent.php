<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<div class="col-lg-12 related-heading-container"><h3>Recent</h3></div>
    <div class="col-lg-12 related-posts-container">
        
            

            <?php
            $recentposts = get_posts('numberposts=4');
            foreach ($recentposts as $post) :
            setup_postdata($post); ?>
         
            <a href="<?php the_permalink() ?>"> 
                <div class="col-lg-3 popular-post-entry"> 
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    ?>
                    <div class="popular-post-image-container" style="background-image: url('<?php echo $image[0]; ?>'); ">
                        <div class="opacity-cover"></div>
                        <figcaption><?php the_title(); ?></figcaption>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
            <?php wp_reset_query(); ?>

        </div>