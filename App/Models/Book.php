<?php

namespace App\Models;
use Jose\Models\Post;

class Book extends Post {

    public function register_acf($builder) {
        $builder->addText('title');
    }

    public function coucou($d = null) {
        return $d ?? 'hello';
    }
}