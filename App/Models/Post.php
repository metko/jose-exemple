<?php

namespace App\Models;
use Jose\Models\Post as BasePost;

class Post extends BasePost {

    public function register_acf($builder) {
        $builder->addText('title');
    }

    public function coucou($d = null) {
        return $d ?? 'hello';
    }
}