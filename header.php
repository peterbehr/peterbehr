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

<div id="background">
    <div id="border">
        <div id="container">
            <div id="header">
                <div id="nav">
                    <ul id="sections">
                        <li class="normal caps">
                            <a href="<?php echo(get_bloginfo('url')); ?>">
                                Peter Behr
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo(get_bloginfo('url') . '/projects/'); ?>">
                                Projects
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo(get_bloginfo('url') . '/resume/'); ?>">
                                Resume
                            </a>
                        </li>
                        <li class="end">
                            <a href="<?php echo(get_bloginfo('url') . '/contact/'); ?>">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <ul id="scale" class="clear">
                        <li>
                            <span>10</span>
                        </li>
                        <li>
                            <span>20</span>
                        </li>
                        <li>
                            <span>30</span>
                        </li>
                        <li>
                            <span>40</span>
                        </li>
                        <li class="end">
                            <span>50</span>
                        </li>
                    </ul>
                </div>
                <div class="clear zero">
                </div>
            </div>
            <div id="body">