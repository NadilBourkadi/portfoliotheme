<div id="wrapper">

<?php get_header(); ?>



<div class="main-content">
    <div class="col-lg-12">

                <div class="top-hero">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1 class="main-title">Portfolio</h1>
                        <h3 class="sub-title">Some webs, lovingly crafted by ya boi.</h3>
                    </div>
                </div>

            <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
            <?php the_post(); ?>

            <?php $testvariable = ($xyz++%2); ?>           
           
            <?php if ($testvariable == 0): ?>
                <div class="portfolio-entry">
                    <div class="col-lg-12">
                        <h1 class="portfolio-entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark">
                            <?php the_title(); ?></a></h1>
                        <hr>
                    </div>
                <div class="row">
                    
                    <div class="col-lg-4 col-lg-offset-1 image-column">
                        <div class="image-background">
                            <a href="">
                                <img src="http://lorempixel.com/g/1500/857/">
                            </a>
                            <div class="image-selector-container">
                                <div class="image-selector"></div>
                                <div class="image-selector"></div>
                                <div class="image-selector"></div>
                                <div class="image-selector"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 portfolio-description-container">
                        <div class="portfolio-description"><?php the_excerpt(); ?></div>
                    </div>

                </div>
                </div>
                <?php else: ?>
            
            
                <div class="portfolio-entry temporary-odd-entry">
                    <div class="col-lg-12">
                        <h1 class="portfolio-entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                        <hr>
                    </div>

                    <div class="col-lg-6 col-lg-offset-1 portfolio-description-container">
                        <div class="portfolio-description">
                           <?php the_excerpt(); ?>
                        </div>
                    </div>

                    <div class="col-lg-4 image-column">
                        <div class="image-background">
                            <a href="">
                                <img src="http://lorempixel.com/n/1500/857/">
                            </a>

                            <div class="image-selector-container">
                                    <div class="image-selector"></div>
                                    <div class="image-selector"></div>
                                    <div class="image-selector"></div>
                                    <div class="image-selector"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
    <?php endwhile; ?>
<?php else: ?>
    <h1 class="page-title">No Posts Found</h1>
<?php endif; ?>


</div>

</div>

<?php get_footer(); ?>

</div>