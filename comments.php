<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');

    if ( post_password_required() ) { ?>
        <p>This post is password protected. Enter the password to view comments.</p>
    <?php
        return;
    }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
    <h3 id="comments"><?php comments_number('0 Comments', '1 Comment', '% Comments' );?></h3>

    <ol>
        <?php wp_list_comments('type=comment&callback=format_comment'); //this is the important part that ensures we call our custom comment layout defined above 
                ?>
    </ol>
    <div></div>
    <div>
        <div><?php previous_comments_link() ?></div>
        <div><?php next_comments_link() ?></div>
    </div>
 <?php else : // this is displayed if there are no comments so far ?>

    <?php if ( comments_open() ) : ?>
        <!-- If comments are open, but there are no comments. -->


     <?php else : // comments are closed ?>
        <!-- If comments are closed. -->
        <h3 class="nocomments" id="comments">Comments are closed.</h3>

    <?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

<h3 class="leave-reply"><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

<div>
    <small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><span class="logged-in-as">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></span>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account" class="log-out-link">Log out &raquo;</a></p>

<?php else : //this is where we setup the comment input forums ?>
<div class="col-lg-12">
<p class="input-field-row"><label for="author"><span class="label">Name <?php if ($req) echo "(required)"; ?></span></label><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</p>

<p class="input-field-row"><label for="email"><span class="label">Mail (will not be published) <?php if ($req) echo "(required)"; ?></span></label><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</p>

<p class="input-field-row"><label for="url"><span class="label">Website</span></label><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
</p>
</div>
<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
<div class="col-lg-12">
<p><label for="comment"><span class="label">Message</span></label><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Post" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>
</div>
</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>