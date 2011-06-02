<?php get_header(); ?>

<?php
the_post();

$image = get_images($post->ID, 'full');
?>

<div class="section bright bald slim project">
    <div class="grid_container centered">
        <div class="grid_3_3">
            <div class="image"><?php echo($image); ?></div>
        </div>
        <div class="grid_3_3 text">
            <h2><?php echo($post->post_title); ?></h2>
            <?php echo($post->post_content); ?>
        </div>
    </div>
    <div class="clear zero">
    </div>
</div>

<?php get_footer(); ?>