<?php get_header(); ?>

<?php
the_post();

$args = array(  'fields' => 'names' );
$tags = get_tags($args);
if ($tags) {
    echo('something');
    foreach ($tags as $tag) {
        echo('|'.$tag.'|');
    }
} else {
    echo('nothing');
}

echo($post->post_date);
?>

<?php get_footer(); ?>