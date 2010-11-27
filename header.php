<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php

    // Add the blog name.
    bloginfo( 'name' );

    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="header">
    <div id="map">
        <div></div>
    </div>
    <div id="nav">
        <div class="inset">
            <ul id="sections">
                <li class="peg"></li>
                <li class="normal">
                    <a href="<?php echo(get_bloginfo('url')); ?>">
                        Peter Behr
                    </a>
                </li>
                <li class="peg"></li>
                <li>
                    <a href="<?php echo(get_bloginfo('url') . '/projects/'); ?>">
                        Projects
                    </a>
                </li>
                <li class="peg"></li>
                <li>
                    <a href="<?php echo(get_bloginfo('url') . '/resume/'); ?>">
                        Resume
                    </a>
                </li>
                <li class="peg"></li>
                <li class="end">
                    <a href="<?php echo(get_bloginfo('url') . '/contact/'); ?>">
                        Contact
                    </a>
                </li>
                <li class="peg"></li>
            </ul>
            <ul id="scale" class="clear">
                <li class="peg"></li>
                <li>
                    <span>10</span>
                </li>
                <li class="peg"></li>
                <li>
                    <span>20</span>
                </li>
                <li class="peg"></li>
                <li>
                    <span>30</span>
                </li>
                <li class="peg"></li>
                <li>
                    <span>40</span>
                </li>
                <li class="peg"></li>
                <li>
                    <span>50</span>
                </li>
                <li class="peg"></li>
            </ul>
        </div>
    </div>
    <div id="shadow">
    </div>
</div>

<div id="container">
    <div id="content">