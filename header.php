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
            <div class="grid_3_3 icons">
                <a href="<?php bloginfo('url'); ?>/projects/">
                    <div class="icon folio">
                        <div class="inset">
                            <span class="label">All Projects</span>
                        </div>
                    </div>
                </a>
                <a href="http://peterbehr.tumblr.com">
                    <div class="icon process">
                        <div class="inset">
                            <span class="label">Process</span>
                        </div>
                    </div>
                </a>
                <a href="http://www.flickriver.com/photos/peterbehr/sets/72157623305813607/">
                    <div class="icon photo">
                        <div class="inset">
                            <span class="label">Photography</span>
                        </div>
                    </div>
                </a>
                <a href="<?php bloginfo('url'); ?>/self/">
                    <div class="icon self">
                        <div class="inset">
                            <span class="label">Biography</span>
                        </div>
                    </div>
                </a>
                <a href="https://github.com/peterbehr/peterbehr/">
                    <div class="icon source">
                        <div class="inset">
                            <span class="label">Source</span>
                        </div>
                    </div>
                </a>
                <div class="icon contact">
                    <div class="inset">
                        <span class="label">
                            <a href="http://twitter.com/peterbehr">Twitter</a>, <a href="http://facebook.com/peterbehr">Facebook</a>, <a href="http://www.linkedin.com/in/peterbehr">LinkedIn</a>
                        </span>
                    </div>
                </div>
                <div class="zero clear">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
} else {
?>
<div id="header" class="even">
    <div class="section bright slim">
        <div class="grid_container centered icons">
            <div class="grid_3_3">
                <a href="<?php bloginfo('url'); ?>/projects/">
                    <div class="icon folio">
                        <div class="inset">
                            <span class="label">All Projects</span>
                        </div>
                    </div>
                </a>
                <a href="http://peterbehr.tumblr.com">
                    <div class="icon process">
                        <div class="inset">
                            <span class="label">Process</span>
                        </div>
                    </div>
                </a>
                <a href="http://www.flickriver.com/photos/peterbehr/sets/72157623305813607/">
                    <div class="icon photo">
                        <div class="inset">
                            <span class="label">Photography</span>
                        </div>
                    </div>
                </a>
                <a href="<?php bloginfo('url'); ?>/self/">
                    <div class="icon self">
                        <div class="inset">
                            <span class="label">Biography</span>
                        </div>
                    </div>
                </a>
                <a href="https://github.com/peterbehr/peterbehr/">
                    <div class="icon source">
                        <div class="inset">
                            <span class="label">Source</span>
                        </div>
                    </div>
                </a>
                <div class="icon contact">
                    <div class="inset">
                        <span class="label">
                            <a href="http://twitter.com/peterbehr">Twitter</a>, <a href="http://facebook.com/peterbehr">Facebook</a>, <a href="http://www.linkedin.com/in/peterbehr">LinkedIn</a>
                        </span>
                    </div>
                </div>
                <div class="zero clear">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>

<div id="content">

