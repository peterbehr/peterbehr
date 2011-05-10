<?php get_header(); ?>

<?php

$categories = array();

while (have_posts()) {
    the_post();
    foreach (get_the_category() as $category) {
        $categories[$category->cat_name][] = $post;
    }
}

$polarity = 1;

foreach ($categories as $key => $value) {
    if ($key != 'Projects') {
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
        <div class="grid_3_3">
            <h2><?php echo($key); ?></h2>
        </div>

<?php
        foreach ($value as $item) {
            $args = array(  'post_type' => 'attachment',
                            'posts_per_page' => -1,
                            'post_status' => null,
                            'post_parent' => $item->ID
                        ); 
            
            $attachments = get_posts($args);
            
            if ($attachments) {
                $image = wp_get_attachment_image($attachments[0]->ID, 'full');
            } else {
                $image = '';
            }
?>

        <div class="grid_1_3 left">
            <div class="image"><?php echo($image); ?></div>
            <div class="text">
                <h3 class="bold">
                    <?php echo($item->post_title); ?>
                </h3>
            </div>
        </div>

<?php
        }
?>

    <div class="<?php echo($clear_class); ?> clear">
    </div>
</div>

<?php
    }
}

?>



<?php get_footer(); ?>