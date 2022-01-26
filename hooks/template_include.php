<?php
global $posts;
global $wp;
if (!is_admin() && is_archive()) {
    // dump('is_archive');
    // dump(jose('context')->context);
    $current = jose('context')->context['post'];
    if ($current instanceof WP_Post_Type) {
        $controller_name = '\App\Controllers\\' . ucfirst($current->name) . 'Controller';
       
        $instance = new $controller_name();
        return $instance->archive();
    }
}

if (!is_admin() && is_single()) {
    $current = jose('context')->context['post'];
    $controller_name = '\App\Controllers\\' . ucfirst($current->post_type) . 'Controller'; 
    $instance = new $controller_name();
    return $instance->single($current);
}
