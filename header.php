<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="author" content="Peter Behr" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="all" />
    
    <title>
        <?php bloginfo('name'); ?>
    </title>
    
    <link rel="stylesheet" type="text/css" media="all" title="" href="http://peterbehr.net/biblioteka/css/default.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    
    <script type="text/javascript" src="http://peterbehr.net/biblioteka/js/default.js"></script>
    
    <?php wp_head(); ?>
    
</head>

<body>

<div id="header" class="even">
<?php
if (is_home()) {
?>
    <div class="section">
        <div class="grid_container centered">
            <h1 class="grid_3_3">
                My name is Peter Behr. I code and draw.
            </h1>
            <h3 class="grid_3_3">
                Here are some things I've worked on. More: <a href="<?php bloginfo('url'); ?>/projects/">all projects</a>, <a href="http://peterbehr.tumblr.com">process</a>, <a href="http://www.flickriver.com/photos/peterbehr/sets/72157623305813607/">photographs</a>, <a href="<?php bloginfo('url'); ?>/self/">bio</a>, <a href="https://github.com/peterbehr">source</a>. Get in touch: <a href="http://twitter.com/peterbehr">Twitter</a>, <a href="http://facebook.com/peterbehr">Facebook</a>, or <a href="http://www.linkedin.com/in/peterbehr">LinkedIn</a>.
            </h3>
        </div>
    </div>
<?php
}
?>
</div>

<div id="content">

