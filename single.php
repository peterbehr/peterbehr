<?php get_header(); ?>

<?php
the_post();

$args = array(  );
$image = get_images($args);
?>

<div class="bright project">
    <div class="grid_container centered">
        <div class="image grid_3_3"><?php echo($image); ?></div>
        <div class="grid_3_3 text">
            <h2><?php echo($post->post_title); ?></h2>
            <?php echo($post->post_content); ?>
        </div>
    </div>
    <div class="clear zero">
    </div>
</div>

<?php get_footer(); ?>