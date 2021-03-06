<?php get_header(); ?>

<!--div>
    <div class="grid_container centered">
        <div class="section grid_3_3">
            <h1 class="tight">
<?php
    echo(ucwords(get_query_var('category_name')));
?>
            </h1>
        </div>
    </div>
</div-->

<?php
$categories = array();

while (have_posts()) {
    the_post();
    
    $tags = get_the_tags();
    $date = ($tags) ? current($tags)->name : '';
    
    foreach (get_the_category() as $category) {
        $categories[$category->cat_name][] = array( 'post' => $post,
                                                    'date' => $date );
    }
}

// reverse alpha order on category names
krsort($categories);

// post array comparison, uses date value
// falls back to post title

foreach ($categories as $key => $value) {
    if ($key != 'Folio') {
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
        
        usort($value, 'cmp_date');
        $counter = 0;
        
        foreach ($value as $item) {
            $image = get_images($item['post']->ID, 'crop');
            $href = get_permalink($item['post']->ID);
            
            $counter++;
?>
        <a class="block" href="<?php echo($href); ?>">
            <div class="grid_1_3 left">
                <div class="image"><?php echo($image); ?></div>
                <div class="text">
                    <h3 class="bold">
                        <?php echo($item['post']->post_title); ?>
                    </h3>
                </div>
            </div>
        </a>
<?php
            if ($counter % 3 == 0) {
?>
        <div class="clear zero">
        </div>
<?php
            }
        }
?>
    </div>
    <div class="<?php echo($clear_class); ?> clear">
    </div>
</div>

<?php
    }
}

?>



<?php get_footer(); ?>
