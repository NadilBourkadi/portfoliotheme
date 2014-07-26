   <?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>


<?php 
$classes = get_body_class();
if (in_array('blog',$classes)){
    $is_blog = true;
}

if(is_paged() or $is_blog == true){ ?>

<div class="pagination col-lg-12">
    <div class="nav-previous alignleft col-lg-6 col-sm-12"><?php next_posts_link( '<i class="fa fa-chevron-left"></i><span class="older">Older</span>' ); ?></div>
    <div class="nav-next alignright col-lg-6"><?php previous_posts_link( '<span class="newer">Newer</span> <i class="fa fa-chevron-right"></i>' ); ?></div>
</div>
<?php } ?>