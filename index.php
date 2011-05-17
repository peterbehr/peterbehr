<?php get_header(); ?>

<?php

$polarity = 1;

query_posts(array('category_name' => 'Projects', 'order' => 'ASC'));
while (have_posts()) {
    the_post();
    
    $args = array(  'post_type' => 'attachment',
                    'posts_per_page' => -1,
                    'post_status' => null,
                    'post_parent' => $post->ID
                ); 
    
    $attachments = get_posts($args);
    
    if ($attachments) {
        $image = wp_get_attachment_image($attachments[0]->ID, 'full');
    } else {
        $image = '';
    }
    
    if ($polarity) {
        $section_class = 'dark';
        $clear_class = 'shadow';
        $polarity = 0;
    } else {
        $section_class = 'bright';
        $clear_class = 'zero';
        $polarity = 1;
    }
?>

<div class="section project <?php echo($section_class); ?>">
    <div class="grid_container centered">
        <div class="grid_2_3 left image"><?php echo($image); ?></div>
        <div class="grid_1_3 right text">
            <h3 class="bold">
                <?php echo($post->post_title); ?>
            </h3>
            <?php echo($post->post_content); ?>
        </div>
    </div>
    <div class="<?php echo($clear_class); ?> clear">
    </div>
</div>

<?php
}
?>

<?php get_footer(); ?>