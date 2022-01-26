<?php
$query = $args[0];
if ($query->is_archive() && !is_admin()) {
    // maybe check for specific page here
    // if (is_tax('your-taxonomy') { 
    // $query = false;
    // $query->set('posts_per_page', 1);
    wp_reset_query();;
    return $query;
    // }
}
