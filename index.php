<?php get_header(); ?>

<?php

$polarity = 1;

// get only featured posts
query_posts(array('category_name' => 'projects', 'order' => 'ASC', 'tag' => 'featured'));
while (have_posts()) {
    the_post();
    
    if ($polarity) {
        $section_class = 'dark';
        $clear_class = 'shadow';
        $polarity = 0;
    } else {
        $section_class = 'bright';
        $clear_class = 'zero';
        $polarity = 1;
    }
    
    $image = get_images($post->ID, 'crop');
    $href = get_permalink($post->ID);
?>

<div class="section project <?php echo($section_class); ?>">
    <div class="grid_container centered">
        <div class="grid_2_3 left">
            <div class="image"><?php echo($image); ?></div>
        </div>
        <div class="grid_1_3 right text">
            <h3 class="bold">
                <?php echo($post->post_title); ?>
            </h3>
            <?php echo($post->post_content); ?>
            <p class="right">
                <a href="<?php echo($href); ?>" class="italic">View &rarr;</a>
            </p>
        </div>
    </div>
    <div class="<?php echo($clear_class); ?> clear">
    </div>
</div>

<?php
}
?>

<div class="section grid_container centered">
    <div class="grid_3_3">
        <h3 class="right">
            <a href="">All projects &rarr;</a>
        </h3>
    </div>
</div>

<?php get_footer(); ?>