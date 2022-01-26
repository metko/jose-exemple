<?php
global $posts;
global $wp;
// dd($posts);
dd('dfsfd');
if (!is_admin() && is_archive()) {
    jose('context')->set('posts', jose()->cast($posts));

    jose('context')->set('pagination', paginate_links(['type' => 'array']));
    jose('context')->set('post', get_queried_object());
}

if (!is_admin() && is_single()) {
    jose('context')->set('post', jose()->cast($posts)[0]);
}
// dump(get_queried_object());
// dump($posts);
// dump($wp);
// dump($args);