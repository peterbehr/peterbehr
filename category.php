<?php get_header(); ?>

<?php if (is_category('Projects')) { ?>

                <!--div id="sider">
                </div-->
                <div id="content">
                    <p>
                        Recentlyish:
                    </p>
                    <ul>
                        <li>
                            <a href="http://pbehr.com/css_zen_garden/zurich/">Zurich</a> (theme for the <a href="http://csszengarden.com">CSS Zen Garden</a>)
                        </li>
                        <li>
                            <a href="http://about.me">About.me</a> (I made some of this)
                        </li>
                        <li>
                            <a href="http://pbehr.com/">Cartograph</a> (this site, in progress)
                        </li>
                        <li>
                            <a href="http://oliviacheng.net">Olivia Cheng</a> (a splash page)
                        </li>
                        <li>
                            <a href="http://refractor.me">Refractor</a> (in progress)
                        </li>
                        <li>
                            <a href="http://pbehr.com/colorsort/">Colorsort</a> (jQuery experiment)
                        </li>
                    </ul>
                    <p>
                        Also:
                    </p>
                    <ul>
                        <li>
                            <a href="http://flickr.com/photos/peterbehr/">Flickr</a> (photo portfolio)
                        </li>
                        <li>
                            <a href="http://aristarchus.deviantart.com/gallery/">DeviantArt</a> (temporary art portfolio)
                        </li>
                    </ul>
                </div>

<?php } else if (is_category('Contact')) { ?>

                <!--div id="sider">
                </div-->
                <div id="content">
                    <ul>
                        <li>
                            <a href="http://www.linkedin.com/in/peterbehr">LinkedIn</a> (hire me!)
                        </li>
                        <li>
                            <a href="http://twitter.com/peterbehr/">Twitter</a>
                        </li>
                        <li>
                            <a href="http://facebook.com/peterbehr/">Facebook</a>
                        </li>
                    </ul>
                </div>

<?php } ?>

<?php get_footer(); ?>
