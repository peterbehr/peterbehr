<?php get_header(); ?>

<?php while ( have_posts() ) : the_post() ?>

<p class="heading" style="font-weight: 900; margin-bottom: 20px;">
    <?php the_title(); ?>
</p>

<div class="image">

<?php

$args = array(  'post_type' => 'attachment',
                'posts_per_page' => -1,
                'post_status' => null,
                'post_parent' => $post->ID
            ); 

$attachments = get_posts($args);

if ($attachments) {
    //foreach ($attachments as $attachment) {
        echo(wp_get_attachment_image($attachments[0]->ID, 'full'));
    //}
}

?>

</div>

<div class="text">
<?php the_content(); ?>
</div>

<div id="temp">
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
