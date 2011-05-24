<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post();
?>
<div class="section">
    <div class="grid_container centered">
        <div class="grid_3_3 text">
            <h1>
                <?php echo($post->post_title); ?>
            </h1>
            <?php echo($post->post_content); ?>
        </div>
    </div>
</div>
<?php
}
?>

<?php get_footer(); ?>