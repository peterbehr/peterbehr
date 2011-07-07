<!DOCTYPE html>

<html lang="en">

<!--

Peter Behr
Version 0
Peter Behr made this
http://peterbehr.net

-->

<html <?php language_attributes(); ?>>

<head>
    
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="Peter Behr" />
    <meta name="description" content="Portfolio of Peter Behr, a designer from California" />
    <meta name="keywords" content="development, design, drawing, painting" />
    <meta name="robots" content="all" />
    
    <title>
        <?php echo(get_bloginfo('name').(is_home() ? ': Home' : trim(wp_title(':', false, '')))); ?>
    </title>
    
    <link rel="stylesheet" type="text/css" media="all" href="http://peterbehr.net/biblioteka/css/default.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    
    <script type="text/javascript" src="http://peterbehr.net/biblioteka/js/default.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/base.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/analytics.js"></script>
    
    <?php wp_head(); ?>
    
</head>

<body>

<?php
if (is_home()) {
?>
<div id="header">
    <div class="section bright">
        <div class="grid_container centered">
            <h1 class="grid_3_3">
                My name is Peter Behr. I code and draw.
            </h1>
            <div class="grid_3_3">
                <ol class="nav">
                    <li>
                        <a href="<?php bloginfo('url'); ?>/projects/">Folio</a>
                    </li>
                    <li>
                        <a href="http://peterbehr.tumblr.com">Process</a>
                    </li>
                    <li>
                        <a href="http://www.flickriver.com/photos/peterbehr/sets/72157623305813607/">Photo</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/self/">Bio</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/meta/">Meta</a>
                    </li>
                    <li class="contact">
                        <!--<a href="<?php bloginfo('url'); ?>/contact/" class="text">Contact</a>-->
                        <a href="http://twitter.com/peterbehr" class="icon"><img src="http://peterbehr.net/biblioteka/images/others/komodo/twitter_16.png" alt="Twitter" /></a>
                        <a href="http://facebook.com/peterbehr" class="icon"><img src="http://peterbehr.net/biblioteka/images/others/komodo/facebook_16.png" alt="Facebook" /></a>
                        <a href="http://linkedin.com/in/peterbehr" class="icon"><img src="http://peterbehr.net/biblioteka/images/others/komodo/linkedin_16.png" alt="LinkedIn" /></a>
                    </li>
                </ol>
                <div class="zero clear">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
} else {
?>
<div id="header">
    <div class="section dark slim">
        <div class="grid_container centered">
            <div class="grid_3_3">
                <ol class="nav">
                    <li <?php if (is_home()) { ?>class="active"<?php } ?>>
                        <a href="<?php bloginfo('url'); ?>/projects/">Folio</a>
                    </li>
                    <li>
                        <a href="http://peterbehr.tumblr.com">Process</a>
                    </li>
                    <li>
                        <a href="http://www.flickriver.com/photos/peterbehr/sets/72157623305813607/">Photo</a>
                    </li>
                    <li <?php if (is_home()) { ?>class="active"<?php } ?>>
                        <a href="<?php bloginfo('url'); ?>/self/">Bio</a>
                    </li>
                    <li <?php if (is_home()) { ?>class="active"<?php } ?>>
                        <a href="<?php bloginfo('url'); ?>/meta/">Meta</a>
                    </li>
                    <li class="contact">
                        <!--<a href="<?php bloginfo('url'); ?>/contact/" class="text">Contact</a>-->
                        <a href="http://twitter.com/peterbehr" class="icon"><img src="http://peterbehr.net/biblioteka/images/others/komodo/twitter_16.png" alt="Twitter" /></a>
                        <a href="http://facebook.com/peterbehr" class="icon"><img src="http://peterbehr.net/biblioteka/images/others/komodo/facebook_16.png" alt="Facebook" /></a>
                        <a href="http://linkedin.com/in/peterbehr" class="icon"><img src="http://peterbehr.net/biblioteka/images/others/komodo/linkedin_16.png" alt="LinkedIn" /></a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="shadow clear">
        </div>
    </div>
</div>
<?php
}
?>

<div id="content">

