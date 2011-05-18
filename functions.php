<?php

remove_filter('the_content',  'wpautop');
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');

$polarity = 1;

function get_images($id, $width) {
    $args = array(  'post_type' => 'attachment',
                    'posts_per_page' => -1,
                    'post_status' => null,
                    'post_parent' => $id
                ); 
    $attachments = get_posts($args);
    $srcs = array();
    foreach ($attachments as $attachment) {
        if (substr($attachment->post_title, -3, 3) == $width) {
            $src = wp_get_attachment_image_src($attachment->ID, 'full');
            $src[3] = $attachment->post_title;
            $srcs[] = $src;
        }
    }
    $count = count($srcs);
    if ($count) {
        $src = $srcs[0][0];
        $width = $srcs[0][1];
        $height = $srcs[0][2];
        $alt = $srcs[0][3];
        $image = '<img src="'.$src.'" width="'.$width.'" height="'.$height.'" alt="'.$alt.'" />';
    } else {
        $image = 'Image not found';
    }
    return($image);
}

?>