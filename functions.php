<?php

remove_filter ('the_content',  'wpautop');
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');

?>