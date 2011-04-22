<?php get_header(); ?>

<!--div class="section odd">
    
    <div class="grid_container centered">
        
        <p class="grid_1_3 left">
            Quo usque tandem abutere, Catilina, patientia nostra? quam diu etiam furor iste tuus nos eludet? quem ad finem sese effrenata iactabit audacia?
        </p>
        
        <div class="grid_2_3 right">
            <div style="padding: 10px; width: 400px; background-color: #0a4c95; height: 300px;"></div>
        </div>
        
    </div>
    
    <div class="shadow clear">
    </div>
    
</div-->

<?php

$counter = 1;
query_posts(array('category_name' => 'Projects', 'order' => 'ASC'));
while (have_posts()) : the_post(); ?>

<div class="section project <?

if ($counter) { echo("odd"); } else { echo("even"); } ?>">
    
    <div class="grid_container centered">
        <?php

$args = array(  'post_type' => 'attachment',
                'posts_per_page' => -1,
                'post_status' => null,
                'post_parent' => $post->ID
            ); 

$attachments = get_posts($args);

if ($attachments) {
    foreach ($attachments as $attachment) {
        echo('<div class="grid_2_3 left image">');
        echo(wp_get_attachment_image($attachments[0]->ID, 'full'));
        echo('</div>');
    }
    echo('<div class="grid_1_3 right post">');
} else {
    echo('<div class="grid_3_3 post">');
}
?>
            <h3 class="bold"><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
    </div>
    
<?php if ($counter) { ?>
    
    <div class="shadow clear">
    </div>
    
<?php $counter = 0; } else { ?>
    <div class="clear zero">
    </div>
    
<?php $counter = 1; } ?>
    
</div>

<?php

endwhile;

?>

</div>

<?php get_footer(); ?>
